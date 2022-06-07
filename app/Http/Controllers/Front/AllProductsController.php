<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllProductsController extends Controller
{
    public function index($id = null){
        return view('view.products', [
            'category_id' => (int)$id
        ]);
    }
}
