<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use \App\Models\Category;
use App\Models\Option;
use App\Models\ProductOption;
use App\Models\ProductPhoto;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
class EditProduct extends Component
{
  use WithFileUploads;
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
      $keys = 1,
      $inputs = [],
      $old_inputs = [],
      $option_id = [],
      $selectedProductOption = [],
      $product_option_price = [],
      $product_option_photos = [],
      $product_option_photos_path = [];
  
  public function mount($id){
    $this->product = Product::find($id);
    $this->productName = $this->product->name;
    $this->productPrice = $this->product->price;
    $this->selectedCategory = $this->product->category_id;

    $selectedOptions = ProductOption::where('product_id', $id)->get()->toArray();
      for ($m = 0; $m < count($selectedOptions); $m++){
          $this->i = $m;
          array_push($this->old_inputs, $m);
          $this->option_id[$m] = $selectedOptions[$m]['option_id'];
          $this->selectedProductOption[$m] = $selectedOptions[$m]['id'];
          $this->product_option_price[$m] = $selectedOptions[$m]['price'];
          $this->product_option_photos[$m] = count(ProductPhoto::where('product_option_id', $selectedOptions[$m]['id'])->get()) ? ProductPhoto::where('product_option_id', $selectedOptions[$m]['id'])->get()->toArray()[0]['photo'] : 0;
          $this->product_option_photos_path[$m] = count(ProductPhoto::where('product_option_id', $selectedOptions[$m]['id'])->get()) ? ProductPhoto::where('product_option_id', $selectedOptions[$m]['id'])->get()->toArray()[0]['photo_path'] : 0;
      }
  }

  public function add($i){
    $this->i = $i + 1;
    $this->inputs[(int)$this->i] = $this->i;
  }
  
  public function remove($i){
    unset($this->inputs[$i]);
    unset($this->option_id[$i]);
    unset($this->selectedProductOption[$i]);
    unset($this->product_option_price[$i]);
    unset($this->product_option_photos[$i]);
  }

  public function removeOption($id, $i){
    $option = ProductOption::find($id);
    $option->delete();
    $this->mount($option->product_id);
    session()->flash('option','Option deleted successfully.');
  }

  public function deleteImage($id){
    ProductPhoto::find($id)->delete();
    session()->flash('image','Image deleted successfully.');
  }

  public function deleteOptionImage($id){
    ProductPhoto::find($id)->delete();
    session()->flash('optionImage','Image deleted successfully.');
  }

  public function render(){
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
