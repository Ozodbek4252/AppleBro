<?php

namespace App\Http\Livewire\Front\AllProducts;

use Livewire\Component;
use App\Models\Category;

class Products extends Component
{
  public $filteredProducts = [], $category_id;

  protected $listeners = ['changed'];

  public function mount($category_id){
    $this->category_id = $category_id;
    $this->categories = Category::where('category_id', $this->category_id)->get(['id']);
    $this->filteredProducts = [];
    foreach($this->categories as $category){
      foreach($category->products as $product){
        $this->filteredProducts[] = $product;
      }
    }
  }

  public function changed($filteredProducts){
    $this->filteredProducts = [];
    $this->filteredProducts = $filteredProducts; 
  }

  public function render(){
    return view('livewire.front.all-products.products');
  }
}
