<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartModal extends Component
{
    public function render()
    {
        dd('asd');
        $products = session()->get('cart');
        return view('livewire.cart-modal');
    }
}
