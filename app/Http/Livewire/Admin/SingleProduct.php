<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductPhoto;
use Livewire\Component;

class SingleProduct extends Component
{
    public 
        $product,
        $product_photos = null,
        $category = null;

    public function mount($id){
        $this->product = Product::find($id);
    }

    public function render(){
        if(ProductPhoto::where('product_id', $this->product->id)->count() > 0){
            $this->product_photos = ProductPhoto::where('product_id', $this->product->id)->get();
        }
        $this->category = Category::find($this->product->category_id);

        return view('products.single-product');
    }
}
