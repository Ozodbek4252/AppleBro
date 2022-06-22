<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product as ModelsProduct;

class SingleProductController extends Controller
{
    public function show($slug){
        $product = ModelsProduct::where('slug', $slug)->first();
        $recommended = ModelsProduct::orderBy('id', 'desc')->take(4)->get();
        
        if (session()->get('locale') == '') {
            session()->put('locale', 'ru');
            app()->setLocale('ru');
    
        } else {
            app()->setLocale(session()->get('locale'));
        }
        $lang = session()->get('locale');
        return view("view.single-product", [
            "id" => $product->id,
            "lang" => $lang,
            "recommended" => $recommended
        ]);
    }
}
