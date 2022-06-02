<div style="background-color: white">
  <div class="card">
    <div class="card-body">
      <div class="row">

        {{-- Images Beginning --}}
        <div class="col-xl-5">
          <div class="product-detail">
            <div class="row">

              {{-- Side Small Images Beginning --}}
              <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="product-1-tab" data-bs-toggle="pill" href="#product-1" role="tab">
                    <img src="/{{ $product->main_photo_path }}/{{ $product->main_photo }}" alt=""
                      class="img-fluid mx-auto d-block tab-img rounded">
                  </a>
                  @if ($product_photos)
                    @foreach ($product_photos as $product_photo)
                      <a class="nav-link" id="product-2-tab" data-bs-toggle="pill"
                        href="#product-{{ $product_photo->id }}" role="tab">
                        <img src="/{{ $product_photo->photo_path }}/{{ $product_photo->photo }}" alt=""
                          class="img-fluid mx-auto d-block tab-img rounded">
                      </a>
                    @endforeach
                  @endif
                </div>
              </div>
              {{-- Side Small Images End --}}

              {{-- Selected Image Beginning --}}
              <div class="col-9">
                <div class="tab-content position-relative" id="v-pills-tabContent" style="background-color: white;">
                  <div class="tab-pane fade show active" id="product-1" role="tabpanel" style="height: 350px;">
                    <div class="product-img" style="height: 100%;">
                      <img src="/{{ $product->main_photo_path }}/{{ $product->main_photo }}" alt=""
                        class="img-fluid mx-auto d-block"
                        data-zoom="/{{ $product->main_photo_path }}/{{ $product->main_photo }}"
                        style="height: 100%;">
                    </div>
                  </div>
                  @if ($product_photos)
                    @foreach ($product_photos as $product_photo)
                      <div class="tab-pane fade" id="product-{{ $product_photo->id }}" role="tabpanel">
                        <div class="product-img">
                          <img src="/{{ $product_photo->photo_path }}/{{ $product_photo->photo }}" alt=""
                            class="img-fluid mx-auto d-block">
                        </div>
                      </div>
                    @endforeach
                  @endif
                  @if ($product_options)
                    @foreach ($product_options as $product_option)
                      @foreach (\App\Models\ProductPhoto::where('product_option_id', $product_option->id)->get() as $product_photo)
                        <div class="tab-pane fade" id="product-{{ $product_photo->id }}" role="tabpanel">
                          <div class="product-img">
                            <img src="/{{ $product_photo->photo_path }}/{{ $product_photo->photo }}" alt=""
                              class="img-fluid mx-auto d-block">
                          </div>
                        </div>
                      @endforeach
                    @endforeach
                  @endif
                </div>
              </div>
              {{-- Selected Image End --}}

            </div>


            {{-- Color Images Beginning --}}
            @if ($product_options)
              <div class="row">
                Other Images
                <div class="nav nav-pills">
                  @foreach ($product_options as $product_option)
                    @foreach (\App\Models\ProductPhoto::where('product_option_id', $product_option->id)->get() as $product_photo)
                      <a class="col-3 nav-link" id="product-2-tab" data-bs-toggle="pill"
                        href="#product-{{ $product_photo->id }}" role="tab">
                        <img src="/{{ $product_photo->photo_path }}/{{ $product_photo->photo }}" alt=""
                          class="img-fluid mx-auto d-block tab-img rounded">
                      </a>
                    @endforeach
                  @endforeach
                </div>
              </div>
            @endif
            {{-- Color Images End --}}

          </div>
        </div>
        {{-- Images End --}}

        {{-- Right Side Beginning --}}
        <div class="col-xl-7">
          <div class="mt-4 mt-xl-3 ps-xl-4">
            <h5 class="font-size-14"><a href="ecommerce-product-detail.html#" class="text-muted">
                @if ($category)
                  {{ $category->name }}
                @endif
              </a></h5>
            <h4 class="font-size-20 mb-3">{{ $product->name }}</h4>

            <div class="text-muted">
              <span class="badge bg-success font-size-14 me-1"><i class="mdi mdi-star"></i> 4.2</span> 234 Reviews
            </div>

            {{-- Price --}}
            <h5 class="mt-4 pt-2">${{ $product->price }} USD</h5>

            <p class="mt-4 text-muted">If several languages coalesce, the grammar of the resulting language is more
              simple and regular</p>

            <div>

              {{-- Details Beginning --}}
              <div class="row">
                <div class="col-md-6">
                  <div class="mt-3">
                    <h5 class="font-size-14">Specification :</h5>
                    <ul class="list-unstyled product-desc-list text-muted">
                      @foreach ($optionArr as $name => $value)
                        <li><i class="mdi mdi-circle-medium me-1 align-middle"></i>{{ $name }}:
                          @foreach ($value as $k => $v)
                            <span class="badge badge-primary text-muted mr-3">{{ $v['value'] }} -
                              ${{ $v['price'] }} USD</span>
                          @endforeach
                        </li>
                      @endforeach
                    </ul>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mt-3">
                    <h5 class="font-size-14">In Stock:</h5>
                    <ul class="list-unstyled product-desc-list text-muted">
                      <li><i class="uil-box text-primary me-1 font-size-16"></i>12</li>
                    </ul>
                  </div>
                </div>
              </div>
              {{-- Details End --}}

              {{-- <div class="row">
                <div class="col-lg-7 col-sm-8">
                  <div class="product-desc-color mt-3">
                    <h5 class="font-size-14">Colors :</h5>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="ecommerce-product-detail.html#" class="active" data-bs-toggle="tooltip"
                          data-bs-placement="top" title="Gray">
                          <div class="product-color-item">
                            <img src="/assets/images/product/img-1.png" alt="" class="avatar-md">
                          </div>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="ecommerce-product-detail.html#" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="Dark">
                          <div class="product-color-item">
                            <img src="/assets/images/product/img-2.png" alt="" class="avatar-md">
                          </div>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="ecommerce-product-detail.html#" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="Purple">
                          <div class="product-color-item">
                            <img src="/assets/images/product/img-3.png" alt="" class="avatar-md">
                          </div>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="ecommerce-product-detail.html#" class="text-primary border-0 p-1">
                          2 + Colors
                        </a>
                      </li>
                    </ul>

                  </div>
                </div>

                <div class="col-lg-5 col-sm-4">
                  <div class="mt-3">
                    <h5 class="font-size-14 mb-3">Select Sizes :</h5>

                    <div class="d-inline-flex">
                      <select class="form-select w-sm">
                        <option value="1">3</option>
                        <option value="2">4</option>
                        <option value="3">5</option>
                        <option value="4">6</option>
                        <option value="5" selected>7</option>
                        <option value="6">8</option>
                        <option value="7">9</option>
                        <option value="8">10</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div> --}}

            </div>
          </div>
        </div>
        {{-- Right Side End --}}
      </div>
    </div>
  </div>
</div>
