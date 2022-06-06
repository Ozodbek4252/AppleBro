<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class WishlistCounter extends Component
{
    public $count = null;
    protected $listeners = ['refreshWishlist' => '$refresh'];

    public function render(): View
    {
        $this->count = \App\Models\Wishlist::where('user_id', Auth::id())->get()->count();
        return view('livewire.wishlist-counter');
    }
}
