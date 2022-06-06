<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        if (session()->get('locale') == '') {
            session()->put('locale', 'ru');
            app()->setLocale('ru');
    
        } else {
            app()->setLocale(session()->get('locale'));
        }
        $lang = session()->get('locale');
        $newest_products = Product::orderBy('updated_at', 'desc')->take(4)->with('product_options')->get();
        // foreach($newest_products as $newest_product){
        //     $arr = [];
        //     $details_price = 0;
        //     foreach($newest_product->product_options as $product_option){
        //         if(!array_key_exists($product_option->option->name, $arr)){
        //             $arr[$product_option->option->name][] = $product_option->option->value;
        //             $details_price += $product_option->price;
        //         }
        //     }
        // }
        // $categories = Category::all();
        $apple = Category::where('category_id', 18)->get();
        $samsung = Category::where('category_id', 19)->get();
        $xiaomi = Category::where('category_id', 20)->get();
        // $categories = Category::where('parent_id', $apple->id)->get();
        return view('view.home', [
            'lang' => $lang,
            // 'categories' => $categories,
            'newest_products' => $newest_products,
            'apple' => $apple,
            'samsung' => $samsung,
            'xiaomi' => $xiaomi
        ]);
    }
}
