<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
// use App\Http\Livewire\Product;
use App\Models\Product as ModelsProduct;

class SingleProductController extends Controller
{
    public function show($id){
        return view("view.single-product", [
            "id" => $id
        ]);
    }
}
