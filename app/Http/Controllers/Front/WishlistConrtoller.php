<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistConrtoller extends Controller
{
    // public function index()
    // {
    //     return view('view.wishlist');
    // }

    public function add(Request $request){
        if(Auth::check()){
            $product_id = $request->input('product_id');
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
    
    public function show($id){
        $product = \App\Models\Product::find($id);
        if(!$product) {abort(404);}
        $cart = session()->get('favourites');
        if(!$cart) { $cart = [ $id => [
            "id"=>$id,
        ] ]; }
        else{ $cart[$id] = [
            "id"=>$id,
        ]; }
        session()->put('favourites', $cart);
    }

    public function edit($id){
        $cart = session()->get('favourites');
        unset($cart[$id]);
        session()->put('favourites', $cart);
    }
}
