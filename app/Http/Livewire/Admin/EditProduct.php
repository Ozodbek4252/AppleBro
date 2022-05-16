<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use \App\Models\Category;
use App\Models\Option;
use App\Models\ProductOption;
use Illuminate\Support\Facades\File;

class EditProduct extends Component
{
  public 
      $product,
      $selectedCategory,
      $productName,
      $productPrice;

  public 
      $xususiyat_name,
      $xususiyat_value,
      $xususiyat_photo,
      $xususiyatSelected = 'Select',
      $i = 1,
      $inputs = [],
      $option_id = [],
      $product_option_price = [],
      $product_option_photos = [];
  
  public function mount($id){
    $this->product = Product::find($id);
    $this->productName = $this->product->name;
    $this->productPrice = $this->product->price;
    $this->selectedCategory = $this->product->category_id;
  }

  public function add($i){
    $this->i = $i + 1;
    $this->inputs[(int)$this->i] = $this->i;
    dd($this->inputs);
  }
  
  public function remove($i){
    unset($this->inputs[$i]);
    unset($this->option_id[$i]);
    unset($this->product_option_price[$i]);
    unset($this->product_option_photos[$i]);
  }


  public function render()
  {
    $categories = Category::all();
    $options = Option::all();
    $xususiyatlar = Option::all();

    $productOptions = ProductOption::where('product_id', $this->product->id)->get();
    
    return view('livewire.admin.edit-product', [
      'categories' => $categories,
      'options' => $options,
      'xususiyatlar' => $xususiyatlar,

      'productOptions' => $productOptions,
    ]);
  }

  // public function deleteProductMainPhoto($product){
  //   $image = $product['main_photo_path'] .'/'. $product['main_photo'];
  //   if(File::exists(public_path($image))){
  //     File::delete(public_path($image));
  //     $product->main_photo_path = null;
  //     $product->main_photo = null;
  //   }
  // }

}
