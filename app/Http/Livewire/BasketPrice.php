<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BasketPrice extends Component
{
    public $total_price, $quantity, $products;

    protected $listeners = ['basketPrice' => 'render'];

    public function mount(){
        $this->total_price = 0;
        $this->quantity = [];
        $products = session()->get('cart');
        $cart = session()->get('cart');
        foreach($products as $id=>$product){
            $this->quantity[$id] = $cart[$id]['quantity'];
            $this->total_price += $product['price'] * $this->quantity[$id];
        }
    }

    public function render(){
        $this->products = session()->get('cart');
        $this->total_price = 0;
        foreach($this->products as $id=>$product){
            $this->total_price += $product['price'] * $product['quantity'];
        }
        return view('livewire.basket-price');
    }
}
