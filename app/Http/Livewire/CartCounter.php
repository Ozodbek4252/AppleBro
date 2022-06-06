<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartCounter extends Component
{
    public $count = 0;
    protected $listeners = ['refreshCart' => 'render'];
    public function render()
    {
        $this->count = session()->get('cart') ? count(session()->get('cart')) : 0;
        return view('livewire.cart-counter');
    }
}
