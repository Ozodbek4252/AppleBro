<div x-data="{ isOpen: false, deleteModal: false }">
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <div class="button-items mb-3">
            <button @click="isOpen = true" type="button" class="btn btn-success waves-effect waves-light">Add
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
                        <button wire:click="updateShowModal({{ $item->id }})" type="button"
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
              {{ $categories->links() }}
            </table>
          </div>



        </div>

      </div>
    </div>

  </div>


  {{-- Delete Modal Beginning --}}
  <div x-show="deleteModal"
    class=" mx-auto absolute top-0 left-0 bottom-0 w-full h-full flex items-center overflow-y-auto"
    style="z-index: 999999;">
    <div class="bg-white mx-auto rounded p-4 mt-2 overflow-y-auto shadow-2xl "
      style="box-shadow: 0 25px 160px 20px rgb(0 0 0 / 0.25); min-width: 600px;">
      <div class="rounded px-8 pt-8">
        <h1 class="font-bold text-2xl mb-8">Modal Title</h1>
        <div class="modal-body flex">
          <div class="col-lg-4 mr-3">
            Do you want to delete this category?
          </div>
        </div>
        <div class="mt-4" style="display: flex; justify-content: space-between">
          <button @click="deleteModal = false" class="text-white px-4 py-3 text-base rounded"
            style="background-color: rgb(59 130 246);">Cencel</button>
          <button @click="$wire.deleteCat(), deleteModal = false" class="text-white px-4 py-3 text-base rounded"
            style="background-color: rgb(239 68 68);">Delete</button>
        </div>
      </div>
    </div>
  </div>
  {{-- Delete Modal End --}}


  {{-- Craete Modal Beginning --}}
  <div x-show="isOpen" class=" mx-auto absolute top-0 left-0 bottom-0 w-full h-full flex items-center overflow-y-auto"
    style="z-index: 999999;">
    <div class="bg-white mx-auto rounded p-4 mt-2 overflow-y-auto shadow-2xl "
      style="box-shadow: 0 25px 160px 20px rgb(0 0 0 / 0.25); min-width: 600px;">
      <div class="rounded px-8 pt-8">
        <h1 class="font-bold text-2xl mb-8">Modal Title</h1>
        <div class="modal-body flex">
          <div class="col-lg-4 mr-3">
            <select wire:model="category" name="category" class="form-control select2">
              <option value="{{ null }}">Select</option>
              @foreach ($select_categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
          </div>
          {{-- <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" > --}}
          <input type="text" wire:model="name" placeholder="Category Name" class="w-full form-control" style="">
        </div>
        <div class="mt-4" style="display: flex; justify-content: space-between">
          <button @click="isOpen = false" class="text-white px-4 py-3 text-base rounded"
            style="background-color: rgb(239 68 68);">Close Modal</button>
          <button @click="$wire.cat(), isOpen = false" class="text-white px-4 py-3 text-base rounded"
            style="background-color: rgb(59 130 246);">Save Modal</button>
        </div>
      </div>
    </div>
  </div>
  {{-- Craete Modal End --}}

</div>
