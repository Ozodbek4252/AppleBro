<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Banner;

class HomeController extends Controller
{
    public function index(){
        if (session()->get('locale') == '') {
            session()->put('locale', 'ru');
            app()->setLocale('ru');
    
        } else {
            app()->setLocale(session()->get('locale'));
        }
        $banners = Banner::all();
        $lang = session()->get('locale');
        $newest_products = Product::orderBy('updated_at', 'desc')->take(4)->with('product_options')->get();
        $categories = Category::where('category_id', '!=', null)->get();
        $popular = Category::where('popular', '!=', null)->get();
        $apple = Category::where('name', 'Apple')->first();
        $samsung = Category::where('name', 'Samsung')->first();
        $xiaomi = Category::where('name', 'Xiaomi')->first();
        return view('view.home', [
            'lang' => $lang,
            'banners' => $banners,
            'categories' => $categories,
            'popular' => $popular,
            'newest_products' => $newest_products,
            'apple' => $apple,
            'samsung' => $samsung,
            'xiaomi' => $xiaomi
        ]);
    }
}
