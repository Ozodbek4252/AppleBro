<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Wishlist as ModelsWishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Wishlist extends Component
{
    protected $listeners = ['refreshWishlist' => 'render'];

    public function render(){
        
        $wishlists = ModelsWishlist::where('user_id', auth()->id());
        $recommended_products = Product::orderBy('updated_at', 'desc')->take(4)->get();
        return view('view.wishlist', [
            'wishlists'=>$wishlists,
            'recommended_products'=>$recommended_products,
            ])->layout('layouts.front');
    }
}