<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Category;
use App\Models\Option;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ProductCreate extends Component
{
  use WithFileUploads;

  public 
    $xususiyat_name,
    $xususiyat_value,
    $xususiyat_photo,
    $xususiyatSelected = 'Select',
    $i = 1,
    $inputs = [],
    $option_id = [],
    $product_option_price = [],
    $product_option_photos = [],
    $option_btn = 'Add';
    
  protected $rules = [
    'xususiyat_name' => 'required|max:20',
    'xususiyat_value' => 'required',
  ];
  public function add($i){
    $this->i = $i + 1;
    $this->inputs[(int)$this->i] = $this->i;
  }

  public function remove($i){
    unset($this->inputs[$i]);
    unset($this->option_id[$i]);
    unset($this->product_option_price[$i]);
    unset($this->product_option_photos[$i]);
  }
  
  public function resetVal(){
    $this->xususiyat_name = null;
    $this->xususiyat_value = null;
    $this->xususiyat_photo = null;
    $this->xususiyatSelected = 'Select';
    $this->option_btn = 'Add';
    $this->xususiyat_photo = null;
  }
  
  public function changeOption(){
    if($this->xususiyatSelected != 'Select'){
      $this->option_btn = 'Update';
      $this->xususiyat_photo = null;
      $option = Option::find($this->xususiyatSelected);
      $this->xususiyat_name = $option->name;
      $this->xususiyat_value = $option->value;
    }else{
      $this->resetVal();
    }
  }

  public function deleteOption(){
    $option = Option::find($this->xususiyatSelected);
    
    $option->delete();
    $this->resetVal();
  }

  public function addXususiyat(){
    $this->validate();
    if($this->xususiyatSelected != 'Select'){
      $option = Option::find($this->xususiyatSelected);
      $option->name = ucwords($this->xususiyat_name);
      $option->value = $this->xususiyat_value;
    }else{
      $option = new Option;
      $option->name = ucwords($this->xususiyat_name);
      $option->value = $this->xususiyat_value;
    }

    if($this->xususiyat_photo != null){
      $product_image_folder_name = date('Y-m-d').'_'. str_replace(' ', '-', strtolower($this->xususiyat_value));
      $product_image_path = 'images/optionColors/'.$product_image_folder_name;
      $photo_name = $this->xususiyat_value.'_'.Str::random(10);
      $this->validate([
        'xususiyat_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      if (!file_exists($product_image_path)) {
        mkdir($product_image_path, 0700, true);
      }

      $image = Image::make($this->xususiyat_photo)->encode('webp', 90)
                  ->resize(200, 200)
                  ->save(public_path($product_image_path.'/'.$photo_name.'.webp'));
      $option->photo_path = $product_image_path;
      $option->photo = $photo_name . '.webp';
    }

    $option->save();
    $this->resetVal();
  }

  public function render(){
    $xususiyatlar = Option::all();
    $categories = Category::all();
    $options = Option::all();
    return view('products.create', [
      'categories' => $categories,
      'options' => $options,
      'xususiyatlar' => $xususiyatlar,
    ]);
  }
}
