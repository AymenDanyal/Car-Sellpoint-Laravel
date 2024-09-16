<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\Brands;
use App\Models\Models;
use App\Models\Variants;
use App\Models\CarValues;
use App\Models\Images;
use App\Models\BodyType;

class ProductController extends Controller
{
    public function index($brandId, $bodyTypeId)
    {
        if($bodyTypeId!=0){
            $carIds=Cars::where('body_type_id', $bodyTypeId)->pluck('id');
            
            $modelIds=CarValues::whereIn('car_id', $carIds)->pluck('model_id')->unique();
            
            $models = Models::whereIn('id', $modelIds)->with(['variants' => function($query) {
                $query->limit(10); 
            },'brand'])
            ->limit(10)
            ->get(['id', 'name','brand_id']);
        }else{
            $models = Models::with('brand')->where('brand_id', $brandId)
            ->with(['variants' => function($query) {
                $query->limit(10); 
            }])
            ->limit(10)
            ->get(['id', 'name','brand_id']);

           
        }
        //dd($models);
        $bodyTypes = BodyType::limit(10)->get();
        $recentCars = Cars::orderBy('id', 'DESC')->take(5)->get();
       
       

                        
        return view('pages.listing', compact('models', 'bodyTypes', 'brandId', 'bodyTypeId','recentCars'));
    }
    
    public function search(Request $request)
    {
        try {
            $brandId = $request->input('brandId');
            $modelIds = $request->input('modelIds', []);
            $modelId = $request->input('modelId');
            $variantId = $request->input('variantId');
            $trans = $request->input('trans');
            $bodyType = $request->input('bodyType');
            $bodyTypeId = $request->input('bodyTypeId');
            $search = $request->input('search');
            
    
            $carQuery = CarValues::query();
            
    
            if ($brandId) {
                $carQuery->where('brand_id', $brandId);
            }
            if (!empty($modelIds)) {
                $carQuery->whereIn('model_id', $modelIds);
            }
            if ($modelId) {
                $carQuery->where('model_id', $modelId);
            }
            if ($variantId) {
                $carQuery->where('variant_id', $variantId);
            }
    
            $carIds = $carQuery->pluck('car_id')->unique();
    
            // Debug output
            if ($carIds->isEmpty()) {
                return response()->json(['message' => 'No cars found for the given criteria.'], 404);
            }
    
            $query = Cars::query();
    
            if (!empty($carIds)) {
                $query->whereIn('id', $carIds);
            }
            if ($bodyType && $bodyType !== '0') {
                $query->where('body_type_id', $bodyType);
            }
            if ($bodyTypeId && $bodyTypeId !== '0') {
                $query->where('body_type_id', $bodyTypeId);
            }
            if ($trans) {
                $query->where('transmission', $trans);
            }
    
            // Debug output
            //dd($query->toSql(), $query->getBindings());

            if ($search) {
                $query->where(function($q) use ($search) {
                    $q->where('title', 'like', '%' . $search . '%')
                      ->orWhere('engineCapacity', 'like', '%' . $search . '%')
                      ->orWhere('engineType', 'like', '%' . $search . '%')	
                      ->orWhere('transmission', 'like', '%' . $search . '%')
                      ->orWhere('year', 'like', '%' . $search . '%')
                      ->orWhere('description', 'like', '%' . $search . '%'); 
                });
            }
    
            $products = $query->orderBy('id', 'DESC')->with('brand')->paginate(8);
    
            return response()->json([
                'current_page' => $products->currentPage(),
                'data' => $products->all(),
                'length' => count($products),
                'from' => $products->firstItem(),
                'last_page' => $products->lastPage(),
                'per_page' => $products->perPage(),
                'to' => $products->lastItem(),
                'total' => $products->total(),
            ], 200);
        } catch (\Exception $e) {
            Log::error('Product search error: ' . $e->getMessage());
    
            return response()->json([
                'message' => 'An error occurred while processing your request.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function listingDetails($carId)
    {   
        $carDetails = Cars::with('brand', 'images','dealer')->where('id', $carId)->first();
        
        if (!$carDetails) {
            abort(404, 'Page Not Found');
        }
        $recentCars = Cars::orderBy('created_at','asc')->limit(3)->get();
       
        return view('pages.listing-details', compact('carDetails','recentCars'));
    }
    
}

