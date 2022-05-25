<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class AddToCart extends Component
{
    public $product, $product_id, $price = 0;

    public function mount($id){
        $this->product_id = $id;
        $this->product = Product::find($id);
    }

    public function addToCart($id){
        $this->price = 0;
        $product = \App\Models\Product::find($id);
        $cart = session()->get('cart');
        $product_options = \App\Models\ProductOption::where('product_id', $id)->get();
		foreach($product_options as $product_option){
			$option = \App\Models\Option::find($product_option->option_id);
			$option["price"] = $product_option->price;
			$optionArr[$option->name][] = $option;
		}
        foreach($optionArr as $name=>$value){
            $this->price += (int)$optionArr[$name][0]['price'];
        }

        if(!$cart){
            $cart = [
                $id => [
                    "name" => $product->name,
                    "price" =>  $product->price + $this->price,
                    "photo" => $product->main_photo,
                    "photo_path" => $product->main_photo_path,
                    'options' => $optionArr
                    ]
                ];
                session()->put('cart', $cart);
            }else{
                if(isset($cart[$id])){
                unset($cart[$id]);
            }else{
                $cart[$id] = [
                    "name" => $product->name,
                    "price" => $product->price + $this->price,
                    "photo" => $product->main_photo,
                    "photo_path" => $product->main_photo_path,
                    'options' => $optionArr
                ];
            }
            session()->put('cart', $cart);
        }
    }

    protected $listeners = ['refreshLivewire'];

    public function refreshLivewire($product_id = null){
        $this->render();
    }
    
    public function render(){
        return view('livewire.add-to-cart');
    }
}
