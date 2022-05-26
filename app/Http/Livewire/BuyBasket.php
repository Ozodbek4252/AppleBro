<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

class BuyBasket extends Component
{
    public $total_price, $quantity, $products;

    public function mount(){
        $this->total_price = 0;
        $this->quantity = [];
        $products = session()->get('cart');
        $cart = session()->get('cart');
        foreach($products as $id=>$product){
            $this->quantity[$id] = $cart[$id]['quantity'];
        }
    }

    public function subtract($id){
        if($this->quantity[$id] > 1) {
            $this->quantity[$id] -= 1;
            $cart = session()->get('cart');
            $cart[$id]['quantity'] -= 1;
            session()->put('cart', $cart);
        }
    }

    public function add($id){
        if($this->quantity[$id]){
            $this->quantity[$id] += 1;
            $cart = session()->get('cart');
            $cart[$id]['quantity'] += 1;
            session()->put('cart', $cart);
        }
    }
    
    public function remove($id){
        $cart = session()->get('cart');
        if(isset($cart[$id])){
            session()->forget('cart.'.$id);
        }
    }

    
    protected $listeners = ['refreshLivewire'];

    public function refreshLivewire($product_id = null) 
    {
        $this->render();
    }

    public function render(){
        $this->products = session()->get('cart');
        return view('livewire.buy-basket');
    }
}
