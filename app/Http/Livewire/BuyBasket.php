<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BuyBasket extends Component
{
    public function render(){
        $products = session()->get('cart');
        return view('livewire.buy-basket', [
            'products' => $products
        ]);
    }
}
