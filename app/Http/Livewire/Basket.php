<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Basket extends Component
{
    public function render()
    {
        return view('view.cart')->layout('layouts.front');
    }
}
