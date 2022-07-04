<div class="buy-basket__total">
  <div class="buy-basket__total-wrap">
    <div class="buy-basket__title">
      {{ __('home.Продукты') }}({{ count($products) }})
    </div>
    <div class="buy-carousel">
      @if (count($products) > 5)
        <div class="buy-carousel__arrows">
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
      <div class="buy-carousel__items owl-carousel">
        @if (!empty($products))
          @foreach ($products as $id => $product)
            <div class="buy-carousel__item">
              <div class="buy-carousel__img">
                @php
                  $photo = \App\Models\ProductPhoto::where('product_id', $id)->first();
                @endphp
                <img src="{{ $photo->photo_path }}/{{ $photo->photo }}" alt="product">
              </div>
              <div class="buy-carousel__name">
                MacBook Air MacBook Air MacBook Air
              </div>
              <a href="#"></a>
            </div>
          @endforeach
        @endif
      </div>
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
