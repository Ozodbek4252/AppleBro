@extends('layouts.front')

@section('content')
  <section class="products">
    <div class="container">

      <div class="products-carousel">

        <!-- ЕСЛИ МНОГО ТОВАРОВ ТО СТРЕЛКИ -->
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

        <div class="products-carousel__items owl-carousel">
          <div class="products-carousel__item">
            <div class="products-carousel__img">
              <img src="img/apple1.png" alt="product">
            </div>
            <div class="products-carousel__name">
              MacBook Air
            </div>
            <a href="#"></a>
          </div>
          <div class="products-carousel__item">
            <div class="products-carousel__img">
              <img src="img/apple1.png" alt="product">
            </div>
            <div class="products-carousel__name">
              MacBook Air
            </div>
            <a href="#"></a>
          </div>
          <div class="products-carousel__item">
            <div class="products-carousel__img">
              <img src="img/apple1.png" alt="product">
            </div>
            <div class="products-carousel__name">
              MacBook Air
            </div>
            <a href="#"></a>
          </div>
          <div class="products-carousel__item">
            <div class="products-carousel__img">
              <img src="img/apple1.png" alt="product">
            </div>
            <div class="products-carousel__name">
              MacBook Air
            </div>
            <a href="#"></a>
          </div>
          <div class="products-carousel__item">
            <div class="products-carousel__img">
              <img src="img/apple1.png" alt="product">
            </div>
            <div class="products-carousel__name">
              MacBook Air
            </div>
            <a href="#"></a>
          </div>
          <div class="products-carousel__item">
            <div class="products-carousel__img">
              <img src="img/apple1.png" alt="product">
            </div>
            <div class="products-carousel__name">
              MacBook Air
            </div>
            <a href="#"></a>
          </div>
          <div class="products-carousel__item">
            <div class="products-carousel__img">
              <img src="img/apple1.png" alt="product">
            </div>
            <div class="products-carousel__name">
              MacBook Air
            </div>
            <a href="#"></a>
          </div>
          <div class="products-carousel__item">
            <div class="products-carousel__img">
              <img src="img/apple1.png" alt="product">
            </div>
            <div class="products-carousel__name">
              MacBook Air
            </div>
            <a href="#"></a>
          </div>
        </div>

      </div>


      <div class="breadcrumbs">
        <a href="{{ Route('home') }}">Home</a>
        <a href="#">Mac</a>
        <a href="#" class="current">Mac Book Air</a>
      </div>

      <div class="products-main">

        <div class="products-filter__open">
          {{ __('home.Фильтр') }} <img src="img/filter.svg" alt="ico">
        </div>

        <!-- ФИЛЬТР -->
        @livewire('front.all-products.filter', ['category_id' => $category_id])


      </div>

    </div>
  </section>
@endsection
