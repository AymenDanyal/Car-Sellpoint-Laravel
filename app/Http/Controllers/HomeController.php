<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;
use App\Models\Models;
use App\Models\Variants;
use App\Models\Cars;
use App\Models\BodyType;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $featured = Cars::where('is_featured', 1)->limit(6)->get();
        $brands = Brands::limit(10)->get();

        return view('index', compact('featured', 'brands'));
    }
    public function search(Request $request)
    {
        $request->validate([
            'boxId' => 'required|string',
            'query' => 'required|string|min:3'
        ]);

        $boxId = $request->get('boxId');
        $query = $request->get('query');
        $results = [];

        switch ($boxId) {
            case 'brand':
                $results = Brands::where('name', 'LIKE', "%{$query}%")->get();
                break;
            case 'model1':
                $results = Models::where('name', 'LIKE', "%{$query}%")->get();
                break;
            case 'variant':
                $results = Variants::where('name', 'LIKE', "%{$query}%")->get();
                break;
            default:
                return response()->json([
                    'error' => 'Invalid boxId'
                ], 400);
        }

        return response()->json([
            'results' => $results,
            'count' => count($results)
        ]);
    }
    
    public function searchForm(Request $request)
    {
        $brandId=null; 
        $bodyTypeId=null;
        $bodyTypes = BodyType::limit(10)->get();
        $recentCars = Cars::orderBy('id', 'DESC')->take(5)->get();
        $models = Models::where('brand_id', $brandId)
                        ->with(['variants' => function($query) {
                            $query->limit(10); 
                        }])
                        ->limit(10)
                        ->get(['id', 'name','brand_id']);
       

                        
        return view('pages.listing', compact('models', 'bodyTypes', 'brandId', 'bodyTypeId','recentCars'));
    }
}









        // $j = 1;
        // $k = 1;
        // $l = 1;
        // $m = 1;
        // for($i=1;$i<91;$i++)
        // {

        //         // $variant = new Cars();
        //         // $variant->id = $i+4;
        //         // $variant->title = 'Car '.$i;

        //         // $variant->engineCapacity = $i*10;
        //         // $variant->engineType = $i % 2 == 0 ?  'Diesel':'Petrol';
        //         // $variant->image = '/images/posting/'.$j.'.jpg';//1 28
        //         // $variant->transmission = $i % 2 == 0 ?  'auto':'manual';;
        //         // $variant->price = $i*1000;
        //         // $variant->year = 2000+$i;
        //         // $variant->body_type_id  = $k;
        //         // $variant->dealer_id    = $l;
        //         // $variant->brand_id  = $m;
        //         // $variant->description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ';
        //         // $variant->save();
        //         // $j++;
        //         // $k++;
        //         // $l++;
        //         // $m++;
        //   if($j == 28){
        //     $j = 1;
        //   }
        //   if($k == 5){
        //     $k = 1;
        //   }
        //   if($l == 2){
        //     $l = 1;
        //   }
        //   if($m == 9){
        //     $m = 1;
        //   }
        // }

        // Retrieve all cars
        // $cars = Cars::all();
        // foreach ($cars as $car) {
        //     // Get the brand ID
        //     $brandId = $car->brand_id;

        //     // Get the models for the brand
        //     $models = Models::where('brand_id', $brandId)->get();

        //     foreach ($models as $model) {
        //         // Get the model ID
        //         $modelId = $model->id;

        //         // Get the variants for the model
        //         $variants = Variants::where('model_id', $modelId)->get();

        //         foreach ($variants as $variant) {
        //             // Get the variant ID
        //             $variantId = $variant->id;

        //             // Store the data in the car_values table
        //             DB::table('car_values')->insert([
        //                 'car_id' => $car->id,
        //                 'brand_id' => $brandId,
        //                 'model_id' => $modelId,
        //                 'variant_id' => $variantId,
        //             ]);
        //         }
        //     }
        // }