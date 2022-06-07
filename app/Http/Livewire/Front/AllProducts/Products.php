<?php

namespace App\Http\Livewire\Front\AllProducts;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Products extends Component
{
  public $products, $category_id;
  public function mount($category_id){
    if($category_id){
      $this->category_id = $category_id;
      $sub_category = \App\Models\Category::where('category_id', $category_id)->get();
      foreach($sub_category as $sub){
          $this->products[] = \App\Models\Product::where('category_id', $sub->id)->get();
      }
      }else{
        $this->products = \App\Models\Product::all();
      }
    }

    public function render()
    {
        return view('livewire.front.all-products.products');
    }
}
