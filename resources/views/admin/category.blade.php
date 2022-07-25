<div x-data="{ isOpen: false, deleteModal: false, editModal: false }">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <div class="button-items mb-3">
            <button @click="isOpen = true" wire:click="resetVars()" type="button" class="btn btn-success waves-effect waves-light">Add
              Category</button>
          </div>

          <h4 class="card-title">Categories List</h4>

          <div class="table-responsive">
            <table class="table mb-0">
              <thead class="table-light">
                <tr>
                  <th style="width: 60px;">#</th>
                  <th>Name</th>
                  <th style="width: 130px;">Actions</th>
                </tr>
              </thead>

              <?php
              $num = 1;
              ?>
              <tbody class="bg-white divide-y divide-gray-200">
                @if ($categories->count())
                  @foreach ($categories as $item)
                    <tr>
                      <td style="width: 60px;">{{ $num++ }}</td>
                      <td class="px-6 py-2 text-sm whitespace-no-wrap">{{ $item->name }}</td>
                      <td class="px-6 py-2 text-sm" style="width: 130px;">
                        <button @click="$wire.editShowModal( {{ $item->id }} ), editModal = true" type="button"
                          class="btn btn-warning waves-effect waves-light"><i class="uil-edit"></i></button>
                        <button @click="$wire.deleteShowModal( {{ $item->id }} ), deleteModal = true" type="button"
                          class="btn btn-danger waves-effect waves-light"><i class="uil-trash"></i></button>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td class="px-6 py-4 text-sm whitespace-no-wrap" colspan="4">No Results Found</td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div>



        </div>

      </div>
    </div>

  </div>


  {{-- Delete Modal Beginning --}}
  <div x-show="deleteModal" class="popup__confirm"
    style="
        display:none; position: fixed; 
        top: 50%; left: 50%; transform: translate(-50%, -50%); 
        background-color:#ffffff; width: 500px; height: auto; 
        z-index:999; 
        border-radius: 10px;
        box-shadow: 0px 0px 40px 0px rgba(0,0,0,0.5);
        ">
    <div class="card-body">

      <div style="margin: 1rem 0">
        Do you really want to delete this category? It will be deleted premenantly..
      </div>

      <div style="display: flex; justify-content: space-between;">
        <button @click="deleteModal = false" class="text-white px-4 py-3 text-base rounded"
          style="background-color: rgb(59 130 246);">Cencel</button>
        <button @click="$wire.deleteCat(), deleteModal = false" class="text-white px-4 py-3 text-base rounded"
          style="background-color: rgb(239 68 68);">Delete</button>
      </div>

    </div>
  </div>
  {{-- Delete Modal End --}}

  {{-- Create Modal Beginning --}}
  <div x-show="isOpen" class="popup__confirm"
    style="
        display:none; position: fixed; 
        top: 50%; left: 50%; transform: translate(-50%, -50%); 
        background-color:#ffffff; width: 500px; height: auto; 
        z-index:999; 
        border-radius: 10px;
        box-shadow: 0px 0px 40px 0px rgba(0,0,0,0.5);
        ">
    <div class="card-body">

      <div class="rounded px-8 ">
        <h1 class="font-bold text-2xl mb-8">Create Category</h1>
        <div style="margin: 1rem 0">
          <div class="modal-body">
            <div class="flex">
              <div class="col-lg-4 mr-3">
                <select wire:model="category" name="category" class="form-control select2">
                  <option value="{{ null }}">Select</option>
                  @foreach ($select_categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
              <input type="text" wire:model="name" placeholder="Category Name" class="w-full form-control"
                style="">
            </div>
            <div style="margin-top: 10px; display: flex; align-items: center;">
              <label style="margin: 0; padding-right: 8px;" for="popular">Popular</label>
              <input type="checkbox" wire:model="popular" id="popular">
            </div>
          </div>
        </div>
      </div>

      <div style="display: flex; justify-content: space-between;">
        <button @click="isOpen = false" class="text-white px-4 py-3 text-base rounded"
          style="background-color: rgb(239 68 68);">Close</button>
        <button @click="$wire.cat(), isOpen = false" class="text-white px-4 py-3 text-base rounded"
          style="background-color: rgb(59 130 246);">Save</button>
      </div>

    </div>
  </div>
  {{-- Create Modal End --}}


  {{-- Create Modal Beginning --}}
  <div x-show="editModal" class="popup__confirm"
    style="
        display:none; position: fixed; 
        top: 50%; left: 50%; transform: translate(-50%, -50%); 
        background-color:#ffffff; width: 500px; height: auto; 
        z-index:999; 
        border-radius: 10px;
        box-shadow: 0px 0px 40px 0px rgba(0,0,0,0.5);
        ">
    <div class="card-body">

      <div class="rounded px-8 ">
        <h1 class="font-bold text-2xl mb-8">Edit Category</h1>
        <div style="margin: 1rem 0">
          <div class="modal-body">
            <div class="flex">
              <div class="col-lg-4 mr-3">
                <select wire:model="category" name="category" class="form-control select2">
                  <option value="{{ null }}">Select</option>
                  @foreach ($select_categories as $categoryy)
                    <option @if($category->id == $categoryy->id) selected @endif value="{{ $categoryy->id }}">{{ $categoryy->name }}</option>
                  @endforeach
                </select>
              </div>
              <input type="text" wire:model="name" placeholder="Category Name" class="w-full form-control">
            </div>
            <div style="margin-top: 10px; display: flex; align-items: center;">
              <label style="margin: 0; padding-right: 8px;" for="popular">Popular</label>
              <input type="checkbox" wire:model="popular" id="popular">
            </div>
          </div>
        </div>


      </div>

      <div style="display: flex; justify-content: space-between;">
        <button @click="$wire.resetVars(), editModal = false" class="text-white px-4 py-3 text-base rounded"
          style="background-color: rgb(239 68 68);">Close</button>
        <button @click="$wire.update(), editModal = false" class="text-white px-4 py-3 text-base rounded"
          style="background-color: rgb(59 130 246);">Update</button>
      </div>

    </div>
  </div>
  {{-- Create Modal End --}}




</div>
