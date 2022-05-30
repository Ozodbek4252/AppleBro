<?php

namespace App\Http\Livewire;

use App\Models\Category;
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

    public function addToWishlist($id){
        if(Auth::check()){
            if(Product::find($id)){
                if(Wishlist::where('product_id', $id)->where('user_id', Auth::user()->id)->first()){
                    $wishlist = Wishlist::where('product_id', $id)->where('user_id', Auth::user()->id)->first();
                    $wishlist->delete();
                    $this->added = false;
                    return response()->json(['success'=>'Product Removed from Wishlist']);
                }
                $wishlist = new Wishlist;
                $wishlist->user_id = Auth::id();
                $wishlist->product_id = $id;
                $wishlist->save();
            }
            $this->emit('refreshWishlist');
        }else{
            return redirect()->route('login');
        }
    }
    
    protected $listeners = ['refreshLivewire'];

    public function refreshLivewire($product_id = null) 
    {
        $this->render();
    }
    public function render(){
        if (session()->get('locale') == '') {
            session()->put('locale', 'ru');
            app()->setLocale('ru');
        } else {
            app()->setLocale(session()->get('locale'));
        }
        $lang = session()->get('locale');
        $newest_products = \App\Models\Product::orderBy('updated_at', 'desc')->take(4)->get();
        $categories = \App\Models\Category::all();
        
        $newest_products = Product::orderBy('updated_at', 'desc')->take(4)->get();
        $categories = Category::all();
        return view('livewire.add-to-wishlist', [
            'lang'=> $lang,
            'categories' => $categories,
            'newest_products' => $newest_products,
        ])->layout('layouts.front');
    }
}
