<div>
  <div class="row">
    <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
                <div class="button-items mb-3">
                  <button wire:click="createShowModal" type="button" class="btn btn-success waves-effect waves-light">Add Category</button>
                </div>
                <h4 class="card-title">Categories List</h4>
                
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th  style="width: 60px;">#</th>
                                <th>Name</th>
                                <th style="width: 130px;">Actions</th>
                            </tr>
                        </thead>
                        <?php 
                          $num = 1;
                        ?>
                        <tbody class="bg-white divide-y divide-gray-200">
                          @if($categories->count())
                              @foreach($categories as $item)
                                  <tr>
                                    <td  style="width: 60px;">{{$num++}}</td>
                                      <td class="px-6 py-2 text-sm whitespace-no-wrap">{{ $item->name }}</td>
                                      <td class="px-6 py-2 text-sm" style="width: 130px;">
                                        <button wire:click="updateShowModal({{ $item->id }})" type="button" class="btn btn-warning waves-effect waves-light"><i class="uil-edit"></i></button>
                                        <button wire:click="deleteShowModal({{ $item->id }})" type="button" class="btn btn-danger waves-effect waves-light"><i class="uil-trash"></i></button>
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

  {{-- The Delete Modal --}}
  <x-jet-dialog-modal wire:model="modalConfirmDeleteVisible">
    <x-slot name="title">
        {{ __('Delete Category') }}
    </x-slot>

    <x-slot name="content">
        {{ __('Are you sure you want to delete this category? Once this category is deleted, all of its resources and data will be permanently deleted.') }}
    </x-slot>

    <x-slot name="footer">
        <button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled" type="button" class="btn btn-primary waves-effect waves-light mr-2">
          {{ __('Cancel') }}
        </button>

        <button wire:click="delete" wire:loading.attr="disabled" type="button" class="btn btn-danger waves-effect waves-light">
          {{ __('Delete') }}
        </button>

    </x-slot>
  </x-jet-dialog-modal>


{{-- The Create Modal --}}
  <x-jet-dialog-modal wire:model="modalFormVisible" >
    <x-slot name="title">
          {{ __('Category name.') }}
    </x-slot>
    <x-slot name="content">
      <div class="mt-4">
        <x-jet-label for="name" value="{{ __('Name') }}" />
        <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="name" />
        @error('name') <span class="error">{{$message}}</span> @enderror
      </div>
    </x-slot>

    <x-slot name="footer">
      <button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled" type="button" class="btn btn-primary waves-effect waves-light mr-2">
        {{ __('Cancel') }}
      </button>

      @if($modelId)
        <button wire:click="update()" wire:loading.attr="disabled" type="button" class="btn btn-success waves-effect waves-light">
          {{ __('Update') }}
        </button>
      @else
        <button wire:click="create()" wire:loading.attr="disabled" type="button" class="btn btn-success waves-effect waves-light">
          {{ __('Create') }}
        </button>
      @endif

    </x-slot>
  </x-jet-dialog-modal>
</div>
