<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Brands;
use App\Models\BodyType;
use App\Models\Cars;



class ProductController extends Controller
{
    public function index($brandId,$bodyTypeId)
    {
        $bodyType = BodyType::limit(10)->get();
        $brands = Brands::limit(10)->get();
        
        return view('.pages.listing', compact('brands', 'bodyType','brandId','bodyTypeId'));
    }
    public function search(Request $request)
    {
        try {
            // Retrieve input parameters
            $brandIds = $request->input('brandIds', []);
            $trans = $request->trans;
            $bodyType = $request->input('bodyType');
            $bodyType = $request->input('search');

            // Record the start time
            $startTime = microtime(true);

            // Initialize the query
            $query = Cars::query();

            // Apply filters
            if (!empty($brandIds)) {
                $query->whereIn('brand_id', $brandIds);
            }
            if (!empty($search)) {
                $query->whereIn('brand_id', $brandIds);
            }

            if (!empty($trans)) {
                $query->where('transmission', 'like', '%' . $trans . '%');
            }

            if (!empty($bodyType)) {
                $query->where('body_type_id', 'like', '%' . $bodyType . '%');
            }
            $sql = $query->toSql();
            
            // Paginate the results
            $products = $query->orderBy('id', 'DESC')->paginate(16);
            //dd($sql,$products->all(),$trans);
            // Record the end time
            $endTime = microtime(true);

            // Calculate the response time in milliseconds
            $responseTime = ($endTime - $startTime) * 1000;

            return response()->json([
                'current_page' => $products->currentPage(),
                'data' => $products->items(),
                'length' => count($products->items()),
                'from' => $products->firstItem(),
                'last_page' => $products->lastPage(),
                'per_page' => $products->perPage(),
                'to' => $products->lastItem(),
                'total' => $products->total(),
                'response_time_ms' => $responseTime,
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
        $carDeatils=Cars::find($carId)->toArray();
        $carImages=Cars::find($carId)->toArray();
        //dd($carDeatils);
        
        return view('.pages.listing-details', compact('carDeatils'));
    }
}

