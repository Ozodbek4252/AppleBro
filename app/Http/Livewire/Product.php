<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Option;
use App\Models\Product as ProductModel;

class Product extends Component
{
    public $category_id;

    public function selectCategory($id){
        $this->category_id = $id;
    }

    public function render()
    {
        $products = ProductModel::all();
        $categories = Category::all();
        $options = Option::all();
        return view('products.index', [
            'categories' => $categories,
            'options' => $options,
            'products' => $products,
        ]);
    }
}
