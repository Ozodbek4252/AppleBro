<?php

namespace App\Http\Livewire;

use App\Models\Option;
use Livewire\Component;
use App\Models\Product;
use App\Models\ProductOption;

class SingleProduct extends Component
{
    public 
        $data_id, 
        $product, 
        $RAM,
        $ROM,
        $CPU,
        $color,
        $price = 0,
        $optionArr = [],
        $opt = [],
        $productOptionData = []
        ;
        

    public function mount($id){
        $this->data_id = $id;
        $this->product = Product::find($id);
        $this->price = $this->product->price;

        $product_options = ProductOption::where('product_id', $id)->get();
        foreach($product_options as $product_option){
            $option = Option::find($product_option->option_id);
            $option["price"] = $product_option->price;
            $this->optionArr[$option->name][] = $option;
        }
    }

    public function changed(){
        $this->price = $this->product->price;
        foreach($this->opt as $name=>$id){
            $this->productOptionData[$name] = ProductOption::where('option_id', $id)->where('product_id', $this->data_id)->first();
            $this->RAM = $id;
            foreach($this->productOptionData as $name=>$id){
                $this->price += $id['price'];
            }
        }
    }




    public function render()
    {
        return view('livewire.single-product')->layout('layouts.front');
    }
}
