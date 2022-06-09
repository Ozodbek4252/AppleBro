<?php

namespace App\Http\Livewire\Front\AllProducts;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Filter extends Component
{
    public $category_id, $categories, $filteredProducts = [], $priceStartInput, $priceEndInput, $minPrice, $maxPrice, $RAM = [],
        $ROM, $productType, $color, $CPU;


    public function mount($category_id){
        $RAM = collect();
        $this->category_id = $category_id;
        $this->categories = Category::where('category_id', $this->category_id)->get(['id']);
        foreach($this->categories as $category){
            foreach($category->products as $product){
                $this->filteredProducts[] = $product;
            }
        }
        $this->maxPrice = collect($this->filteredProducts)->max('price');
        $this->minPrice = collect($this->filteredProducts)->min('price');
    }
    
    public function changed(){
        $this->filteredProducts = [];
        foreach($this->categories as $category){
            foreach($category->products->where('price', '>=', $this->minPrice)->where('price', '<=', $this->maxPrice) as $product){
                $this->filteredProducts[] = $product;
            }
        }
        $this->emit('changed', $this->filteredProducts);
    }

    public function render()
    {
        return view('livewire.front.all-products.filter');
    }

    public function ram($ram){
        // $this->RAM =  [$ram];
    }
}
