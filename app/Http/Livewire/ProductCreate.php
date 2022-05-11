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
    $xususiyat_photo
    ;

  public 
    $i = 1,
    $inputs = [],
    $option_id = [],
    $product_option_price = [],
    $product_option_photos = [];

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

  protected $rules = [
    'xususiyat_name' => 'required|max:20',
    'xususiyat_value' => 'required',
  ];

  public function resetVal(){
    $this->xususiyat_name = null;
    $this->xususiyat_value = null;
    // $this->xususiyat_photo = null;
  }

  public function addXususiyat(){
    $this->validate();
    $option = new Option;
    $option->name = $this->xususiyat_name;
    $option->value = $this->xususiyat_value;
    $option->save();
    $this->resetVal();

    if($this->xususiyat_photo != null){
      dd($this->xususiyat_photo);
    }
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
