<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header__location">
                <img src="/img/location.svg" alt="ico">
                <span>Ташкент</span>
            </div>
            <ul class="header-top__menu">
                <li>
                    <a href="#">
                        О нас
                    </a>
                </li>
                <li>
                    <a href="#">
                        Магазины
                    </a>
                </li>
                <li>
                    <a href="#">
                        Рассрочка
                    </a>
                </li>
                <li>
                    <a href="#">
                        Оплата и доставка
                    </a>
                </li>
                <li>
                    <a href="#">
                        Контакты
                    </a>
                </li>
            </ul>
            <div class="header__lang">
                <a href="#">
                    O’z
                </a>
                <a href="#">
                    Eng
                </a>
                <a href="#" class="current">
                    Ру
                </a>
            </div>
        </div>
    </div>

    <div class="header-bot">
        <div class="container">
            <ul class="header-menu">
                <div class="header-search__input">
                    <input type="text" placeholder="Поиск">		
                </div>
                <li class="header__logo">
                    <a href="{{ Route('home') }}">
                        <img src="/img/logo.svg" alt="Apple Bro">
                    </a>
                </li>
                @foreach(\App\Models\Category::all() as $category)
                <li class="header-menu__item">
                    <span>{{$category->name}} <img src="/img/arrow-down.svg" alt="ico"></span>
                    <ul class="header-submenu">
                        @foreach(\App\Models\Product::where('category_id', $category->id)->get() as $product)
                            <li>
                                <a href="{{ route('front.single-product', $product->id) }}">
                                    {{$product->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
            <div class="header__icons">
                <a href="#" class="header-search">
                    <img src="/img/search.svg" alt="ico">
                </a>
                <a href="#" class="basket-open">
                    <img src="/img/basket.svg" alt="ico">
                    <span>2</span>
                </a>
                <a href="{{ Route('front.favorite') }}">
                    <img src="/img/heart.svg" alt="ico">
                    <span>2</span>
                </a>
                <a href="#" class="header-profile">
                    <img src="/img/user.svg" alt="ico">
                </a>
                <div class="header-profile__dropdown">
                    <ul>
                        <li>
                            <a href="{{ Route('front.profile') }}">
                                Профиль
                            </a>
                        </li>
                        <li>
                            <a href="{{ Route('front.history') }}">
                                Мои заказы
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Выход
                            </a>
                        </li>
                    </ul>
                </div>


            </div>
            <div class="header-mobile">
                <img src="/img/menu.svg" alt="ico">
            </div>
        </div>
    </div>
</header>