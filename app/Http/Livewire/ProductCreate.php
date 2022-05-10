<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Category;
use App\Models\Option;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProductCreate extends Component
{
  use WithFileUploads;

  public 
    $xususiyat_name,
    $xususiyat_value,
    $xususiyat_photo,
    $optionImage
    ;

  public 
  $i = 1,
  $inputs = [],
  $option_id = [],
  $product_option_price = [],
  $product_option_photos = []
  ;

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


  public function render(){
    $categories = Category::all();
    $options = Option::all();
    return view('products.create', [
      'categories' => $categories,
      'options' => $options,
    ]);
  }
}
