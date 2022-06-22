<div>
  {{-- {{dd($filteredProducts)}} --}}
  {{-- {{count($filteredProducts)}} --}}
  <div class="products-wrap">
    <div class="products-list">
      @if (!$category_id)
        @foreach ($filteredProducts as $product)
          <div class="products-item">
            <?php
            $optionArr = [];
            $product_options = \App\Models\ProductOption::where('product_id', $product->id)->get();
            foreach ($product_options as $product_option) {
                $option = \App\Models\Option::find($product_option->option_id);
                $option['price'] = $product_option->price;
                $optionArr[$option->name][] = $option;
            }
            ?>
            

            <div class="products-item__wrap">
              <div class="products-item__img">
                <img src="{{ $product['main_photo_path'] }}/{{ $product['main_photo'] }}" alt="Product">
              </div>
              <div class="products-item__btns">
                <span class="products-item__basket">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            
            {{-- @dd($product->product_options) --}}

            <!-- У КАЖДОГО ТОВАРА ДОЛЖНЫ БЫТЬ УНИКАЛЬНЫЕ АЙДИ У ЦВЕТОВ-->
            <div class="products-item__colors">
              @foreach($product->product_options as $product_color)
                @if($product_color->name == 'Color')
                <label for="{{$product->id}}.{{$product_color->value}}">
                  <input type="radio" name="{{$product->id}}" id="{{$product->id}}.{{$product_color->value}}">
                  <span>
                    <img src="/{{$product_color->photo_path}}/{{$product_color->photo}}" style="width: 40px; border-radius: 50%; margin-right: 16px;" alt="color">
                  </span>
                </label>
                @endif
              @endforeach
            </div>

            <div class="products-item__name">
              {{ $product->name }}
              {{-- (@foreach ($optionArr as $key => $value)
                {{ $key }}
                @foreach ($optionArr[$key] as $option)
                  {{ $option['value'] }}@if (!$loop->last)
                    /
                  @endif
                  @endforeach @if (!$loop->last)
                    , &nbsp;
                  @endif
                @endforeach) --}}
            </div>
            <div class="products-item__price">
              from ${{ $product->price }} USD
            </div>
            <a href="#" class="products-item__link"></a>
          </div>
        @endforeach
      @else
      {{-- @dd($filteredProducts) --}}
        @foreach ($filteredProducts as $key => $product)
          <div class="products-item">
            <?php
            $optionArr = [];
            $product_options = \App\Models\ProductOption::where('product_id', $product['id'])->get();
            foreach ($product_options as $product_option) {
                $option = \App\Models\Option::find($product_option->option_id);
                $option['price'] = $product_option->price;
                $optionArr[$option->name][] = $option;
            }
            ?>


            <div class="products-item__wrap">
              <div class="products-item__img">
                <img src="{{ $product['main_photo_path'] }}/{{ $product['main_photo'] }}" alt="Product">
              </div>
              <div class="products-item__btns">
                {{-- @livewire('add-to-cart', ['id' => $product['id']], key($product['id']))
                @livewire('add-to-wishlist', ['id' => $product['id']], key($product['id'])) --}}
              </div>
            </div>

            <!-- У КАЖДОГО ТОВАРА ДОЛЖНЫ БЫТЬ УНИКАЛЬНЫЕ АЙДИ У ЦВЕТОВ-->
            <div class="products-item__colors">
              <label for="product1-color1">
                <input type="radio" name="product1-color" id="product1-color1">
                <span style="background: #FCC7A0;"></span>
              </label>
              <label for="product1-color2">
                <input type="radio" name="product1-color" id="product1-color2">
                <span style="background: #455A83;"></span>
              </label>
              <label for="product1-color3">
                <input type="radio" name="product1-color" id="product1-color3">
                <span style="background: #FFFFFF;"></span>
              </label>
            </div>

            <div class="products-item__name">
              {{ $product['name'] }}
              {{-- (@foreach ($optionArr as $key => $value)
                {{ $key }}
                @foreach ($optionArr[$key] as $option)
                  {{ $option['value'] }}@if (!$loop->last)
                    /
                  @endif
                  @endforeach @if (!$loop->last)
                    , &nbsp;
                  @endif
                @endforeach) --}}
            </div>
            <div class="products-item__price">
              from ${{ $product['price'] }} USD
            </div>
            <a href="{{ Route('front.single-product', $product['id']) }}" class="products-item__link"></a>
          </div>
        @endforeach
      @endif
    </div>

    <ul class="products-pagination">
      <li>
        <a href="#" class="current">
          1
        </a>
      </li>
      <li>
        <a href="#">
          2
        </a>
      </li>
      <li>
        <a href="#">
          3
        </a>
      </li>
      <li>
        <a href="#">
          4
        </a>
      </li>
    </ul>
  </div>
</div>
