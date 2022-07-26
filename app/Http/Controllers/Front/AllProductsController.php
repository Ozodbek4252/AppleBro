<?php

namespace App\Http\Controllers\Front;

use App\Helpers\PaginationHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AllProductsController extends Controller
{
  public function index($id = null){
    $products = [];
    $categories = [];
    $suggested_categories = [];
    $parent_category = Category::where('id', $id)->with('products')->first();
    $status = '';
    if($parent_category){
      if(!count($parent_category->categories)>0 && $parent_category->category_id){
        // grandchild
        $suggested_categories = Category::where('category_id', $parent_category->category_id)->with('products')->get();
        $products = $parent_category->products;
        $status = 'grandchild';
      }elseif(count($parent_category->categories)>0 && $parent_category->category_id){
        // child
        $suggested_categories = Category::where('category_id', $parent_category->category_id)->with('products')->get();
        $products = $parent_category->products;
        foreach($parent_category->categories as $category){
          $products[] = $category->products;
        }
        $products = collect($products)->collapse();
        $status = 'child';
      }elseif(count($parent_category->categories)>0 && !$parent_category->category_id){
        // parent
        $suggested_categories = Category::where('category_id', $parent_category->id)->get();
        $status = 'parent';

        foreach($parent_category->categories as $categories){
          foreach($categories->categories as $category){
            $products[] = $category->products;
          }
        }
        $products = collect($products)->collapse();
      };
    }else{
      $suggested_categories = Category::where('category_id', null)->with('products')->get();
      $products = Product::all();
      $status = 'parent';
    }

    $showPerPage = 9;

    $products = PaginationHelper::paginate($products, $showPerPage);


    return view('view.all-products', [
      'main_category' => $parent_category,
      'category_id' => (int)$id,
      'products' => $products,
      'suggested_categories' => $suggested_categories,
      'status' => $status,
    ]);
  }
}
