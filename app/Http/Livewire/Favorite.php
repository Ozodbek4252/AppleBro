<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Favorite extends Component
{
    public function render()
    {
        return view('view.favorite')->layout('layouts.front');
    }
}
