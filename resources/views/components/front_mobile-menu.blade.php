<div class="mobile-menu">
  <div class="container">
    <div class="mobile-menu__head">
      <div class="mobile-menu__close">
        <img src="/img/close.svg" alt="ico">
      </div>
      <div class="mobile-menu__logo">
        <a href="index.html">
          <img src="/img/logo.svg" alt="AppleBro">
        </a>
      </div>
      <div class="mobile-menu__icons">
        <a href="#" class="basket-open">
          <img src="/img/basket.svg" alt="ico">
          <span>2</span>
        </a>
      </div>
    </div>
    <div class="mobile-menu__search">
      @livewire('front.search')
    </div>
    <ul class="mobile-menu__menu">
      @foreach(\App\Models\Category::where('category_id', '!=', null)->with('products')->get() as $category)
      <li class="mobile-menu__item">
        <span>
          {{$category->name}}
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 6L8 11L3 6" stroke="white" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </span>
        <ul class="mobile-menu__submenu">
          @foreach($category->products as $product)
            <li>
              <a href="{{ route('front.single-product', $product->slug) }}">
                {{$product->name}}
              </a>
            </li>
          @endforeach
        </ul>
      </li>
      @endforeach

      
      {{-- <li class="mobile-menu__item">
        <span>
          Mac
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 6L8 11L3 6" stroke="white" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </span>
        <ul class="mobile-menu__submenu">
          <li>
            <a href="#">
              Mac
            </a>
          </li>
          <li>
            <a href="#">
              Mac X
            </a>
          </li>
          <li>
            <a href="#">
              Mac X
            </a>
          </li>
          <li>
            <a href="#">
              Mac X
            </a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu__item">
        <span>
          iPad
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 6L8 11L3 6" stroke="white" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </span>
        <ul class="mobile-menu__submenu">
          <li>
            <a href="#">
              iPad
            </a>
          </li>
          <li>
            <a href="#">
              iPad X
            </a>
          </li>
          <li>
            <a href="#">
              iPad X
            </a>
          </li>
          <li>
            <a href="#">
              iPad X
            </a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu__item">
        <span>
          Apple Watch
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 6L8 11L3 6" stroke="white" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </span>
        <ul class="mobile-menu__submenu">
          <li>
            <a href="#">
              Apple Watch
            </a>
          </li>
          <li>
            <a href="#">
              Apple Watch X
            </a>
          </li>
          <li>
            <a href="#">
              Apple Watch X
            </a>
          </li>
          <li>
            <a href="#">
              Apple Watch X
            </a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu__item">
        <span>
          AirPods
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 6L8 11L3 6" stroke="white" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </span>
        <ul class="mobile-menu__submenu">
          <li>
            <a href="#">
              AirPods
            </a>
          </li>
          <li>
            <a href="#">
              AirPods X
            </a>
          </li>
          <li>
            <a href="#">
              AirPods X
            </a>
          </li>
          <li>
            <a href="#">
              AirPods X
            </a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu__item">
        <span>
          {{ __('home.????????????????????') }}
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 6L8 11L3 6" stroke="white" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </span>
        <ul class="mobile-menu__submenu">
          <li>
            <a href="#">
              {{ __('home.????????????????????') }}
            </a>
          </li>
          <li>
            <a href="#">
              {{ __('home.????????????????????') }} X
            </a>
          </li>
          <li>
            <a href="#">
              {{ __('home.????????????????????') }} X
            </a>
          </li>
          <li>
            <a href="#">
              {{ __('home.????????????????????') }} X
            </a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu__item">
        <span>
          {{ __('home.????????????') }}
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 6L8 11L3 6" stroke="white" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </span>
        <ul class="mobile-menu__submenu">
          <li>
            <a href="#">
              {{ __('home.????????????') }}
            </a>
          </li>
          <li>
            <a href="#">
              {{ __('home.????????????') }} X
            </a>
          </li>
          <li>
            <a href="#">
              {{ __('home.????????????') }} X
            </a>
          </li>
          <li>
            <a href="#">
              {{ __('home.????????????') }} X
            </a>
          </li>
        </ul>
      </li> --}}
    </ul>
    {{-- <ul class="mobile-menu__profile">
      <li>
        <a href="#">
          <span>{{ __('home.??????????????') }}</span>
          <img src="/img/caret-right.svg" alt="ico">
        </a>
      </li>
      <li>
        <a href="#">
          <span>{{ __('home.?????? ????????????') }}</span>
          <img src="/img/caret-right.svg" alt="ico">
        </a>
      </li>
      <li>
        <a href="#">
          <span>{{ __('home.??????????') }}</span>
          <img src="/img/caret-right.svg" alt="ico">
        </a>
      </li>
    </ul> --}}
    <div class="header__lang">
      <a href="/languages/ru">RU</a>
      <a href="/languages/uz">UZ</a>
      <a href="/languages/en">EN</a>
    </div>
  </div>
</div>
