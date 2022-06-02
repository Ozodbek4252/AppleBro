<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Option;
use App\Models\Product;
use App\Models\ProductOption;
use App\Models\ProductPhoto;
use Livewire\Component;

class SingleProduct extends Component
{
    public 
        $product,
        $product_photos = null,
        $category = null,
        $product_options = null,
        // $options = null,
        $optionArr = [];

    public function mount($id){
        $this->product = Product::find($id);
    }

    public function render(){
        $product_options = ProductOption::where('product_id', $this->product->id)->get();

        
        foreach($product_options as $product_option){
            $option = Option::find($product_option->option_id);
            $option["price"] = $product_option->price;
            $this->optionArr[$option->name][] = $option;
        }

        if(ProductPhoto::where('product_id', $this->product->id)->count() > 0){
            $this->product_photos = ProductPhoto::where('product_id', $this->product->id)->get();
        }
        if(ProductOption::where('product_id', $this->product->id)->count() > 0){
            $this->product_options = ProductOption::where('product_id', $this->product->id)->get();
        }
        $this->category = Category::find($this->product->category_id);


        return view('products.single-product');
    }
}
