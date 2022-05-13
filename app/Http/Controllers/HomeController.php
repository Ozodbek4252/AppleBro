<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $newest_products = Product::orderBy('updated_at', 'desc')->take(4)->get();
        $categories = Category::all();
        return view('view.home', [
            'categories' => $categories,
            'newest_products' => $newest_products,
        ]);
    }
}
