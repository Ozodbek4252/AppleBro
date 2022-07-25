@extends('layouts.front')

@section('content')
  <section class="products">
    <div class="container">

      <div class="products-carousel">

        <!-- ЕСЛИ МНОГО ТОВАРОВ ТО СТРЕЛКИ -->
        @if (count($suggested_categories) > 6)
          <div class="products-carousel__arrows">
            <span class="arrow-left">
              <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.1406 12.28L17.9206 24.03L30.1406 35.78" stroke="#0967C5" stroke-width="1.5"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
            <span class="arrow-right">
              <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.8594 35.72L30.0794 23.97L17.8594 12.22" stroke="#0967C5" stroke-width="1.5"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
          </div>
        @endif

        <div class="products-carousel__items owl-carousel">

          @foreach ($suggested_categories as $suggested_category)
            {{-- for grandchild --}}
            @if ($status == 'grandchld')
              <a href="{{ Route('front.all-products', $suggested_category->id) }}" style="color: black;">
                <div class="products-carousel__item">
                  <div class="products-carousel__img">
                    <img
                      src="{{ $suggested_category->products->first()->main_photo_path }}/{{ $suggested_category->products->first()->main_photo }}"
                      alt="product">
                  </div>
                  <div class="products-carousel__name">
                    {{ $suggested_category->name }}
                  </div>
                </div>
              </a>
            @elseif($status == 'child' && $suggested_category->categories->first()?->products)
              {{-- for child --}}
              <a href="{{ Route('front.all-products', $suggested_category->id) }}" style="color: black;">
                <div class="products-carousel__item">
                  <div class="products-carousel__img">
                    <img
                      src="{{ $suggested_category->categories->first()?->products->first()->main_photo_path }}/{{ $suggested_category->categories->first()?->products->first()->main_photo }}"
                      alt="product">
                  </div>
                  <div class="products-carousel__name">
                    {{ $suggested_category->name }}
                  </div>
                </div>
              </a>
            @elseif($status == 'parent' && $suggested_category->categories->first()?->products)
              {{-- for parent --}}
              <a href="{{ Route('front.all-products', $suggested_category->id) }}" style="color: black;">
                <div class="products-carousel__item">
                  <div class="products-carousel__img">
                    <img
                      src="{{ $suggested_category->categories->first()?->products->first()?->main_photo_path }}/{{ $suggested_category->categories->first()?->products->first()?->main_photo }}"
                      alt="product">
                  </div>
                  <div class="products-carousel__name">
                    {{ $suggested_category->name }}
                  </div>
                </div>
            @endif
          @endforeach
        </div>

      </div>


      <div class="breadcrumbs">
        <a href="{{ Route('home') }}">Home</a>
        @if($main_category)
          @if ($main_category->category)
            <a
              href="{{ Route('front.all-products', $main_category->category->id) }}">{{ $main_category->category->name }}</a>
            <a href="{{ Route('front.all-products', $main_category->id) }}" class="current">{{ $main_category->name }}</a>
          @else
            <a href="{{ Route('front.all-products', $main_category->id) }}" class="current">{{ $main_category->name }}</a>
          @endif
        @endif
      </div>

      <div class="products-main">

        <div class="products-filter__open">
          {{ __('home.Фильтр') }} <img src="img/filter.svg" alt="ico">
        </div>

        {{-- @livewire('front.all-products.products', ['filteredProduct' => $filteredProducts]) --}}
        {{-- @livewire('front.all-products.filter', ['category_id' => $category_id]) --}}

        <div style="width: 100%;">
          <div class="products-wrap">
            <div class="products-list">
              @if (!$category_id)
                @foreach ($products as $product)
                  <div class="products-item">
                    <div class="products-item__wrap">
                      <div class="products-item__img">
                        <img src="{{ $product['main_photo_path'] }}/{{ $product['main_photo'] }}" alt="Product">
                      </div>
                      <div class="products-item__btns">
                        <span class="products-item__basket">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.96905 6.625L5.30205 3.625H3.37305" stroke="#7B7B7B" stroke-width="1.5"
                              stroke-linecap="round" stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M7.73075 14.835L5.96875 6.625H18.6267C19.2638 6.625 19.7377 7.212 19.6047 7.835L18.1027 14.835C18.0037 15.296 17.5968 15.625 17.1248 15.625H8.70775C8.23675 15.625 7.82975 15.296 7.73075 14.835Z"
                              stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                              d="M17.4648 19.25C17.2578 19.25 17.0898 19.418 17.0918 19.625C17.0918 19.832 17.2598 20 17.4668 20C17.6738 20 17.8418 19.832 17.8418 19.625C17.8408 19.418 17.6728 19.25 17.4648 19.25"
                              stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                              d="M8.85593 19.25C8.64893 19.25 8.48093 19.418 8.48293 19.625C8.48193 19.832 8.64993 20 8.85693 20C9.06393 20 9.23193 19.832 9.23193 19.625C9.23193 19.418 9.06393 19.25 8.85593 19.25"
                              stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </span>
                        @livewire('add-to-wishlist', ['id' => $product->id])
                      </div>
                    </div>
                    @php
                      $product = [];
                      $product_options = \App\Models\ProductOption::where('product_id', $id)->get();
                      foreach ($product_options as $product_option) {
                          $option = \App\Models\Option::find($product_option->option_id);
                          $option['price'] = $product_option->price;
                          $optionArr[$option->name][] = $option;
                      }
                      $photo = \App\Models\ProductPhoto::where('product_id', $id)->first();
                    @endphp
                    @foreach ($product['options'] as $name => $option_id)
                      <div class="buy-basket__desc">
                        {{ $name }}:
                        <label for="product-color1">
                          <span>{{ \App\Models\Option::find($option_id)->value }}</span>
                        </label>
                      </div>
                    @endforeach
                    <!-- У КАЖДОГО ТОВАРА ДОЛЖНЫ БЫТЬ УНИКАЛЬНЫЕ АЙДИ У ЦВЕТОВ-->
                    <div class="products-item__colors">
                      @foreach ($product->product_options as $product_color)
                        @if ($product_color->name == 'Color')
                          <label for="{{ $product->id }}.{{ $product_color->value }}">
                            <input type="radio" name="{{ $product->id }}"
                              id="{{ $product->id }}.{{ $product_color->value }}">
                            <span>
                              <img src="/{{ $product_color->photo_path }}/{{ $product_color->photo }}"
                                style="width: 40px; border-radius: 50%; margin-right: 16px;" alt="color">
                            </span>
                          </label>
                        @endif
                      @endforeach
                    </div>

                    <div class="products-item__name">
                      {{ $product->name }}
                    </div>
                    <div class="products-item__price">
                      from ${{ $product->price }} USD
                    </div>
                    <a href="{{ Route('front.single-product', $product['slug']) }}" class="products-item__link"></a>
                  </div>
                @endforeach
              @else
                @foreach ($products as $key => $product)
                  <div class="products-item">
                    @php
                      $arr = [];
                      $color = [];
                      $details_price = 0;
                    @endphp
                    @foreach ($product['product_options'] as $product_option)
                      @php
                        if ($product_option['name'] == 'Color') {
                            $color[] = $product_option;
                        }
                        
                        if (!array_key_exists($product_option->name, $arr)) {
                            $arr[$product_option->name][] = $product_option->value;
                            $details_price += \App\Models\ProductOption::where('product_id', $product_option->pivot->product_id)
                                ->where('option_id', $product_option->pivot->option_id)
                                ->first()->price;
                        }
                      @endphp
                    @endforeach
                    <div class="products-item__wrap">
                      <div class="products-item__img">
                        <img src="{{ $product->main_photo_path }}/{{ $product->main_photo }}" alt="Product">
                      </div>
                      <div class="products-item__btns">
                        @livewire('add-to-cart', ['id' => $product->id])
                        {{-- @livewire('add-to-wishlist', ['id' => $product->id]) --}}
                      </div>
                    </div>
                    <div class="products-item__colors">
                      @foreach ($color as $color_each)
                        <label for="{{ $product->id }}.{{ $color_each->id }}">
                          {{-- <input type="radio" name="{{ $product->id }}" id="{{ $product->id }}.{{ $color_each->id }}"> --}}
                          <span>
                            <img src="{{ $color_each->photo_path }}/{{ $color_each->photo }}" alt="img"
                              style="width: 40px; border-radius: 50%; cursor: default">
                          </span>
                        </label>
                      @endforeach
                    </div>
                    <div class="products-item__name">
                      @foreach ($arr as $key => $value)
                        {{ $value[0] }} @if (!$loop->last)
                          /
                        @endif
                      @endforeach
                    </div>
                    <div class="products-item__price">
                      ${{ $details_price + $product->price }} USD
                    </div>
                    <a href="{{ Route('front.single-product', $product['slug']) }}" class="products-item__link"></a>
                  </div>
                @endforeach
              @endif
            </div>

            {{ $products->links() }}
          </div>
        </div>

      </div>

    </div>
  </section>
@endsection
