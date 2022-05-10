
<div class="row">
  <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
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
                      <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                  @error('category') <span class="error">{{$message}}</span> @enderror
                </div>
              </div>

              <div class="col-md-2">
                  <div class="mb-3">
                      <label class="form-label" for="name">Name</label>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Product Name" value="">
                      @error('name') <span class="error">{{$message}}</span> @enderror
                  </div>
              </div>

              <div class="col-md-2">
                  <div class="mb-3">
                      <label class="form-label" for="price">Price</label>
                      <input name="price" type="text" class="form-control" id="price" placeholder="Price" value="">
                      @error('price') <span class="error">{{$message}}</span> @enderror
                  </div>
              </div>

              <div class="col-md-2">
                  <div class="mb-3">
                      <label class="form-label" for="photo">Photo</label>
                      <input name="product_photo" type="file" class="form-control" id="photo" placeholder="Photo" value="">
                  </div>
              </div>

              <div class="col-md-2">
                  <div class="mb-3">
                      <label class="form-label" for="photos">Photos</label>
                      <input type="file" name="product_photos[]" class="form-control" multiple id="photos" placeholder="Last name" value="">
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
              <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label" for="xususiyat_name">Name</label>
                    <input type="text" wire:model="xususiyat_name" class="form-control" id="xususiyat_name" placeholder="Name" value="">
                    @error('xususiyat_name') <span class="error">{{$message}}</span> @enderror
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label" for="xususiyat_value">Value</label>
                    <input type="text" wire:model="xususiyat_value" class="form-control"  id="xususiyat_value" placeholder="Value" value="">
                    @error('xususiyat_value') <span class="error">{{$message}}</span> @enderror
                </div>
              </div>
              <div class="row">
                <div class="col-md-9">
                  <div class="mb-3">
                    <label class="form-label" for="xususiyat_photo">Photos</label>
                    <input type="file" wire:model="xususiyat_photo" name="xususiyat_photo" class="form-control" id="xususiyat_photo" placeholder="Xususiyat Photo" value="">
                    @error('xususiyat_photo') <span class="error">{{$message}}</span> @enderror
                  </div>
                </div>
                {{-- <div class="col-md-3" style="display: flex; justify-content: center; align-items: center;">
                  <div style="border-radius: 50%; width: 40px; height: 40px; margin-top: 15px;">
                    @if(isset($xususiyat_photo))
                      <img src={{$xususiyat_photo}}  style="border-radius: 50%; height: 100%; object-fit: cover; object-position: center;" />
                    @endif
                  </div>
                </div> --}}
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                    <button type="button" wire:click="xususiyat_add()" class="btn btn-success" value="Add">Add</button>
                </div>
              </div>
              <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                </tr>
                {{-- @foreach($contacts as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->phone }}</td>
                    </tr>
                @endforeach --}}
            </table>
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
                                          multiple
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
                                          class="form-control form-control-sm"
                                          wire:model="product_option_photos.{{ $key }}"
                                          name="product_option_photos[{{ $key }}]"
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
      <button class="btn btn-primary" type="submit" style="width: 200px;">Submit form</button>
    </form>


</div>

