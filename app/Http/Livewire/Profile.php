<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('view.profile')->layout('layouts.front');
    }
}
