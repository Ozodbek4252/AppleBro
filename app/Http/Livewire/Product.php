<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Option;
use App\Models\Product as ProductModel;
use App\Models\ProductOption;
use App\Models\ProductPhoto;

class Product extends Component
{
    public 
    $name, 
    $modelId,
    $deleteProduct,
    $category_id;

    public function delete($id){
        $this->deleteProduct = ProductModel::find($id);
        $this->deleteProduct->delete();
        unlink($this->deleteProduct->main_photo_path.'/'.$this->deleteProduct->main_photo);

        $allProductPhotos = ProductPhoto::where('product_id', $id)->get();
        foreach($allProductPhotos as $allProductPhoto){
            unlink($allProductPhoto->photo_path.'/'.$allProductPhoto->photo);
            $allProductPhoto->delete();
        }

        $deleteProductOptions = ProductOption::where('product_id', $id)->get();
        foreach($deleteProductOptions as $deleteProductOption){
            $productPhotos = ProductPhoto::where('product_option_id', $deleteProductOption->id)->get();
            foreach($productPhotos as $productPhoto){
                unlink($productPhoto->photo_path.'/'.$productPhoto->photo);
                $productPhoto->delete();
            }

            $deleteProductOption->delete();
        }
    }

    public function routeToEdit($id){
        return view('products.edit', [
            'product' => ProductModel::find($id)
        ]);
    }

    public function selectCategory($id){
        $this->category_id = $id;
    }

    public function render(){
        $products = ProductModel::all();
        $categories = Category::where('category_id', '!=', null)->get();
        $options = Option::all();
        return view('products.index', [
            'categories' => $categories,
            'options' => $options,
            'products' => $products,
        ]);
    }
}
