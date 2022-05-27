<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BasketTotal extends Component
{
    public $total_price, $quantity, $products;

    protected $listeners = ['basketPrice' => 'render'];

    public function render(){
        $this->products = session()->get('cart');
        return view('livewire.basket-total');
    }
}
