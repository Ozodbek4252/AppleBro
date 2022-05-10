<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Option;

class Product extends Component
{
    public function render()
    {   
        $categories = Category::all();
        $options = Option::all();
        return view('products.index', [
            'categories' => $categories,
            'options' => $options,
        ]);
    }
}
