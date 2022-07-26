<div class="buy-basket__total" >
  <div class="buy-basket__total-wrap" >
    <div class="buy-basket__title">
      {{ __('home.Продукты') }}({{ count($products) }})
    </div>
    <div class="buy-carousel__items-1" style="display: flex; align-items:center; justify-content:start; overflow: hidden; flex-wrap: wrap;">
      @if (!empty($products))
        @foreach ($products as $id => $product)
          <div class="buy-carousel__item" style="margin-top: 15px">
            <div class="buy-carousel__img" style="display: flex; justify-content: center;">
              @php
                $photo = \App\Models\ProductPhoto::where('product_id', $id)->first();
              @endphp
              <img src="{{ $photo->photo_path }}/{{ $photo->photo }}" alt="product">
            </div>
          </div>
        @endforeach
      @endif
    </div>
  </div>
  
  <div class="buy-basket__total-wrap">
    <div class="buy-basket__title">
      {{ __('home.Ваш заказ') }}
    </div>
    <ul class="buy-price">
      <li>
        <div class="buy-price__name">
          {{ __('home.Продукты') }}({{ count($products) }})
        </div>
        <div class="buy-price__value">
          ${{ $total_price }} USD
        </div>
      </li>
      <li>
        <div class="buy-price__name">
          {{ __('home.Скидка') }}
        </div>
        <div class="buy-price__value">
          0 сум
        </div>
      </li>
    </ul>
    <div class="buy-total">
      {{ __('home.Всего') }}
      <span>${{ $total_price }} USD</span>
    </div>
  </div>
</div>
