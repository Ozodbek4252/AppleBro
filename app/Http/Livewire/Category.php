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
        $modelId,
        $popular,
        $deleteModal = false,
        $editModalFormVisible = false,
        $isOpen = false;

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
        $category->popular = $this->popular;
        $category->save();
        $this->resetVars();
    }

    /**
     * The read function.
     *
     *
     * @return void
     */
    public function read(){
        $categories = CategoryModel::orderBy('id', 'desc')->get();
        return $categories;
    }

    public function deleteCat(){
        CategoryModel::where('id', $this->modelId)->delete();
    }

    public function deleteShowModal($id){
        $this->modelId = $id;
        $this->modalConfirmDeleteVisible = true;
    }

    public function editShowModal($id){
        $this->modelId = $id;
        $this->editModalFormVisible = true;
        $this->category = CategoryModel::where('id', $id)->first()->category_id;
        $this->popular = CategoryModel::where('id', $id)->first()->popular;
        $this->name = CategoryModel::where('id', $id)->first()->name;
    }

    public function update(){
        $category = CategoryModel::find($this->modelId);
        // CategoryModel::find($this->modelId)->update([
            //     'name' => $this->name ?? null,
            //     'category_id' => $this->category ?? null,
            //     'popular' => $this->popular ?? null,
            // ]);
        $category->name = $this->name;
        $category->category_id = $this->category;
        $category->popular = $this->popular;
        $category->save();
    }

    /**
     * Resets all the variables 
     * to null.
     *
     * @return void
     */
    public function resetVars(){ 
        $this->name = $this->modelId = $this->category = $this->popular = null;
    }

    public function render()
    {
        $options = new Option;
        $select_categories = CategoryModel::all();
        return view('admin.category', [
            'categories' => $this->read(),
            'select_categories' => $select_categories,
            'options' => $options,
        ]);
    }
}
