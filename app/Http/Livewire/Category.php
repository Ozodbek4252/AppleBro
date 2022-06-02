<?php

namespace App\Http\Livewire;

use Illuminate\Validation\Rule;
use Livewire\Component;
use App\Models\Category as CategoryModel;
use App\Models\Option;
use Livewire\WithPagination;


class Category extends Component
{
    use WithPagination;

    public 
        $modalFormVisible = false, 
        $modalConfirmDeleteVisible = false, 
        $name, 
        $category,
        $modelId;

    public function rules(){
        return [
            'name' => ['required', Rule::unique('categories')],
        ];
    }

    public function cat(){
        $this->validate();
        $category = new CategoryModel();
        $category->name = $this->name;
        $category->category_id = $this->category;
        $category->save();
        $this->resetVars();
    }

    /**
     * The create function.
     *
     * @return void
     */
    // public function create(){
    //     $this->validate();
    //     CategoryModel::create($this->modelData());
    //     $this->modalFormVisible = false;
    //     $this->resetVars();
    // }

    /**
     * The read function.
     *
     * @return void
     */
    public function read(){
        $categories = CategoryModel::orderBy('id', 'desc')->get();
        return $categories;
    }

    public function deleteCat(){
        $categoryModel = CategoryModel::find($this->modelId);
        $categoryModel->delete();
        $this->resetVars();
    }

    public function deleteShowModal($id){
        $this->modelId = $id;
        $this->modalConfirmDeleteVisible = true;
    }

    /**
     * Resets all the variables 
     * to null.
     *
     * @return void
     */
    public function resetVars(){ 
        $this->name = $this->modelId = $this->category = null;
    }

    public function render()
    {
        $options = new Option;
        $select_categories = CategoryModel::where('category_id', null)->get();
        return view('admin.category', [
            'categories' => $this->read(),
            'select_categories' => $select_categories,
            'options' => $options,
        ]);
    }
}
