<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Option;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductOption;
use App\Models\ProductPhoto;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
  public function index(){}
  
  public function create(){}

  public function store(Request $request){
    $product = new Product;
    $product->name = $request->name;
    $product->price = $request->price;
    $product->category_id = $request->category;
    
    $product_image_folder_name = date('Y-m-d') .'_'. str_replace(' ', '-', strtolower($request->name));
    $product_image_path = 'images/productImages/'.$product_image_folder_name;
    $photo_name = Str::random(10);
    
    if($request->hasFile('product_photo') || $request->hasFile('product_photos')){
      if (!file_exists($product_image_path)) {
        mkdir($product_image_path, 0700, true);
      }
      $height = Image::make($request->file('product_photo'))->height();
      $width = Image::make($request->file('product_photo'))->width();
      $image = Image::make($request->file('product_photo'))->encode('webp', 90)
                  ->resize($width, $height)
                  ->save(public_path($product_image_path.'/'.$photo_name.'.webp'));
      $product->main_photo = $photo_name . '.webp';
      $product->main_photo_path = $product_image_path;
      $product->save();

      if($request->hasFile('product_photos')){
        $num = 1;
        foreach($request->file('product_photos') as $product_photo){
          $productPhoto = new ProductPhoto;
          $height = Image::make($product_photo)->height();
          $width = Image::make($product_photo)->width();
          $image = Image::make($product_photo)->encode('webp', 90)
          ->resize($width, $height)
          ->save(public_path($product_image_path.'/'.$photo_name.'_'.$num.'.webp'));
          $product->main_photo = $photo_name.'.webp';

          $productPhoto->product_id = $product->id;
          $productPhoto->product_option_id = null;
          $productPhoto->photo = $photo_name.'_'.$num++.'.webp';
          $productPhoto->photo_path = $product_image_path;
          $productPhoto->save();
        }
      }
    };
    
    if($request->option_id){
      
      foreach($request->option_id as $id=>$option_value){
        $productOption = new ProductOption();
        $productOption->product_id = $product->id;
        $productOption->option_id = $option_value;
        $productOption->price = $request->product_option_price[$id];
        $productOption->save();
        
        if($request->product_option_photos != null){
          $num = 0;
          foreach($request->product_option_photos as $key=>$value){
            if($id == $key){
              foreach($value as $keys=>$product_option_photo){
                $productOptionPhoto = new ProductPhoto;
                $productOptionPhoto->product_id = null;
                $productOptionPhoto->product_option_id = $productOption->id;
              
                // storing images in public/images/productOptionImages/
                $height = Image::make($product_option_photo)->height();
                $width = Image::make($product_option_photo)->width();
                $image = Image::make($product_option_photo)->encode('webp', 90)
                ->resize($width, $height)
                ->save(public_path('images/productImages/'.$product_image_folder_name.'/'.$photo_name.'-option_'.$num.'.webp'));
                $productOptionPhoto->photo = $photo_name.'-option_'.$num.'.webp';
                $productOptionPhoto->photo_path = 'images/productImages/'.$product_image_folder_name;
                $productOptionPhoto->save();
                $num++;
              }
            }
          }
        }
      }
    }

    $categories = Category::all();
    $options = Option::all();
    session()->flash('product','Product added successfully.');
    return redirect()->route('admin.products')->with('categories', $categories)->with('options', $options);
    return view('products.index', [
      'categories' => $categories,
      'options' => $options,
    ]);
    
  }

  public function show(){}

  public function update(Request $request, $id){
    $product = Product::find($id);
    $product->name = $request->name;
    $product->price = $request->price;
    $product->category_id = $request->category;
    
    $product_image_folder_name = date('Y-m-d').'_'. str_replace(' ', '-', strtolower($request->name));
    $product_image_path = 'images/productImages/'.$product_image_folder_name;
    $photo_name = Str::random(10);
    
    if($request->hasFile('product_photo')){
      if (file_exists($product->main_photo_path.'/'.$product->main_photo)) {
        unlink($product->main_photo_path.'/'.$product->main_photo);
      }
      $height = Image::make($request->file('product_photo'))->height();
      $width = Image::make($request->file('product_photo'))->width();
      $image = Image::make($request->file('product_photo'))->encode('webp', 90)->resize($width, $height)->save(public_path($product->main_photo_path.'/'.$photo_name.'.webp'));
      $product->main_photo = $photo_name.'.webp';
      $product->main_photo_path = $product_image_path;
      $product->save();
    }

    if($request->hasFile('product_photos')){
      if($product->main_photo_path){
        $product_image_path = $product->main_photo_path;
      }else{
        $product_image_folder_name = date('Y-m-d') .'_'. str_replace(' ', '-', strtolower($request->name));
        $product_image_path = 'images/productImages/'.$product_image_folder_name;
        mkdir($product_image_path, 0700, true);
      }
      $photo_name = Str::random(10);
      $num = 1;
      foreach($request->file('product_photos') as $key=>$product_photo){
        $productPhoto = new ProductPhoto;
        $product_photo_name = $photo_name.'_'.$num++;
        
        $height = Image::make($product_photo)->height();
        $width = Image::make($product_photo)->width();
        $image = Image::make($product_photo)->encode('webp', 90)->resize($width, $height)->save(public_path($product_image_path.'/'.$product_photo_name . '.webp'));
        
        $productPhoto->product_id = $product->id;
        $productPhoto->product_option_id = null;
        $productPhoto->photo = $product_photo_name.'.webp';
        $productPhoto->photo_path = $product_image_path;
        $productPhoto->save();
      }
    }
    $product->save();

    // dd($request->all());
    if($request->option_id){
      foreach($request->option_id as $id=>$option_value){
        dd($request->option_id);
        $productOption = new ProductOption();
        $productOption->product_id = $product->id;
        $productOption->option_id = $option_value;
        $productOption->price = $request->product_option_price[$id];
        $productOption->save();
        
        if($request->product_option_photos != null){
          $num = 0;
          foreach($request->product_option_photos as $key=>$value){
            if($id == $key){
              foreach($value as $keys=>$product_option_photo){
                $productOptionPhoto = new ProductPhoto;
                $productOptionPhoto->product_id = null;
                $productOptionPhoto->product_option_id = $productOption->id;
              
                // storing images in public/images/productOptionImages/
                $height = Image::make($product_option_photo)->height();
                $width = Image::make($product_option_photo)->width();
                $image = Image::make($product_option_photo)->encode('webp', 90)
                ->resize($width, $height)
                ->save(public_path('images/productImages/'.$product_image_folder_name.'/'.$photo_name.'-option_'.$num.'.webp'));
                $productOptionPhoto->photo = $photo_name.'-option_'.$num.'.webp';
                $productOptionPhoto->photo_path = 'images/productImages/'.$product_image_folder_name;
                $productOptionPhoto->save();
                $num++;
              }
            }
          }
        }
      }






    }

    $categories = Category::all();
    $options = Option::all();
    return redirect()->route('admin.products')->with('categories', $categories)->with('options', $options);
  }

}
