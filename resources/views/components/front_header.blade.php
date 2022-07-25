<header class="header">
  <div class="header-top">
    <div class="container">
      <div class="header__location">
        <img src="/img/location.svg" alt="ico">
        <span>{{ __('home.tashkent') }}</span>
      </div>
      <ul class="header-top__menu">
        <li>
          {{-- <a href="#"> --}}
          {{ __('home.О нас') }}
          {{-- </a> --}}
        </li>
        <li>
          {{-- <a href="#"> --}}
          {{ __('home.Магазины') }}
          {{-- </a> --}}
        </li>
        <li>
          {{-- <a href="#"> --}}
          {{ __('home.Рассрочка') }}
          {{-- </a> --}}
        </li>
        <li>
          {{-- <a href="#"> --}}
          {{ __('home.Оплата и доставка') }}
          {{-- </a> --}}
        </li>
        <li>
          {{-- <a href="#"> --}}
          {{ __('home.Контакты') }}
          {{-- </a> --}}
        </li>
      </ul>
      <div class="header__lang">
        <a href="/languages/ru">RU</a>
        <a href="/languages/uz">UZ</a>
        <a href="/languages/en">EN</a>
      </div>
    </div>
  </div>

  <div class="header-bot">
    <div class="container">
      <ul class="header-menu">
        <div class="header-search__input">

          @livewire('front.search')

        </div>
        <li class="header__logo">
          <a href="{{ Route('home') }}">
            <img src="/img/logo.svg" alt="Apple Bro">
          </a>
        </li>
        @foreach (\App\Models\Category::where('category_id', null)->with('categories')->get() as $category)
          @foreach ($category->categories as $category)
            @if (count($category->categories) > 0)
              <li class="header-menu__item">
                <a href="{{Route('front.all-products', $category->id)}}">
                  <span>{{ $category->name }} <img src="/img/arrow-down.svg" alt="ico"></span>
                </a>
                <ul class="header-submenu">
                  @foreach ($category->categories as $category)
                    <li>
                      <a href="{{ route('front.all-products', $category->id) }}">
                        {{ $category->name }}
                      </a>
                    </li>
                  @endforeach
                </ul>
              </li>
            @endif
          @endforeach
        @endforeach
      </ul>
      <div class="header__icons">
        <a class="header-search">
          <img src="/img/search.svg" alt="ico">
        </a>
        <a href="" class="basket-open">
          <img src="/img/basket.svg" alt="ico">
          @livewire('cart-counter')
        </a>
        {{-- <a href="{{ Route('front.wishlist') }}">
          <img src="/img/heart.svg" alt="ico">
          @livewire('wishlist-counter')
        </a>
        <a href="" class="header-profile">
          <img src="/img/user.svg" alt="ico">
        </a> --}}
        {{-- <div class="header-profile__dropdown">
          <ul>
            @if (Auth::check())
              <li>
                @if (Auth::user()->usertype == 1)
                  <a href="{{ Route('dashboard') }}">
                    Dashboard
                  </a>
                @else
                  <a href="{{ Route('front.profile') }}">
                    {{ ('home.Профиль') }}
                  </a>
                @endif
              </li>
              <li>
                <a href="{{ Route('profile.history') }}">
                  {{ ('home.Мои заказы') }}
                </a>
              </li>
              <li>
                <form method="POST" action="{{ route('logout') }}" style="margin: 0">
                  @csrf
                  <x-jet-dropdown-link href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                      this.closest('form').submit();"
                    style="margin: 0">
                    {{ __('home.Выход') }}
                  </x-jet-dropdown-link>
                </form>
              </li>
            @else
              <li>
                <a href="{{ route('login') }}">
                  Log In
                </a>
              </li>
              <li>
                <a href="{{ Route('register') }}">
                  Sign Up
                </a>
              </li>
            @endif
          </ul>
        </div> --}}
      </div>
      <div class="header-mobile">
        <img src="/img/menu.svg" alt="ico">
      </div>
    </div>
  </div>
</header>
