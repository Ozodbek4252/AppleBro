<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

class BuyBasket extends Component
{
    public $total_price, $quantity;

    public function mount(){
        $this->total_price = 0;
        $this->quantity = [];
        $products = session()->get('cart');
        foreach($products as $id=>$product){
            $this->quantity[$id] = 1;
        }
    }

    public function subtract($id){
        if($this->quantity[$id] > 1) {
            $this->quantity[$id] -= 1;
        }
    }

    public function add($id){
        if($this->quantity[$id]){
            $this->quantity[$id] += 1;
        }
    }
    
    public function remove($id){
        dd($id." remove");
    }

    public function render(){
        $products = session()->get('cart');
        return view('livewire.buy-basket', [
            'products' => $products
        ]);
    }
}
