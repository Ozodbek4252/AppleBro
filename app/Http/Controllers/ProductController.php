<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Option;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductOption;
use App\Models\ProductPhoto;

class ProductController extends Controller
{
  public function index(){}
   
  public function create(){
    
  }

  public function store(Request $request){
    dd($request->all());
    $product = new Product;
    $product->name = $request->name;
    $product->price = $request->price;
    $product->category_id = $request->category;

    $product_image_folder = date('Y-m-d') .'_'. str_replace(' ', '-', strtolower($request->name));
    $product_image_path = base_path() . '/public/images/productImages/' . $product_image_folder;
    $photo_name = Str::random(10);
    if($request->hasFile('product_photo') || $request->hasFile('product_photos')){
      $request->file('product_photo')->move($product_image_path, $photo_name .  '.' . $request->file('product_photo')->getClientOriginalExtension());
      $product->main_photo_path = '/public/images/productImages/' . $product_image_folder;
      $product->main_photo = $photo_name .  '.' . $request->file('product_photo')->getClientOriginalExtension();
      if($request->hasFile('product_photos')){
        $product->save();
        $num = 1;
        foreach($request->file('product_photos') as $product_photo){
          $productPhoto = new ProductPhoto;
          $product_photo_name = $photo_name . '_'. $num++ . '.' . $product_photo->getClientOriginalExtension();
          $product_photo->move($product_image_path, $product_photo_name);
          $productPhoto->product_id = $product->id;
          $productPhoto->product_option_id = null;
          $productPhoto->photo = $product_photo_name;
          $productPhoto->photo_path = '/public/images/productImages/' . $product_image_folder;
          $productPhoto->save();
        }
      }
    };

    if($request->i != null){
      $productOption = new ProductOption();
      $productOption->product_id = $product->id;
      if($request->i == 1){
        $productOption->option_id = $request->optionId;
        $productOption->price = $request->productOptionPrice;

        if($request->hasFile('productOptionPhotos')){
          $num = 1;
          foreach($request->file('productOptionPhotos') as $productOptionPhoto){
            $productPhotoOption = new ProductPhoto;
            $product_option_photo_name = $photo_name . '-option_'. $num++ . '.' . $productOptionPhoto->getClientOriginalExtension();
            $productOptionPhoto->move($product_image_path, $product_option_photo_name);
            $productPhotoOption->product_id = null;
            $productPhotoOption->product_option_id = $productOption->id;
            $productPhotoOption->photo = $product_option_photo_name;
            $productPhotoOption->photo_path = '/public/images/productImages/' . $product_image_folder;
            $productPhotoOption->save();
          }
        }
      }elseif($request->i > 1){
        for ($i=0; $i < $request->i; $i++) { 
          $productOption->option_id = $request->optionId[$i];
          $productOption->price = $request->productOptionPrice[$i];

          if($request->hasFile("productOptionPhotos[$i]")){
            $num = 1;
            foreach($request->file("productOptionPhotos[$i]") as $productOptionPhoto[$i]){
              $productPhotoOption = new ProductPhoto;
              $product_option_photo_name = $photo_name . '-option_'. $num++ . '.' . $productOptionPhoto[$i]->getClientOriginalExtension();
              $productOptionPhoto[$i]->move($product_image_path, $product_option_photo_name);
              
              $productPhotoOption->product_id = null;
              $productPhotoOption->product_option_id = $productOption->id;
              $productPhotoOption->photo = $product_option_photo_name;
              $productPhotoOption->photo_path = '/public/images/productImages/' . $product_image_folder;
              $productPhotoOption->save();
            }
          }
        }
      }

      

      $productOption->save();
    }


    $categories = Category::all();
    $options = Option::all();
    return redirect()->route('admin.products')->with('categories', $categories)->with('options', $options);
    return view('products.index', [
      'categories' => $categories,
      'options' => $options,
    ]);
  }

  public function show(){}

}
