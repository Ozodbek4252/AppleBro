<div class="row">
  <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="col-xl-12">
      <div class="card">
        <div class="card-body">
          <div style="margin-bottom: 1rem;">
            @if (session()->has('image'))
              <div
                style="padding: .75rem; background: #feb2b2; color: #9b2c2c; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
                class="alert alert-danger">
                {{ session('image') }}
              </div>
            @endif
          </div>
        
          <h4 class="card-title">Bootstrap Validation - Normal</h4>
          <div class="row">
            <div class="col-lg-2">
              <div class="mb-3">

                <label class="form-label">Kategoriyani tanlang</label>
                <select name="category" class="form-control select2">
                  <option>Select</option>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($selectedCategory == $category->id) selected @endif>
                      {{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="col-md-2">
              <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Product Name"
                  value="{{ $productName }}">
              </div>
            </div>

            <div class="col-md-2">
              <div class="mb-3">
                <label class="form-label" for="price">Price</label>
                <input name="price" type="text" class="form-control" id="price" placeholder="Price"
                  value="{{ $productPrice }}">
              </div>
            </div>

            <div class="col-md-2">
              <div class="mb-3">
                <label class="form-label" for="photo">Photo</label>
                <input name="product_photo" type="file" class="form-control" id="photo" placeholder="Photo" value="">
              </div>
              <div class="col-md-6" style="display: flex;">
                <img class="img-thumbnail" alt="200x200" width="200"
                  src="/{{ $product->main_photo_path }}/{{ $product->main_photo }}" data-holder-rendered="true">
              </div>


            </div>

            <div class="col-md-2">
              <div class="mb-3">
                <label class="form-label" for="photos">Photos</label>
                <input type="file" name="product_photos[]" class="form-control" multiple id="photos"
                  placeholder="Last name" value="">
              </div>
              <div class="row">
                @foreach (\App\Models\ProductPhoto::where('product_id', $product->id)->get() as $productPhotos)
                  <div class="col-md-6 mb-2" style="display: flex;">
                    <button type="button" class="btn-close" data-bs-toggle="modal" aria-label="Close"
                      data-bs-target="#Mark_{{ $productPhotos->id }}"
                      style="position: absolute; right: -5px; font-size: 10px;"></button>
                    <img class="rounded me-2" alt="200x200" width="200"
                      src="/{{ $productPhotos->photo_path }}/{{ $productPhotos->photo }}"
                      data-holder-rendered="true">

                  </div>
                  {{-- Modal Beginning --}}
                  <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
                    aria-labelledby="Mark_{{ $productPhotos->id }}" id="Mark_{{ $productPhotos->id }}"
                    aria-hidden="false">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <div>
                            <p class="text-red-500">Are you sure that you want to delete this image?</p>
                            <img class="rounded me-2" alt="200x200" width="200"
                              src="/{{ $productPhotos->photo_path }}/{{ $productPhotos->photo }}"
                              data-holder-rendered="true">
                          </div>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-9">
                              <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                <button type="button" data-bs-dismiss="modal" aria-label="Close"
                                  class="btn btn-success btn-sm">
                                  Cencel
                                </button>
                                <button type="button" data-bs-dismiss="modal" aria-label="Close"
                                  class="btn btn-danger btn-sm" wire:click="deleteImage({{ $productPhotos->id }})">
                                  Delete
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- Modal End --}}
                @endforeach
              </div>
            </div>

            <div class="card-body row">
              {{-- @foreach (\App\Models\Product::where('category_id', $category->id)->get() as $characteristic) --}}
              <div class="form-group col-md-4" style="width: 27.7rem">
                  <label for="">Характеристики_uz</label>
                  <textarea class="ckeditor form-control" name="characteristic_uz">{{ $product->characteristic_uz }}</textarea>
              </div>
          
              <div class="form-group col-md-4" style="width: 27.7rem">
                  <label for="">Характеристики_ру</label>
                  <textarea class="ckeditor form-control" name="characteristic_ru">{{ $product->characteristic_ru }}</textarea>
              </div>
          
            <div class="form-group col-md-4" style="width: 27.7rem">
                <label for="">Характеристики_ен</label>
                <textarea class="ckeditor form-control" name="characteristic_en">{{ $product->characteristic_en }}</textarea>
            </div>
          </div>

          <h4 class="card-title">Описание</h4>
            <div class="row">
              <div class="col-lg-2">
                <div class="mb-3">
                  <label class="form-label" for="description_uz">oписание_уз</label>
                  <textarea type="text" name="description_uz" class="form-control" multiple id="description_uz" placeholder="....." >{{$product->description_uz}}</textarea>
                </div>
              </div>
              
              <div class="col-lg-2">
                <div class="mb-3">
                  <label class="form-label" for="description_ru">oписание_ру</label>
                  <textarea type="text" name="description_ru" class="form-control" multiple id="description_ru" placeholder="....." >{{$product->description_ru}}</textarea>
                </div>
              </div>
              
              <div class="col-lg-2">
                <div class="mb-3">
                  <label class="form-label" for="description_en">oписание_ен</label>
                  <textarea type="text" name="description_en" class="form-control" multiple id="description_en" placeholder=".....">{{$product->description_en}}</textarea>
                </div>
              </div>
            </div>

          </div>
          {{-- @endforeach --}}


        </div>
      </div>
    </div>


    <div class="row">

      <div class="col-xl-3">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Xususiyatlari</h4>
            <div class="mb-3">
              <label class="form-label">Kategoriyani tanlang</label>
              <select wire:model="xususiyatSelected" name="xususiyatSelected" wire:change="changeOption()"
                class="form-control select2">
                <option value="Select">Select</option>
                @foreach ($xususiyatlar as $xususiyat)
                  <option value="{{ $xususiyat->id }}">
                    @if ($xususiyat)
                      {{ $xususiyat->name }} - {{ $xususiyat->value }}
                    @endif
                  </option>
                @endforeach
              </select>
            </div>

            <div class="col-md-12">
              <div class="mb-3">
                <label class="form-label" for="xususiyat_name">Name</label>
                <input type="text" wire:model="xususiyat_name" class="form-control" placeholder="Name">
              </div>
            </div>

            <div class="col-md-12">
              <div class="mb-3">
                <label class="form-label" for="xususiyat_name">Value</label>
                <input type="text" wire:model="xususiyat_value" class="form-control" placeholder="Value">
              </div>
            </div>

            <div class="col-md-12">
              <div class="mb-3">
                <label class="form-label" for="xususiyat_name">Photo</label>
                <input type="file" wire:model="xususiyat_photo" class="form-control">
              </div>
            </div>


            <div class="col-md-12">
              <div class="mb-3">
                <button type="button" wire:click="addXususiyat" class="btn btn-success mr-3">Add</button>
                @if ($xususiyatSelected != 'Select')
                  <button type="button" wire:click="deleteOption()" class="btn btn-danger">Delete</button>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-xl-9">
        <div class="card">
          <div class="card-body">
            @if (session()->has('optionImage'))
              <div
                style="padding: .75rem; background: #feb2b2; color: #9b2c2c; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
                class="alert alert-danger">
                {{ session('optionImage') }}
              </div>
            @endif
            <div style="margin-bottom: 1rem;">
              @if (session()->has('option'))
                <div
                  style="padding: .75rem; background: #feb2b2; color: #9b2c2c; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
                  class="alert alert-danger">
                  {{ session('option') }}
                </div>
              @endif
            </div>
            <div class="col-md-12">
              <div class="mb-3" style="display: flex; flex-direction: column;">

                <div class="add-input mb-2">
                  <div class="row">
                    <div class="col-md-1">
                      <div class="add-input">
                        <div class="spinner-border text-info m-1" wire:loading wire:target="add({{ $i }})"
                          role="status">
                          <span class="sr-only">Loading...</span>
                        </div>
                        <button class="btn text-white btn-info btn-sm" wire:loading.attr="disabled"
                          wire:click.prevent="add({{ $i }})"><i class="fa fa-plus"></i></button>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label class="col-form-label-sm" for="validationTooltip02">Option Id</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label class="col-form-label-sm" for="validationTooltip02" required>Price</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label class="col-form-label-sm" for="validationTooltip02">Photos</label>
                      </div>
                    </div>
                  </div>
                </div>

                @foreach ($productOptions as $key => $productOption)
                  <div class="add-input mb-0 {{ $key }}">
                    <div class="row">
                      <div class="col-md-1">
                        <input type="hidden" name="selectedProductOption[{{ $key }}]"
                          wire:model="selectedProductOption.{{ $key }}" value="{{ $productOption->id }}">
                        <button class="btn btn-danger btn-sm"
                          wire:click.prevent="removeOption({{ $productOption->id }}, {{ $key }})"><i
                            class="fa fa-minus"></i></button>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select class="form-control form-control-sm" wire:model="option_id.{{ $key }}"
                            name="option_id[{{ $key }}]">
                            <option value="null">Select Option</option>
                            @foreach ($options as $option)
                              <option value="{{ $option->id }}">{{ $option->name }} ({{ $option->value }})
                              </option>
                            @endforeach
                          </select>

                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <input type="text" class="form-control form-control-sm" placeholder="price"
                            wire:model="product_option_price.{{ $key }}"
                            name="product_option_price[{{ $key }}]">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <input type="file" multiple class="form-control form-control-sm"
                            wire:model="product_option_photos.{{ $key }}"
                            name="product_option_photos[{{ $key }}][]">
                          @if (\App\Models\Option::find($productOption->option_id)->name == 'Color')
                            @php
                              $productOptionPhotos = \App\Models\ProductPhoto::where('product_option_id', $productOption->id)->get();
                            @endphp
                            <div style="display: flex; flex-wrap: wrap;">
                              @foreach ($productOptionPhotos as $id_of_photos => $productOptionPhoto)
                                <div class="col-md-6 mt-2"
                                  style="display: flex; flex-direction: column; align-items: end;">
                                  {{-- <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    data-bs-toggle="modal" data-bs-target="#productMainPhotoDeleteModal"
                                    aria-label="Close"></button> --}}
                                  <button type="button" class="btn-close" data-bs-toggle="modal"
                                    aria-label="Close" data-bs-target="#Mark_{{ $productOptionPhoto->id }}"></button>
                                  <img class="img-thumbnail" alt="200x200" width="200"
                                    src="/{{ $productOptionPhoto->photo_path }}/{{ $productOptionPhoto->photo }}"
                                    data-holder-rendered="true">
                                </div>

                                {{-- Modal Beginning --}}
                                <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
                                  aria-labelledby="Mark_{{ $productOptionPhoto->id }}"
                                  id="Mark_{{ $productOptionPhoto->id }}" aria-hidden="false">
                                  <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <div>
                                          <p class="text-red-500">Are you sure that you want to delete this image?
                                          </p>
                                          <img class="rounded me-2" alt="200x200" width="200"
                                            src="/{{ $productOptionPhoto->photo_path }}/{{ $productOptionPhoto->photo }}"
                                            data-holder-rendered="true">
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                          aria-label="Close">
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="row">
                                          <div class="col-md-9">
                                            <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                              <button type="button" data-bs-dismiss="modal" aria-label="Close"
                                                class="btn btn-success btn-sm">
                                                Cencel
                                              </button>
                                              <button type="button" data-bs-dismiss="modal" aria-label="Close"
                                                class="btn btn-danger btn-sm"
                                                wire:click="deleteOptionImage({{ $productOptionPhoto->id }})">
                                                Delete
                                              </button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                {{-- Modal End --}}
                              @endforeach
                            </div>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr><br>
                @endforeach

                @foreach ($inputs as $key => $value)
                  <div class="add-input mb-0 {{ $key }}">
                    <div class="row">
                      <div class="col-md-1">
                        <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{ $key }})"><i
                            class="fa fa-minus"></i></button>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select class="form-control form-control-sm" wire:model="option_id.{{ $key }}"
                            name="option_id[{{ $key }}]">
                            <option value="null">Select Option</option>
                            @foreach ($options as $option)
                              <option value="{{ $option->id }}">{{ $option->name }} ({{ $option->value }})
                              </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <input type="text" class="form-control form-control-sm" placeholder="price"
                            wire:model="product_option_price.{{ $key }}"
                            name="product_option_price[{{ $key }}]">
                          @error('product_option_price.' . $value)
                            <span class="text-danger error">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <input type="file" multiple class="form-control form-control-sm"
                            wire:model="product_option_photos.{{ $key }}"
                            name="product_option_photos[{{ $key }}][]">
                          @error('product_option_photos.' . $value)
                            <span class="text-danger error">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr><br>
                @endforeach

              </div>
            </div>
          </div>
        </div>
      </div>



    </div>
    <button class="btn btn-primary" type="submit" style="width: 200px;">Saqlash</button>
  </form>

</div>
