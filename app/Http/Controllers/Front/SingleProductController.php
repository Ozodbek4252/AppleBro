<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product as ModelsProduct;

class SingleProductController extends Controller
{
    public function show($slug){
        $product = ModelsProduct::where('slug', $slug)->first();
        $recommended = ModelsProduct::orderBy('id', 'desc')->take(4)->get();
        
        return view("view.single-product", [
            "id" => $product->id,
            "recommended" => $recommended
        ]);
    }
}
