<?php

namespace App\Http\Livewire;

use App\Models\Option;
use Livewire\Component;
use App\Models\Product;
use App\Models\ProductOption;
use App\Models\ProductPhoto;

class SingleProduct extends Component
{
    public 
        $lang,
        $data_id, 
        $product, 
        $RAM,
        $ROM,
        $CPU,
        $color,
        $price = 0,
        $optionArr = [],
        $opt = [],
        $productOptionData,
        $selectedOption = [],
        $initialAddedPrice = 0,
        $change_color,
        $change_color_images = []
        ;
        

    public function mount($id){
        $this->data_id = $id;
        $this->product = Product::find($id);
        $this->price = $this->product->price;

        $product_options = ProductOption::where('product_id', $id)->get();
        if(count($product_options)>0){
            foreach($product_options as $product_option){
                $option = Option::find($product_option->option_id);
                $option["price"] = $product_option->price;
                $this->optionArr[$option->name][] = $option;
            }
            
            $this->price = $this->product->price;
            foreach($this->optionArr as $key=>$value){
                $this->selectedOption[$key] = $this->optionArr[$key][0]['id'];
                $this->initialAddedPrice += $this->optionArr[$key][0]['price'];
                $this->$key = $this->optionArr[$key][0]['value'];
            }

            $this->price += $this->initialAddedPrice; 
        }
    }

    public function changed($key, $value){
        if($key == 'Color'){
            $this->change_color_images = [];
            $this->change_color = $value;
            $this->change_color_images = ProductPhoto::where('product_option_id', ProductOption::where('option_id', $value)->where('product_id', $this->data_id)->first()->id)->get();
        };

        $this->productOptionData = ProductOption::where('option_id', $value)->where('product_id', $this->data_id)->first();
        if(!in_array($value, $this->selectedOption)){
            $minus = ProductOption::where('option_id', $this->selectedOption[$key])->where('product_id', $this->data_id)->first();
            unset($this->selectedOption[$key]);
            $this->selectedOption[$key] = $value;
            $this->price += $this->productOptionData->price;
            $this->price -= $minus->price;

            // $this->RAM = $minus;
            // $this->ROM = $value;
            // $this->CPU = $value;
            // $this->color = $value;
        };
    }

    public function addToCart(){
        $cart = session()->get('cart');
        if(!$cart){
            $cart = [
                $this->data_id => [
                    "name" => $this->product->name,
                    "price" => $this->price,
                    "photo" => $this->product->main_photo,
                    "photo_path" => $this->product->main_photo_path,
                    'options' => $this->selectedOption,
                    'quantity' => 1
                    ]
                ];
                session()->put('cart', $cart);
            }else{
                if(isset($cart[$this->data_id])){
                unset($cart[$this->data_id]);
                $cart[$this->data_id] = [
                    "name" => $this->product->name,
                    "price" => $this->price,
                    "photo" => $this->product->main_photo,
                    "photo_path" => $this->product->main_photo_path,
                    'options' => $this->selectedOption,
                    'quantity' => 1
                ];
            }else{
                $cart[$this->data_id] = [
                    "name" => $this->product->name,
                    "price" => $this->price,
                    "photo" => $this->product->main_photo,
                    "photo_path" => $this->product->main_photo_path,
                    'options' => $this->selectedOption,
                    'quantity' => 1
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
        $this->lang = session()->get('locale');
        return view('livewire.single-product')->layout('layouts.front');
    }
}
