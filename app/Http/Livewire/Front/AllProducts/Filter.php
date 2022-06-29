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
                $options[$productOption['id']]['id'] = $productOption['id'];
                $options[$productOption['id']]['name'] = $productOption['name'];
                $options[$productOption['id']]['name'] = $productOption['name'];
                $options[$productOption['id']]['value'] = $productOption['value'];
                $options[$productOption['id']]['photo'] = $productOption['photo'];
                $options[$productOption['id']]['photo_path'] = $productOption['photo_path'];
                $options[$productOption['id']]['sort'] = $productOption['sort'];
            }
        }
        $options = collect($options)->sortBy('sort');
        $this->options = $options->groupBy('name')->toArray();

        (new LivewireProduct)->mount($this->filteredProducts);
    }

    public function parametrsClicked(){
        return $this->parametrs;
    }
    
    public function render()
    
    {
        $collection = collect($this->filteredProductsOptions)->collapse()->toArray();
        dd($this->parametrs);
        // dd(collect($collection)->diff($this->parametrs));
        // dd(collect($this->filteredProductsOptions)->collapse()->toArray());
        return view('livewire.front.all-products.filter');
    }
}
