<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class AddToCart extends Component
{
    public $product, $product_id;

    public function mount($id){
        $this->product_id = $id;
        $this->product = Product::find($id);
    }

    public function addToCart($id){
        $product = \App\Models\Product::find($id);
        $cart = session()->get('cart');
        if(!$cart){
            $cart = [
                $id => [
                    "name" => $product->name,
                    "price" => $product->price,
                    "photo" => $product->main_photo,
                    "photo_path" => $product->main_photo_path,
                ]
            ];
            session()->put('cart', $cart);
        }else{
            if(isset($cart[$id])){
                unset($cart[$id]);
            }else{
                $cart[$id] = [
                    "name" => $product->name,
                    "price" => $product->price,
                    "photo" => $product->main_photo,
                    "photo_path" => $product->main_photo_path,
                ];
            }
            session()->put('cart', $cart);
        }
    }

    public function render(){
        return view('livewire.add-to-cart');
    }
}
