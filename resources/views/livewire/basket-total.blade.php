<div>
  @if ($products)
    <div class="buy-info__title">
      {{ __('home.Ваш заказ') }}
    </div>
    <div class="buy-carousel">
      <div class="buy-carousel__arrows">
        @if (count($products) > 2)
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
        @endif
      </div>

      <div class="buy-carousel__items owl-carousel">
        @foreach ($products as $id => $product)
          <div class="buy-carousel__item">
            <div class="buy-carousel__img">
              @php
              $photo = \App\Models\ProductPhoto::where('product_id', $id)->first();
              @endphp
              <img src="{{ $photo->photo_path }}/{{ $photo->photo }}" alt="product">
            </div>
            <div class="buy-carousel__name">
              {{ $product['name'] }}
            </div>
            <a href="#"></a>
          </div>
        @endforeach
      </div>
    </div>
    @php
      foreach ($products as $key => $product) {
          $total_price += $product['price'] * $product['quantity'];
      }
    @endphp
    <ul class="buy-price">
      <li>
        <div class="buy-price__name">
          {{ __('home.Продукты') }}(2)
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
      <li>
        <div class="buy-price__name">
          {{ __('home.Доставка') }}
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
  @endif
</div>
