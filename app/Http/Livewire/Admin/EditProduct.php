<?php
namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use \App\Models\Category;
use App\Models\Option;
use App\Models\ProductOption;
use App\Models\ProductPhoto;
use Livewire\WithFileUploads;
class EditProduct extends Component
{
  use WithFileUploads;
  public 
      $product,
      $selectedCategory,
      $productName,
      $productPrice,
      $xususiyat_name,
      $xususiyat_value,
      $xususiyat_photo,
      $xususiyatSelected = 'Select',
      $i = 1,
      $keys = 1,
      $characteristics_uz,
      $characteristics_en,
      $characteristics_ru,
      $description_uz,
      $description_en,
      $description_ru,
      $status,
      $production_date,
      $inputs = [],
      $old_inputs = [],
      $option_id = [],
      $selectedProductOption = [],
      $product_option_price = [],
      $product_option_photos = [],
      
      $product_option_photos_path = [];
  
  public function mount($id){
    $this->product = Product::find($id);
    $this->productName = $this->product->name;
    $this->productPrice = $this->product->price;
    $this->selectedCategory = $this->product->category_id;
    $this->status = $this->product->status;
    $this->production_date = $this->product->production_date;
    $this->description_uz = $this->product->description_uz;
    $this->description_en = $this->product->description_en;
    $this->description_ru = $this->product->description_ru;
    $this->characteristics_uz = $this->product->characteristics_uz;
    $this->characteristics_en = $this->product->characteristics_en;
    $this->characteristics_ru = $this->product->characteristics_ru;

    $selectedOptions = ProductOption::where('product_id', $id)->get()->toArray();
      for ($m = 0; $m < count($selectedOptions); $m++){
          $this->i = $m;
          array_push($this->old_inputs, $m);
          $this->option_id[$m] = $selectedOptions[$m]['option_id'];
          $this->selectedProductOption[$m] = $selectedOptions[$m]['id'];
          $this->product_option_price[$m] = $selectedOptions[$m]['price'];
          $this->product_option_photos[$m] = count(ProductPhoto::where('product_option_id', $selectedOptions[$m]['id'])->get()) ? ProductPhoto::where('product_option_id', $selectedOptions[$m]['id'])->get()->toArray()[0]['photo'] : 0;
          $this->product_option_photos_path[$m] = count(ProductPhoto::where('product_option_id', $selectedOptions[$m]['id'])->get()) ? ProductPhoto::where('product_option_id', $selectedOptions[$m]['id'])->get()->toArray()[0]['photo_path'] : 0;
      }
  }

  public function add($i){
    $this->i = $i + 1;
    $this->inputs[(int)$this->i] = $this->i;
  }
  
  public function remove($i){
    unset($this->inputs[$i]);
    unset($this->option_id[$i]);
    unset($this->selectedProductOption[$i]);
    unset($this->product_option_price[$i]);
    unset($this->product_option_photos[$i]);
  }

  public function removeOption($id, $i){
    $option = ProductOption::find($id);
    $option->delete();
    $this->mount($option->product_id);
    session()->flash('option','Option deleted successfully.');
  }

  public function deleteImage($id){
    ProductPhoto::find($id)->delete();
    session()->flash('image','Image deleted successfully.');
  }

  public function deleteOptionImage($id){
    ProductPhoto::find($id)->delete();
    session()->flash('optionImage','Image deleted successfully.');
  }

  public function render(){
    $categories = Category::all();
    $options = Option::all();
    $xususiyatlar = Option::all();
    $productOptions = ProductOption::where('product_id', $this->product->id)->get();
    return view('livewire.admin.edit-product', [
      'categories' => $categories,
      'options' => $options,
      'xususiyatlar' => $xususiyatlar,
      'productOptions' => $productOptions,
    ]);
  }
}
