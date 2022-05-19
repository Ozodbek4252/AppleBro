<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Wishlist as ModelsWishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Wishlist extends Component
{
    public function test(){
        $this->render();
    }
    
    public function render()
    {
        $wishlists = ModelsWishlist::where('user_id', auth()->id())->get();
        return view('view.wishlist', ['wishlists'=>$wishlists])->layout('layouts.front');
    }
}