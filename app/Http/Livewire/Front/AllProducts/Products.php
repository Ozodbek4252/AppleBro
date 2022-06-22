<?php

namespace App\Http\Livewire\Front\AllProducts;

use Livewire\Component;
use App\Models\Category;

class Products extends Component
{
  public $filteredProducts, $category_id;

  protected $listeners = ['mount'];

  public function mount($filteredProduct){
    $this->filteredProducts = $filteredProduct; 
  }


  public function render(){    
    return view('livewire.front.all-products.products');
  }
}
