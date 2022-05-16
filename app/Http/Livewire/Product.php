<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Option;
use App\Models\Product as ProductModel;

class Product extends Component
{

    public 
    $modalFormVisible = false, 
    $modalConfirmDeleteVisible = false, 
    $name, 
    $modelId;


    public function delete(){
        ProductModel::find($this->modelId)->delete();
        $this->modalConfirmDeleteVisible = false;
    }

    public function deleteShowModal($id){
        $this->modelId = $id;
        $this->modalConfirmDeleteVisible = true;
    }








    public $category_id;

    public function selectCategory($id){
        $this->category_id = $id;
    }

    public function render()
    {
        $products = ProductModel::all();
        $categories = Category::all();
        $options = Option::all();
        return view('products.index', [
            'categories' => $categories,
            'options' => $options,
            'products' => $products,
        ]);
    }
}
