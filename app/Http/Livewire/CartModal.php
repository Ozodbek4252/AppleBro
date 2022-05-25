<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartModal extends Component
{
    public $products, $total_price, $option_total_price = 0;

    protected $listeners = ['refreshLivewire'];

    public function refreshLivewire($product_id = null){
        $this->render();
    }
    public function delete($id){
        $cart = session()->get('cart');
        if(isset($cart[$id])){
            session()->forget('cart.'.$id);
        }
    }
    public function render(){
    
      $this->total_price = 0;
      $this->products = session()->get('cart');
      if(!empty($this->products)){
          foreach($this->products as $id=>$product){
              $this->total_price += $product['price'];
          }
      }
      
      return view('livewire.cart-modal', [
          'products' => $this->products
      ]);
    }
}
