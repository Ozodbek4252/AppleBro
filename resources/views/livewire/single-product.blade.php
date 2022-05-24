<div>
    <div class="breadcrumbs">
        <a href="{{ Route('home') }}">Home</a>
        <a href="#">Mac</a>
        <a href="{{ Route('front.single-product', $data_id) }}" class="current">{{ $product->name }}</a>
    </div>


    <div class="product-main">
        <div class="product-gallery">
            <div class="product-gallery__img">
                <img src="{{$product->main_photo_path}}/{{$product->main_photo}}" alt="img">
            </div>
            <div class="product-gallery__thumbs">
                <div class="current">
                    <img src="{{$product->main_photo_path}}/{{$product->main_photo}}" alt="img">
                </div>
                @foreach(\App\Models\ProductPhoto::where('product_id', $product->id)->get() as $photo)
                    <div>
                        <img src="{{$photo->photo_path}}/{{$photo->photo}}" alt="img">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="product-info">
            <div class="product-info__name">
                {{$product->name}}
            </div>
            <div class="product-info__desc">
                {{$CPU}}/{{$RAM}}/{{$ROM}} GB Silver 2019
            </div>


            
            @foreach($optionArr as $key=>$value)
                <div class="product-info__color">
                    <div class="product-info__title">
                        {{$key}}
                    </div>
                    <div class="product-info__choose">
                            @foreach($optionArr[$key] as $option)
                                <label for="product-color1-{{$option['id']}}">
                                    <input wire:change="changed" wire:model="opt.{{$option['name']}}" value="{{$option['id']}}" type="radio" name="product-color[{{$option['name']}}]" id="product-color1-{{$option['id']}}">
                                    <input type="radio" @if($option['id'] == $RAM) checked @endif>
                                    {{$option['id']}} ? {{$RAM}}
                                    {{-- <input type="radio" @if($loop->first) checked @endif> --}}
                                    <span>{{$option['value']}}</span>
                                    @if($option['name'] == 'Color')
                                        <div class="color" style="background: linear-gradient(229.47deg, #FFCB46 -17.16%, #C58E00 103.37%);"></div>
                                    @endif
                                </label>
                            @endforeach
                    </div>
                </div>
            @endforeach

            <div class="product-info__price">
                ${{$price}} USD
            </div>
            <div class="product-info__btns">
                <a href="#" class="btn">
                    Добавить в корзину
                </a>
                <a href="#" class="btn btn-white">
                    Купить в рассрочку
                </a>
            </div>
        </div>
    </div>

    <div class="product-desc">
        <div class="product-tabs">
            <ul class="product-tabs__head">
                <li>
                    Описание
                </li>
                <li>
                    Характеристики
                </li>
                <li>
                    Юридическая информация
                </li>
            </ul>
            <div class="product-tabs__wrap">
                <div class="product-tab">
                    Далеко-далеко за, словесными горами в стране гласных и согласных живут рыбные тексты. Рот обеспечивает осталось щеке подпоясал? 
                </div>
                <div class="product-tab">
                    Процессор: M1 Pro<br> 
                    ОЗУ: 16 ГБ<br>
                    Встроенный память: 512 ГБ/1 ТБ<br>
                    16‑ядерная сисема: Neural Engine<br>
                    Дисплей: Liquid Retina XDR 14,2 дюймов<br>
                    Три порта: Thunderbolt 4, порт HDMI, слот для карт SDXC, разъём питания MagSafe 3<br>
                    Клавиатура: Magic Keyboard с Touch ID<br>
                    Трекпад: Force Touch<br>
                    Адаптер питания: USB‑C мощностью 140 Вт/: <br>
                </div>
                <div class="product-tab">
                    Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Имени, города? Возвращайся океана языком всеми вершину подзаголовок оксмокс по всей. Рукопись букв необходимыми своих своего. 
                </div>
            </div>
        </div>
        <div class="product-advantages">
            <div class="product-advantages__item">
                <div class="product-advantages__title">
                    Условия доставки
                </div>
                <div class="product-advantages__text">
                    Доставляем максимально быстро. По всей UZB. Бесплатно от 10 000 $
                </div>
            </div>
            <div class="product-advantages__item">
                <div class="product-advantages__title">
                    Возврат товаров
                </div>
                <div class="product-advantages__text">
                    Вернуть просто. Из любой точки России. Без лишней бюрократии.
                </div>
            </div>
            <div class="product-advantages__item">
                <div class="product-advantages__title">
                    Способ оплаты
                </div>
                <div class="product-advantages__text">
                    Безопасная оплата через защищенный протокол HTTPS. Принимаем карты МИР, VISA, Master Card всех банков в штатном режиме.
                </div>
            </div>
        </div>
    </div>
</div>
