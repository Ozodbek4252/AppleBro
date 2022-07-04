<?php

namespace App\Http\Controllers\Front;

use App\Helpers\PaginationHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AllProductsController extends Controller
{
  public function index($id = null){
    $products = [];
    $categories = [];
    $suggested_categories = [];
    $main_category = Category::where('id', $id)->with('products')->first();
    if(!$main_category->category_id){
      $categories = Category::where('category_id', $id)->with('products')->get();
      $suggested_categories = $categories;
    }else{
      $suggested_categories = Category::where('category_id', $main_category->category_id)->get();
    }

    if($categories){
      foreach($categories as $category){
        $products[] = $category->products;
      }
      $products = collect($products)->collapse()->all();
    }else{
      $products = $main_category->products;
    }

    $showPerPage = 9;

    $products = PaginationHelper::paginate($products, $showPerPage);

    return view('view.all-products', [
      'main_category' => $main_category,
      'category_id' => (int)$id,
      'products' => $products,
      'suggested_categories' => $suggested_categories
    ]);
  }
}
