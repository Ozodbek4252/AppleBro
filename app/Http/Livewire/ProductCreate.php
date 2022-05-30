<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Category;
use App\Models\Option;

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
    $product_option_photos = [];
    
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
  }
  
  public function changeOption(){
    if($this->xususiyatSelected != 'Select'){
      $this->xususiyat_name = Option::find($this->xususiyatSelected)->name;
      $this->xususiyat_value = Option::find($this->xususiyatSelected)->value;
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
      $option->name = $this->xususiyat_name;
      $option->value = $this->xususiyat_value;
    }else{
      $option = new Option;
      $option->name = $this->xususiyat_name;
      $option->value = $this->xususiyat_value;
    }
    
    if($this->xususiyat_photo != null){
      $this->validate([
        'xususiyat_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      
      $option->photo = $this->xususiyat_photo->store('OptionImages', 'public');
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
