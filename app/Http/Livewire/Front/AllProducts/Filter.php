<?php

namespace App\Http\Livewire\Front\AllProducts;

use App\Http\Livewire\Front\AllProducts\Products as LivewireProduct;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Filter extends Component
{
    public $category_id, $categories, $filteredProducts = [], $filteredProductsOptions = [], $priceStartInput, $priceEndInput, $minPrice, $maxPrice, $RAM = [],
        $ROM = [], $productType, $Color = [], $CPU=[], $options = [], $parametrs = [];

    public function __construct(){
        
    }

    public function mount($category_id){
        
        $categories = Category::where('id', $category_id)->with('products')->get();

        $categories->each(function($category){
            $category->products->each(function($product){
                $this->filteredProducts[] = $product;
                $this->filteredProductsOptions[] = $product->product_options;
            });
            $category->categories->each(function($subCategory){
                $subCategory->products->each(function($product){
                    $this->filteredProducts[] = $product;
                    $this->filteredProductsOptions[] = $product->product_options;
                });
            });
        });

        $options = [];
        
        foreach(collect($this->filteredProductsOptions)->toArray() as $productOptions){
            foreach($productOptions as $key => $productOption){
                $options[$productOption['id']]['name'] = $productOption['name'];
                $options[$productOption['id']]['value'] = $productOption['value'];
                $options[$productOption['id']]['photo'] = $productOption['photo'];
                $options[$productOption['id']]['photo_path'] = $productOption['photo_path'];
                $options[$productOption['id']]['sort'] = $productOption['sort'];
            }
        }
        $options = collect($options)->sortBy('sort');
        $this->options = $options->groupBy('name')->toArray();
        foreach($this->options as $k => $p){
            $this->parametrs[$k] = [];
        }

        (new LivewireProduct)->mount($this->filteredProducts);
        
        // $this->maxPrice = collect($this->filteredProducts)->max('price');
        // $this->minPrice = collect($this->filteredProducts)->min('price');
    }
    // public function changed(){
    //     $this->filteredProducts = [];
    //     foreach($this->categories as $category){
    //         foreach($category->products->where('price', '>=', $this->minPrice)->where('price', '<=', $this->maxPrice) as $product){
    //             $this->filteredProducts[] = $product;
    //         }
    //     }
    //     $this->emit('changed', $this->filteredProducts);
    // }
    
    // public function filter(){
    //     $this->emit('changed', $this->filteredProducts);
    // }

    public function parametr($key, $value){
        $this->parametrs[$key][] = $value;
        dd($this->parametrs);
    }
    public function render()
    {
        return view('livewire.front.all-products.filter');
    }
}
