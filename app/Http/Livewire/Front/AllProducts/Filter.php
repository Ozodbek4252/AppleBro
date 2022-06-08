<?php

namespace App\Http\Livewire\Front\AllProducts;

use App\Models\Category;
use Livewire\Component;

class Filter extends Component
{
    public $category_id, $categories, $filteredProducts = [], $priceStartInput, $priceEndInput, $minPrice, $maxPrice, $RAM,
        $ROM, $productType, $color, $CPU;

    public function mount($category_id){
        $this->category_id = $category_id;
        $this->categories = Category::where('category_id', $this->category_id)->get(['id']);
        foreach($this->categories as $category){
            foreach($category->products as $product){
                $this->filteredProducts[] = $product;
            }
        }
        
    }

    public function render()
    {
        $this->maxPrice = collect($this->filteredProducts)->max('price');
        $this->minPrice = collect($this->filteredProducts)->min('price');
        
        return view('livewire.front.all-products.filter');
    }
}
