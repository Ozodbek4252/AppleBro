<div class="mobile-menu">
  <div class="container">
    <div class="mobile-menu__head">
      <div class="mobile-menu__close">
        <img src="/img/close.svg" alt="ico">
      </div>
      <div class="mobile-menu__logo">
        <a href="/">
          <img src="/img/logo.svg" alt="AppleBro">
        </a>
      </div>
      <div class="mobile-menu__icons">
        <a class="basket-open">
          <img src="/img/basket.svg" alt="ico">
          <span>2</span>
        </a>
      </div>
    </div>
    <div class="mobile-menu__search">
      @livewire('front.search')
    </div>
    <ul class="mobile-menu__menu">
      @foreach (\App\Models\Category::where('category_id', null)->with('categories')->get() as $category)
        @foreach ($category->categories as $category)
          @if (count($category->categories) > 0)
            <li class="mobile-menu__item">
              <span>
                  {{ $category->name }} 
                  <img src="/img/arrow-down.svg" alt="ico">
              </span>
              <a href="{{Route('front.all-products', $category->id)}}">
              </a>
              <ul class="mobile-menu__submenu">
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
    <div class="header__lang">
      <a href="/languages/ru">RU</a>
      <a href="/languages/uz">UZ</a>
      <a href="/languages/en">EN</a>
    </div>
  </div>
</div>
