@extends('layouts.front')

@section('content')
  <section class="main">
    <div class="main-carousel owl-carousel">
      {{-- <div class="main-carousel__item main-carousel__item-video">
        <div class="container">
          <div class="main-carousel__content">
            <h2 class="main-carousel__title big-title">
              MacBook Pro 16-inch
            </h2>
            <div class="main-carousel__text">
              Cамый мощный MacBook Pro в истории Cамый мощный MacBook Pro в истории. Cамый мощный MacBook Pro в истории..
            </div>
            <a href="#" class="main-carousel__btn btn">
              {{ __('home.Купить') }}
            </a>
          </div>
        </div>
        <div class="main-carousel__video">
          <video preload="auto" muted="muted" autoplay loop playisinline webkit-playisinline>
            <source src="/video/video.mp4" type="video/mp4">
            Ваш браузер не поддерживает HTML5 видео.
          </video>
        </div>
      </div> --}}
      @foreach ($banners as $banner)
        @if ($banner->type == 'slider')
          <div class="main-carousel__item">
            <div class="container">
              <div class="main-carousel__content">
                <?php 
                  $slider_name = 'name_'.$lang;
                  $slider_description = 'desc_'.$lang;
                  ?>
                <h2 class="main-carousel__title big-title">
                  {{$banner->$slider_name}}
                </h2>
                <div class="main-carousel__text">
                  {{$banner->$slider_description}}
                </div>
                <a href="{{ Route('front.single-product', $banner->product_slug) }}" class="main-carousel__btn btn">
                  {{ __('home.Купить') }}
                </a>
              </div>
            </div>
            <div class="main-carousel__img">
              <img src="/{{$banner->image}}" alt="Slider">
            </div>
            <div class="main-carousel__img main-carousel__img-mobi">
              <img src="/{{$banner->image_mobile}}" alt="Slider">
            </div>
          </div>
        @endif
      @endforeach
      {{-- <div class="main-carousel__item">
        <div class="container">
          <div class="main-carousel__content">
            <h2 class="main-carousel__title big-title">
              MacBook Pro 16-inch
            </h2>
            <div class="main-carousel__text">
              Cамый мощный MacBook Pro в истории Cамый мощный MacBook Pro в истории. Cамый мощный MacBook Pro в истории..
            </div>
            <a href="#" class="main-carousel__btn btn">
              {{ __('home.Купить') }}
            </a>
          </div>
        </div>
        <div class="main-carousel__img">
          <img src="/img/slider.png" alt="Slider">
        </div>
        <div class="main-carousel__img main-carousel__img-mobi">
          <img src="/img/slider-mobile.png" alt="Slider">
        </div>
      </div> --}}

      <!-- ЕСЛИ ВИДЕО ЕСТЬ ТО КЛАСС main-carousel__item-video -->



      <div class="main-carousel__item">
        <div class="container">
          <div class="main-carousel__content">
            <h2 class="main-carousel__title big-title">
              MacBook Pro 16-inch
            </h2>
            <div class="main-carousel__text">
              Cамый мощный MacBook Pro в истории Cамый мощный MacBook Pro в истории. Cамый мощный MacBook Pro в истории..
            </div>
            <a href="#" class="main-carousel__btn btn">
              {{ __('home.Купить') }}
            </a>
          </div>
        </div>
        <div class="main-carousel__img">
          <img src="/img/slider.png" alt="Slider">
        </div>
        <div class="main-carousel__img main-carousel__img-mobi">
          <img src="/img/slider-mobile.png" alt="Slider">
        </div>
      </div>

    </div>
    <div class="main-arrows">
      <div class="container">
        <span class="arrow-left">
          <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30.2539 34.5113L21.7433 26.0006L30.2539 17.49" stroke="#0967C5" stroke-width="1.5"
              stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </span>
        <span class="arrow-right">
          <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.7461 34.5113L30.2567 26.0006L21.7461 17.49" stroke="#0967C5" stroke-width="1.5"
              stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </span>
      </div>
    </div>
  </section>



  <!-- POPULAR -->
  <section class="popular">
    <div class="container">
      <h2 class="popular__title big-title">
        {{ __('home.Популярные категории') }}
      </h2>
      <div class="popular-content">
        @foreach ($categories as $category)
          <div class="popular-item">
            <div class="popular-item__title">
              {{ $category->name }}
            </div>
            <?php
            $product = \App\Models\Product::where('category_id', $category->id)
                ->orderBy('price', 'asc')
                ->first();
            ?>
            @if ($product)
              <div class="popular-item__price">
                от {{ $product->price }} USD
              </div>
              <div class="popular-item__img">
                <img src="{{ $product->main_photo_path }}/{{ $product->main_photo }}" alt="popular">
              </div>
            @endif
            <a href="{{ Route('front.all-products', $category->id) }}" class="popular-item__link"></a>
          </div>
        @endforeach
      </div>
    </div>
  </section>


  <!-- NEW -->
  <section class="new">
    <div class="container">
      <h2 class="new__title medium-title">
        {{ __('home.Новое поступление') }}
      </h2>
      <div class="new-content">

        @foreach ($newest_products as $newest_product)
          <div class="new-item">
            <div class="new-item__wrap">
              <div class="new-item__tag">
                {{ __('home.NEW') }}
              </div>
              <div class="new-item__img">
                <img src="{{ $newest_product->main_photo_path }}/{{ $newest_product->main_photo }}" alt="Product">
              </div>
              <div class="new-item__btns" onclick="refreshLivewire()">
                @livewire('add-to-cart', ['id' => $newest_product->id])
                @livewire('add-to-wishlist', ['id' => $newest_product->id])
              </div>
            </div>
            <div class="new-item__name">

            </div>

            <div class="new-item__price" style="margin-bottom: 5px; ">

              @php
                $arr = [];
                $details_price = 0;
              @endphp
              <li>{{ $newest_product->name }}</li>
              @foreach ($newest_product->product_options as $product_option)
                @php
                  if (!array_key_exists($product_option->name, $arr)) {
                      $arr[$product_option->name][] = $product_option->value;
                      $details_price += \App\Models\ProductOption::where('product_id', $product_option->pivot->product_id)
                          ->where('option_id', $product_option->pivot->option_id)
                          ->first()->price;
                  }
                @endphp
              @endforeach
              @foreach ($arr as $key => $value)
                {{ $value[0] }} @if (!$loop->last)
                  /
                @endif
              @endforeach
            </div>

            <div class="new-item__price">
              <strong>${{ $newest_product->price + $details_price }} USD</strong>
            </div>

            <a href="{{ Route('front.single-product', $newest_product->slug) }}" class="new-item__link"></a>
          </div>
        @endforeach

      </div>
    </div>
  </section>




  <!-- BRANDS -->
  <section class="brands">
    <div class="container">
      <h2 class="brands__title medium-title">
        {{ __('home.Бренды') }}
      </h2>
      <div class="brands-content">
        <a href="{{ Route('front.all-products', 18) }}" class="brands-item">
          <img src="/img/brand1.png" alt="Brand">
        </a>
        <a href="{{ Route('front.all-products', 19) }}" class="brands-item">
          <img src="/img/brand2.png" alt="Brand">
        </a>
        <a href="{{ Route('front.all-products', 20) }}" class="brands-item">
          <img src="/img/brand3.png" alt="Brand">
        </a>
      </div>
    </div>
  </section>

  <!-- MAJOR -->
  <section class="major">
    @foreach ($banners as $banner)
      @if ($banner->type == 'middle')
        <div class="container">
          <div class="major-wrap">
            <div class="major__name big-title">
              <?php $middle_name = 'name_' . $lang; ?>
              {{ $banner->$middle_name }}
            </div>
            <div class="major__price">
              от 11.800.000 Сум
            </div>
            <div class="major__img">
              <img src="/{{ $banner->image }}" alt="Main Product">
            </div>
            <a href="{{ Route('front.single-product', $banner->product_slug) }}" class="major__link"></a>
          </div>
        </div>
      @endif
    @endforeach
  </section>

  <!-- BRANDS-PRODUCT -->
  <section class="brands-product">
    <div class="container">
      <h2 class="brands-product__title medium-title">
        Apple
      </h2>
      <div class="brands-product__content">
        @foreach ($apple as $key => $brand_category)
          <div class="brands-product__item">
            <div class="brands-product__name">
              {{ $brand_category->name }}
              @php
                $product = \App\Models\Product::where('category_id', $brand_category->id)->first();
                $num_of_products = count($product->get());
              @endphp
            </div>
            <div class="brands-product__img">
              <img src="{{ $product->main_photo_path }}/{{ $product->main_photo }}" alt="Apple">
            </div>
            <a href="{{ Route('front.all-products', $brand_category->id) }}" class="brands-product__link"></a>
          </div>
        @endforeach
        <div class="brands-product__item">
          <div class="brands-product__name">
            Others
          </div>
          <div class="brands-product__other">
            {{ $num_of_products }}+
          </div>
          <a href="{{ Route('front.all-products', $brand_category->id) }}" class="brands-product__link"></a>
        </div>
      </div>
    </div>
  </section>

  <!-- BRANDS-PRODUCT -->
  <section class="brands-product">
    <div class="container">
      <h2 class="brands-product__title medium-title">
        Samsung
      </h2>
      <div class="brands-product__content">
        @foreach ($samsung as $key => $brand_category)
          <div class="brands-product__item">
            <div class="brands-product__name">
              {{ $brand_category->name }}
              @php
                $product = \App\Models\Product::where('category_id', $brand_category->id);
                $num_of_products = count($product->get());
              @endphp
            </div>
            <div class="brands-product__img">
              <img src="{{ $product->first()->main_photo_path }}/{{ $product->first()->main_photo }}"
                alt="Samsung">
            </div>
            <a href="{{ Route('front.all-products', $brand_category->id) }}" class="brands-product__link"></a>
          </div>
        @endforeach
        <div class="brands-product__item">
          <div class="brands-product__name">
            {{ __('home.Others') }}
          </div>
          <div class="brands-product__other">
            {{ $num_of_products }}+
          </div>
          <a href="{{ Route('front.all-products', $brand_category->id) }}" class="brands-product__link"></a>
        </div>

      </div>
    </div>
  </section>

  <!-- BRANDS-PRODUCT -->
  <section class="brands-product">
    <div class="container">
      <h2 class="brands-product__title medium-title">
        Xiaomi
      </h2>
      <div class="brands-product__content">
        @foreach ($xiaomi as $key => $brand_category)
          <div class="brands-product__item">
            <div class="brands-product__name">
              {{ $brand_category->name }}
              @php
                $product = \App\Models\Product::where('category_id', $brand_category->id);
                $num_of_products = count($product->get());
              @endphp
            </div>
            <div class="brands-product__img">
              <img src="{{ $product->first()->main_photo_path }}/{{ $product->first()->main_photo }}"
                alt="Xiaomi">
            </div>
            <a href="{{ Route('front.all-products', $brand_category->id) }}" class="brands-product__link"></a>
          </div>
        @endforeach
        <div class="brands-product__item">
          <div class="brands-product__name">
            Others
          </div>
          <div class="brands-product__other">
            {{ $num_of_products }}+
          </div>
          <a href="{{ Route('front.all-products', $brand_category->id) }}" class="brands-product__link"></a>
        </div>
      </div>
    </div>
  </section>

  <!-- BANNERS -->
  <section class="banners">
    <div class="container">
      <div class="banners-content">
        @foreach ($banners as $banner)
          @if ($banner->type == 'small')
            <a href="{{ Route('front.single-product', $banner->product_slug) }}" class="banners-item">
              <img src="/{{ $banner->image }}" alt="Banner">
            </a>
          @endif
        @endforeach
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="services">
    <div class="container">
      <h2 class="services__title medium-title">
        {{ __('home.Популярные услуги') }}
      </h2>
      <div class="services-content">
        <div class="services-item">
          <div class="services-item__ico">
            <img src="img/services1.png" alt="ico">
          </div>
          <div class="services-item__wrap">
            <div class="services-item__title">
              {{ __('home.Trade-in') }}
            </div>
            <div class="services-item__text">
              {{ __('home.Возврат и обмен в течении 14 дней, согласно Закону UZB о защите прав потребителей') }}
            </div>
          </div>
        </div>
        <div class="services-item">
          <div class="services-item__ico">
            <img src="img/services2.png" alt="ico">
          </div>
          <div class="services-item__wrap">
            <div class="services-item__title">
              {{ __('home.Гарантия') }}
            </div>
            <div class="services-item__text">
              {{ __('home.Мы предоставляем гарантию от трех месяцев от магазина, а также можем расширить её до трех лет') }}
            </div>
          </div>
        </div>
        <div class="services-item">
          <div class="services-item__ico">
            <img src="img/services3.png" alt="ico">
          </div>
          <div class="services-item__wrap">
            <div class="services-item__title">
              {{ __('home.Гибкая оплата') }}
            </div>
            <div class="services-item__text">
              {{ __('home.Оплачивайте так, как Вам удобно: Наличкой в магазине, терминалом, переводом на карту') }}
            </div>
          </div>
        </div>
        <div class="services-item">
          <div class="services-item__ico">
            <img src="img/services4.png" alt="ico">
          </div>
          <div class="services-item__wrap">
            <div class="services-item__title">
              {{ __('home.Быстрая доставка') }}
            </div>
            <div class="services-item__text">
              {{ __('home.Мы доставляем заказы в кратчайшие сроки по всей территории Узбекистана') }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
