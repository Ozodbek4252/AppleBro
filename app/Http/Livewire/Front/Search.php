<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Product;

class Search extends Component
{
    public $search_results, $input;

    public function render(){
        $this->search_results = [];
        if($this->input){
            $this->search_results = Product::where('name', 'like', '%'.$this->input.'%')->get();
        }

        return view('livewire.front.search');
    }
}
