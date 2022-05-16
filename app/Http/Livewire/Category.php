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
        $modelId;

    public function rules(){
        return [
            'name' => ['required', Rule::unique('categories')],
        ];
    }

    /**
     * The create function.
     *
     * @return void
     */
    public function create(){
        $this->validate();
        CategoryModel::create($this->modelData());
        $this->modalFormVisible = false;
        $this->resetVars();
    }

    /**
     * The read function.
     *
     * @return void
     */
    public function read(){
        $categories = CategoryModel::orderBy('id', 'desc')->paginate(10);
        return $categories;
    }

    /**
     * the update function.
     *
     * @return void
     */
    public function update(){
        $this->validate();
        CategoryModel::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;
    }

    /**
     * The delete function.
     *
     * @return void
     */
    public function delete(){
        CategoryModel::find($this->modelId)->delete();
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();
    }

    /**
     * Shows the form modal
     * of the create function.
     *
     * @return void
     */
    public function createShowModal(){
        $this->resetValidation();
        $this->resetVars();
        $this->modalFormVisible = true;
    }

    /**
     * Shows the form modal
     * in update mode.
     *
     * @param  mixed $id
     * @return void
     */
    public function updateShowModal($id){
        $this->resetValidation();
        $this->resetVars();
        $this->modelId = $id;
        $this->modalFormVisible = true;
        $this->loadModal();
    }

    /**
     * Shows the delete confirmation modal.
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteShowModal($id){
        $this->modelId = $id;
        $this->modalConfirmDeleteVisible = true;
    }

    /**
     * Loads the modal data
     * of this component.
     *
     * @return void
     */
    public function loadModal(){
        $data = CategoryModel::find($this->modelId);
        $this->name = $data->name;
    }

    /**
     * The data for the model mapped 
     * in this component.
     *
     * @return void
     */
    public function modelData(){
        return [
            'name' => $this->name,
        ];
    }

    /**
     * Resets all the variables 
     * to null.
     *
     * @return void
     */
    public function resetVars(){ 
        $this->name = $this->modelId = null;
    }

    public function render()
    {
        $options = new Option;
        return view('admin.category', [
            'categories' => $this->read(),
            'options' => $options,
        ]);
    }
}
