<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;
use App\Models\Models;
use App\Models\Variants;
use App\Models\Cars;
use App\Models\BodyType;
use App\Models\CarValues;
use App\Models\Images;
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
            'query' => 'required|string|min:3',
        ]);

        $query = $request->get('query');

        $brands = Brands::where('name', 'LIKE', "%{$query}%")
            ->with(['models.variants'])
            ->limit(5)
            ->get();

        $models = [];
        $variants = [];

        foreach ($brands as $brand) {
            foreach ($brand->models as $model) {
                $models[] = $model;
                foreach ($model->variants as $variant) {
                    $variants[] = $variant;
                }
            }
        }

        return response()->json([
            'brands' => $brands,
            'models' => $models,
            'variants' => $variants,
            'brands_count' => $brands->count(),
            'models_count' => count($models),
            'variants_count' => count($variants),
        ]);
    }
    
    public function searchForm(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'brandId' => 'nullable',
            'modelId' => 'nullable',
            'variantId' => 'nullable',
        ]);

            $brandId = $request->input('brandId');
            $modelId = $request->input('modelId');
            $variantId = $request->input('variantId');
            //dd($brandId, $modelId, $variantId);

            $models = Models::where('brand_id', $brandId)
            ->with(['variants' => function($query) {
                $query->limit(10); 
            }])
            ->limit(10)
            ->get(['id', 'name','brand_id']);

           // dd($models);
        
        $bodyTypes = BodyType::limit(10)->get();
        $recentCars = Cars::orderBy('id', 'DESC')->take(5)->get();
       
       

                        
        return view('pages.listing', compact('models', 'bodyTypes','recentCars', 'brandId','modelId', 'variantId'));
    }
}






    
// $j = 1;
// $k = 1;
// $l = 1;
// $m = 1;

// for($i=3;$i<=94;$i++)
// {
//     for($j=1;$j<=6;$j++)
//     {
//         $variant = new Images();
//         $variant->car_id = $i;
//         $variant->url = '/images/single-page/'.$j.'.jpg';
//         $variant->save();
//     }
// }



    //     $j = 1;
    //     $k = 1;
    //     $l = 1;
    //     $m = 1;
    //     for($i=2;$i<=7;$i++)
    //     {
    //             $variant = new Images();
    //             $variant->car_id = $i;
    //             $variant->is_parent = 0;
    //             $variant->parent_id = 2;
    //             $variant->url = '/images/single-page/'.$j.'.jpg';
    //             $variant->save();
                
                
    //             $j++;
    //             $k++;
    //             $l++;
    //             $m++;
    //       if($j == 28){
    //         $j = 1;
    //       }
    //       if($k == 5){
    //         $k = 1;
    //       }
    //       if($l == 2){
    //         $l = 1;
    //       }
    //       if($m == 9){
    //         $m = 1;
    //       }
    //     }




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