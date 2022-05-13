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
        $price,
        $optionArr = [],
        $opt = []
        ;
        

    protected $listeners = [
        'changed'
    ];

    public function mount($id){
        $this->data_id = $id;
        $this->product = Product::find($id);



        $product_options = ProductOption::where('product_id', $id)->get();
    
        foreach($product_options as $product_option){
            $option = Option::find($product_option->option_id);
            $option["price"] = $product_option->price;
            $this->optionArr[$option->name][] = $option;
        }
        // dd($this->optionArr);
        // return $this->optionArr;
    }

    public function changed(){
        dd($this->opt);
    }




    public function render()
    {
        // dd('render');
        return view('view.single-product')->layout('layouts.front');
    }
}
