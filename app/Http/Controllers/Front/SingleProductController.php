<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
// use App\Http\Livewire\Product;
use App\Models\Product as ModelsProduct;

class SingleProductController extends Controller
{
    public function show($id){
        if (session()->get('locale') == '') {
            session()->put('locale', 'ru');
            app()->setLocale('ru');
    
        } else {
            app()->setLocale(session()->get('locale'));
        }
        $lang = session()->get('locale');
        return view("view.single-product", [
            "id" => $id,
            "lang" => $lang,
        ]);
    }
}
