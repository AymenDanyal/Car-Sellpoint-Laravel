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
            }])
            ->limit(10)
            ->get(['id', 'name','brand_id']);
            dd($models);
        }else{
            $models = Models::where('brand_id', $brandId)
            ->with(['variants' => function($query) {
                $query->limit(10); 
            }])
            ->limit(10)
            ->get(['id', 'name','brand_id']);
        }
        $bodyTypes = BodyType::limit(10)->get();
        $recentCars = Cars::orderBy('id', 'DESC')->take(5)->get();
       
       

                        
        return view('pages.listing', compact('models', 'bodyTypes', 'brandId', 'bodyTypeId','recentCars'));
    }
    
    public function search(Request $request)
    {
        //dd($request->all());
        try {
            // Retrieve input parameters
            $modelIds = $request->input('modelIds', []);
            $brandId = $request->input('brandId');
            $trans = $request->input('trans');
            $bodyType = $request->input('bodyType');
    
            $query = Cars::query();
    
            if (!empty($modelIds)) {
                $carIds = CarValues::where('brand_id', $brandId)
                    ->whereIn('model_id', $modelIds)
                    ->pluck('car_id')
                    ->unique();
    
                $query->whereIn('id', $carIds);
            }
            if ($brandId !== null) {
                $query->where('brand_id', $brandId);
            }
            if ($bodyType !== null) {
                $query->where('body_type_id', $bodyType);
            }
    
            if ($trans !== null) {
                $query->where('transmission', $trans);
            }
            
            //dd($query->toSql(),$brandId,$modelIds,$carIds);
            
            // Paginate the results
            $products = $query->orderBy('id', 'DESC')->paginate(16);

            
    
            return response()->json([
                'current_page' => $products->currentPage(),
                'data' => $products->all(),
                'length' => count($products),
                'from' => $products->firstItem(),
                'last_page' => $products->lastPage(),
                'per_page' => $products->perPage(),
                'to' => $products->lastItem(),
                'total' => $products->total(),
            ], 200); // HTTP status code 200 for success
        } catch (\Exception $e) {
            // Log the error
            Log::error('Product search error: ' . $e->getMessage());
    
            return response()->json([
                'message' => 'An error occurred while processing your request.',
                'error' => $e->getMessage(),
            ], 500); // HTTP status code 500 for internal server error
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

