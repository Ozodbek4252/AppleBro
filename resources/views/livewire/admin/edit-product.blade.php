<div class="row">
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
    <div class="col-xl-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Bootstrap Validation - Normal</h4>
              <div class="row">
                <div class="col-lg-2">
                  <div class="mb-3">

                    <label class="form-label">Kategoriyani tanlang</label>
                    <select name="category" class="form-control select2">
                      <option>Select</option>
                      @foreach($categories as $category)
                        <option value="{{$category->id}}" @if($selectedCategory == $category->id) selected @endif >{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
  
                <div class="col-md-2">
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Product Name" value="{{$productName}}">
                    </div>
                </div>
  
                <div class="col-md-2">
                    <div class="mb-3">
                        <label class="form-label" for="price">Price</label>
                        <input name="price" type="text" class="form-control" id="price" placeholder="Price" value="{{$productPrice}}">
                    </div>
                </div>
  
                <div class="col-md-2">
                  <div class="mb-3">
                    <label class="form-label" for="photo">Photo</label>
                    <input name="product_photo" type="file" class="form-control" id="photo" placeholder="Photo" value="">
                  </div>
                  <div class="col-md-6" style="display: flex;">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-toggle="modal" data-bs-target="#productMainPhotoDeleteModal" aria-label="Close" style="position: absolute; right: 100px;"></button>
                      <img class="img-thumbnail" alt="200x200" width="200" src="/{{$product->main_photo_path}}/{{$product->main_photo}}" data-holder-rendered="true">
                  </div>

                      <div>
                        <div>
                          <div id="productMainPhotoDeleteModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="myModalLabel">Warning</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <p>Are you sure you want to delete this photo? Once this photo is deleted, all of its resources and data will be permanently deleted.</p>
                                      
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                  <button wire:click="deleteProductMainPhoto({{$product}})" type="button" class="btn btn-danger waves-effect waves-light">Delete</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                  </div>
                  
                  
                  <div class="col-md-2">
                    <div class="mb-3">
                      <label class="form-label" for="photos">Photos</label>
                      <input type="file" name="product_photos[]" class="form-control" multiple id="photos" placeholder="Last name" value="">
                    </div>
                    <div class="row">
                      @foreach(\App\Models\ProductPhoto::where("product_id", $product->id) as $productPhotos)
                        <div class="col-md-6 mb-2" style="display: flex;">
                          <button type="button" class="btn-close mr-4" data-bs-dismiss="alert" aria-label="Close"  style="position: absolute; right: -5px; font-size: 10px;"></button>
                          <img class="rounded me-2" alt="200x200" width="200" src="{{$productPhotos->photo_path}}/{{$productPhotos->photo}}" data-holder-rendered="true">
                        </div>
                      @endforeach
                    </div>
                </div>
  
              </div>
  
              
              
            </div>
          </div>
        </div> <!-- end col -->
  
  
        <div class="row">
  
          <div class="col-xl-3">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Xususiyatlari</h4>
                <div class="mb-3">
                  <label class="form-label">Kategoriyani tanlang</label>
                  <select wire:model="xususiyatSelected" name="xususiyatSelected" wire:change="changeOption()" class="form-control select2">
                    <option value="Select">Select</option>
                    @foreach($xususiyatlar as $xususiyat)  
                      <option  value="{{$xususiyat->id}}">@if($xususiyat) {{$xususiyat->name}} - {{$xususiyat->value}} @endif </option>
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
                    @if($xususiyatSelected != 'Select')
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
                
                <div class="col-md-12">
                  <div class="mb-3" style="display: flex; flex-direction: column;">
  
                    <div class="add-input mb-2">
                      <div class="row">
                          <div class="col-md-1">
                              <div class="add-input">
                                  <div class="spinner-border text-info m-1" wire:loading
                                      wire:target="add({{$i}})" role="status">
                                      <span class="sr-only">Loading...</span>
                                  </div>
                                  <button class="btn text-white btn-info btn-sm"
                                          wire:loading.attr="disabled"
                                          wire:click.prevent="add({{$i}})"><i
                                          class="fa fa-plus"></i></button>
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

                    @foreach($productOptions as $key => $productOption)
                      <div class="add-input mb-0 {{ $key }}">
                        <div class="row">
                          <div class="col-md-1">
                            <button class="btn btn-danger btn-sm"
                                    wire:click.prevent="remove({{$key}})"><i
                                    class="fa fa-minus"></i></button>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <select class="form-control form-control-sm"
                                    wire:model="option_id.{{ $key }}"
                                    name="option_id[{{ $key }}]">
                                <option value="null">Select Option</option>
                                @foreach($options as $option)
                                  <option value="{{ $option->id }}" >{{ $option->name }} ({{$option->value}})</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <input type="text"
                                    class="form-control form-control-sm"
                                    placeholder="price"
                                    wire:model="product_option_price.{{ $key }}"
                                    name="product_option_price[{{ $key }}]">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="file"
                                    multiple
                                    class="form-control form-control-sm"
                                    wire:model="product_option_photos.{{ $key }}"
                                    name="product_option_photos[{{ $key }}][]">
                                    @if(\App\Models\Option::find($productOption->option_id)->name == 'Color')
                                      <div class="col-md-6 mt-2" style="display: flex;">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-toggle="modal" data-bs-target="#productMainPhotoDeleteModal" aria-label="Close" style="position: absolute; right: 100px;"></button>
                                        <img class="img-thumbnail" alt="200x200" width="200" src="/{{$product_option_photos_path[$key]}}/{{ $product_option_photos[$key] }}" data-holder-rendered="true">
                                      </div>
                                    @endif
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr><br>
                    @endforeach
  
                    @foreach($inputs as $key => $value)
                      <div class="add-input mb-0 {{ $key }}">
                          <div class="row">
                              <div class="col-md-1">
                                  <button class="btn btn-danger btn-sm"
                                          wire:click.prevent="remove({{$key}})"><i
                                          class="fa fa-minus"></i></button>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control form-control-sm"
                                        wire:model="option_id.{{ $key }}"
                                        name="option_id[{{ $key }}]">
                                    <option value="null">Select Option</option>
                                    @foreach($options as $option)
                                      <option value="{{ $option->id }}">{{ $option->name }} ({{$option->value}})</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                              <div class="col-md-2">
                                  <div class="form-group">
                                      <input type="text"
                                            class="form-control form-control-sm"
                                            placeholder="price"
                                            wire:model="product_option_price.{{ $key }}"
                                            name="product_option_price[{{ $key }}]">
                                      @error('product_option_price.'.$value) <span
                                          class="text-danger error">{{ $message }}</span>@enderror
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <input type="file"
                                            multiple
                                            class="form-control form-control-sm"
                                            wire:model="product_option_photos.{{ $key }}"
                                            name="product_option_photos[{{ $key }}][]">
                                      @error('product_option_photos.'.$value) <span
                                          class="text-danger error">{{ $message }}</span>@enderror
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
  