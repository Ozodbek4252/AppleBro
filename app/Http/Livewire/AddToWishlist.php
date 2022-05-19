<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class AddToWishlist extends Component
{
    public $product, $product_id;

    public function mount($id){
        $this->product_id = $id;
        $this->product = Product::find($id);
    }

    public function add($id){
        if(Auth::check()){
            $product_id = $id;
            if(Product::find($product_id)){
                if(Wishlist::where('product_id', $product_id)->where('user_id', Auth::user()->id)->first()){
                    $wishlist = Wishlist::where('product_id', $product_id)->where('user_id', Auth::user()->id)->first();
                    $wishlist->delete();
                    return response()->json(['success'=>'Product Removed from Wishlist']);
                }
                $wishlist = new \App\Models\Wishlist;
                $wishlist->user_id = Auth::id();
                $wishlist->product_id = $product_id;
                $wishlist->save();
                return response()->json(['success'=>'Product Added to Wishlist']);
            }else{
                return response()->json(['success'=>'Product not found']);
            }
        }else{
            return response()->json(['status'=>'Login to Continue']);
        }
        return view('view.wishlist');
    }
    
    public function render(){
        return view('livewire.add-to-wishlist');
    }
}
