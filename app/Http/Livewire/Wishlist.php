<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Wishlist as ModelsWishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Wishlist extends Component
{
    // public function addToWishlist($id){
    //     if(Auth::check()){
    //         if(Product::find($id)){
    //             if(ModelsWishlist::where('product_id', $id)->where('user_id', Auth::user()->id)->first()){
    //                 $wishlist = ModelsWishlist::where('product_id', $id)->where('user_id', Auth::user()->id)->first();
    //                 $wishlist->delete();
    //                 $this->added = false;
    //                 return response()->json(['success'=>'Product Removed from Wishlist']);
    //             }
    //             $wishlist = new ModelsWishlist;
    //             $wishlist->user_id = Auth::id();
    //             $wishlist->product_id = $id;
    //             $wishlist->save();
    //         }
    //     }
    // }
    
    public function render(){
        
        // dd('wishlist');
        $wishlists = ModelsWishlist::where('user_id', auth()->id());
        return view('view.wishlist', [
            'wishlists'=>$wishlists,
            ])->layout('layouts.front');
    }
}