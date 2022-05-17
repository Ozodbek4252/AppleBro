<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductOption;

class AllProducts extends Component
{
    public 
    $products,
    $priceStart,
    $priceEnd,
    $ram,
    $rom,
    $color,
    $cpu
    
    ;


    public function mount(){
        $this->products = Product::all();

        
    }

    public function render()
    {


        return view('view.products', [
            'products' => $this->products,
            'priceStart' => $this->priceStart,
            'priceEnd' => $this->priceEnd,
            'ram' => $this->ram,
            'rom' => $this->rom,
            'color' => $this->color,
            'cpu' => $this->cpu,
        ])->layout('layouts.front');
    }
}
