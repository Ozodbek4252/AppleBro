<div>
  <div class="row">
    <div class="col-lg">
      <div class="card">
        <div class="card-body">

          {{-- Flash Message for Adding Product Beginning --}}
          <div style="margin-bottom: 1rem;">
            @if (session()->has('product'))
              <div
                style="padding: .75rem; background: #9ae6b4; color: #276749; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
                class="alert alert-success">
                {{ session('product') }}
              </div>
            @elseif(session()->has('deleteMessage'))
              <div
                style="padding: .75rem; background: #feb2b2; color: #9b2c2c; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
                class="alert alert-success">
                {{ session('deleteMessage') }}
              </div>
            @endif
          </div>
          {{-- Flash Message for Adding Product End --}}


          {{-- Add Product Button Beginning --}}
          <div class="button-items mb-3">
            <form action="{{ route('admin.products.create') }}" method="get">
              <button type="submit" class="btn btn-success waves-effect waves-light">Add Product</button>
            </form>
          </div>
          {{-- Add Product Button End --}}


          {{-- Loop Category Names Beginning --}}
          <p class="card-title-desc mb-2">Select one of these categories to see list:</p>
          <div class="button-items mb-2" id="tooltip-container">
            @foreach ($categories as $category)
              <button wire:click="selectCategory({{ $category->id }})" type="button" class="btn btn-primary"
                data-bs-placement="top">
                {{ $category->name }}
              </button>
            @endforeach
          </div>
          {{-- Loop Category Names End --}}





          {{-- Current Category Name --}}
          <h4 class="card-title">{{ \App\Models\Category::find($category_id)?->name }}</h4>


          {{-- Product Table Beginning --}}
          <div class="table-responsive">
            <table class="table mb-0">
              <thead class="table-light">
                <tr>
                  <th style="width: 60px;">#</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Details</th>
                  <th>Images</th>
                  <th style="width: 130px;">Actions</th>
                </tr>
              </thead>
              <?php
              $num = 1;
              ?>
              <tbody class="bg-white divide-y divide-gray-200">
                @if ($products)
                @foreach ($products as $product)
                <tr>
                  <?php
                      $product_options = \App\Models\ProductOption::where('product_id', $product->id)->get();
                      $optionArr = [];
                      // $option_name = '';
                      if ($product_options) {
                        foreach ($product_options as $product_option) {
                          $option = \App\Models\Option::find($product_option->option_id);
                              $option['price'] = $product_option->price;
                              $option_name = $option->name;
                              $optionArr[$option_name][] = $option;
                          }
                      }
                      ?>
                      @if ($product->category_id == $category_id)
                        <td style="width: 60px;">{{ $num++ }}</td>
                        <td class="px-6 py-2 text-sm whitespace-no-wrap"><a href="{{route('admin.single-product', $product->id)}}">{{ $product->name }}</a></td>
                        <td class="px-6 py-2 text-sm whitespace-no-wrap">{{ $product->price }}</td>
                        <td class="px-6 py-2 text-sm whitespace-no-wrap">
                          @if ($optionArr)
                            @foreach ($optionArr as $key => $value)
                              {{ $key }}:
                              @foreach ($optionArr[$key] as $option)
                                <label for="product-color1-{{ $option['id'] }}">
                                  <span>{{ $option['value'] }}</span>
                                  @if(!$loop->last)
                                    /
                                  @endif
                                  @if ($option['name'] == 'Color')
                                    <div class="color"
                                      style="background: linear-gradient(229.47deg, #FFCB46 -17.16%, #C58E00 103.37%);">
                                    </div>
                                  @endif
                                </label>
                              @endforeach
                              <br>
                            @endforeach
                          @endif
                        </td>
                        <td class="px-6 py-2 text-sm whitespace-no-wrap">
                          <div class="col-md-6 mt-2"
                            style="display: flex; justify-content: center; align-items: center; border: 1px solid #e5e7eb; border-radius: 5px;">
                            <img class="img-thumbnail" alt="200x200"
                              style="object-fit: contain; object-position: center; width: 150px; height: 150px;"
                              width="200" src="{{ $product->main_photo_path }}/{{ $product->main_photo }}"
                              data-holder-rendered="true">
                          </div>
                        </td>
                        {{-- Edit/Delete Buttons Beginning --}}
                        <td class="px-6 py-2 text-sm" style="width: 130px;">
                          <form action="{{ Route('admin.product.edit', $product->id) }}" style="display: inline;">
                            <button type="submit" class="btn btn-warning waves-effect waves-light"><i
                                class="uil-edit"></i></button>
                          </form>
                          <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal"
                            data-bs-target="#Mark_{{ $product->id }}">
                            <i class="uil-trash"></i>
                          </button>
                        </td>
                        {{-- Edit/Delete Buttons End --}}

                        {{-- Modal Beginning --}}
                        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
                          aria-labelledby="Mark_{{ $product->id }}" id="Mark_{{ $product->id }}"
                          aria-hidden="false">
                          <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="myExtraLargeModalLabel">
                                  {{ $product->name }}
                                </h5>
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
                                        class="btn btn-danger btn-sm" wire:click="delete({{ $product->id }})">
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
                      @endif
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td class="px-6 py-4 text-sm whitespace-no-wrap" colspan="4">No Results Found
                    </td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div>
          {{-- Product Table End --}}


        </div>
      </div>
    </div>

  </div>
</div>
