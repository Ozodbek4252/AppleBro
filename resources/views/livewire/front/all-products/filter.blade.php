<div>
    <div class="products-filter">
        <div class="products-filter__close">
            <span>{{__('home.Фильтр')}}</span>
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25 7L7 25" stroke="#191919" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M25 25L7 7" stroke="#191919" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>							
        </div>
        <div class="products-filter__item">
            <div class="products-filter__title">
                {{__('home.Новая цена')}}
            </div>
            <div class="products-filter__price">
                <input type="text" placeholder="150000"> 
                <span>—</span>
                <input type="text" wire:model="minPrice" placeholder="15000">
            </div>
            <div class="products-filter__range">
                <input type="text" id="price" name="rangeName" />
            </div>
        </div>
        <div class="products-filter__item">
            <div class="products-filter__title">
                <span>
                    {{__('home.Объем накопителя')}}
                </span>
                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 11L8 5L14 11" stroke="black"/>
                </svg>								
            </div>
            <ul class="products-filter__list">
                <li>
                    <label for="storage1">
                        <input type="checkbox" id="storage1">
                        <span>1 ТБ</span>
                    </label>
                </li>
                <li>
                    <label for="storage2">
                        <input type="checkbox" id="storage2">
                        <span>2 ТБ</span>
                    </label>
                </li>
                <li>
                    <label for="storage3">
                        <input type="checkbox" id="storage3">
                        <span>256 ГБ</span>
                    </label>
                </li>
                <li>
                    <label for="storage4">
                        <input type="checkbox" id="storage4">
                        <span>512 ГБ</span>
                    </label>
                </li>
                <li>
                    <label for="storage5">
                        <input type="checkbox" id="storage5">
                        <span>128 ГБ</span>
                    </label>
                </li>
            </ul>
        </div>
        <div class="products-filter__item">
            <div class="products-filter__title">
                <span>
                    Объем оперативной памяти
                </span>
                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 11L8 5L14 11" stroke="black"/>
                </svg>								
            </div>
            <ul class="products-filter__list">
                <li>
                    <label for="ram1">
                        <input type="checkbox" id="ram1">
                        <span>1 ТБ</span>
                    </label>
                </li>
                <li>
                    <label for="ram2">
                        <input type="checkbox" id="ram2">
                        <span>2 ТБ</span>
                    </label>
                </li>
                <li>
                    <label for="ram3">
                        <input type="checkbox" id="ram3">
                        <span>256 ГБ</span>
                    </label>
                </li>
                <li>
                    <label for="ram4">
                        <input type="checkbox" id="ram4">
                        <span>512 ГБ</span>
                    </label>
                </li>
                <li>
                    <label for="ram5">
                        <input type="checkbox" id="ram5">
                        <span>128 ГБ</span>
                    </label>
                </li>
            </ul>
        </div>
        <div class="products-filter__item">
            <div class="products-filter__title">
                <span>
                    Тип
                </span>
                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 11L8 5L14 11" stroke="black"/>
                </svg>								
            </div>
            <ul class="products-filter__list">
                <li>
                    <label for="type1">
                        <input type="checkbox" id="type1">
                        <span>Apple Pro Display XDR</span>
                    </label>
                </li>
                <li>
                    <label for="type2">
                        <input type="checkbox" id="type2">
                        <span>iMac 21,5"</span>
                    </label>
                </li>
                <li>
                    <label for="type3">
                        <input type="checkbox" id="type3">
                        <span>iMac Pro</span>
                    </label>
                </li>
                <li>
                    <label for="type4">
                        <input type="checkbox" id="type4">
                        <span>iMac 24"</span>
                    </label>
                </li>
                <li>
                    <label for="type5">
                        <input type="checkbox" id="type5">
                        <span>Mac mini</span>
                    </label>
                </li>
            </ul>
        </div>
        <div class="products-filter__item">
            <div class="products-filter__title">
                <span>
                    Цвет
                </span>
                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 11L8 5L14 11" stroke="black"/>
                </svg>								
            </div>
            <ul class="products-filter__color">
                <li>
                    <label for="color1">
                        <input type="checkbox" id="color1">
                        <div class="color" style="background: linear-gradient(229.47deg, #FFCB46 -17.16%, #C58E00 103.37%);"></div>
                        <span>Gold</span>
                    </label>
                </li>
                <li>
                    <label for="color2">
                        <input type="checkbox" id="color2">
                        <div class="color" style="background: #242424"></div>
                        <span>Black</span>
                    </label>
                </li>
                <li>
                    <label for="color3">
                        <input type="checkbox" id="color3">
                        <div class="color" style="background: #FF4646;"></div>
                        <span>Red</span>
                    </label>
                </li>
            </ul>
        </div>

        <!-- products-filter__item-closed ЗАКРЫТЫЕ ВНАЧАЛЕ -->
        <div class="products-filter__item products-filter__item-closed">
            <div class="products-filter__title">
                <span>
                    Диагональ
                </span>
                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 11L8 5L14 11" stroke="black"/>
                </svg>								
            </div>
            <ul class="products-filter__list">
                <li>
                    <label for="screen1">
                        <input type="checkbox" id="screen1">
                        <span>6.5inch</span>
                    </label>
                </li>
                <li>
                    <label for="screen2">
                        <input type="checkbox" id="screen2">
                        <span>5.5inch</span>
                    </label>
                </li>
                <li>
                    <label for="screen3">
                        <input type="checkbox" id="screen3">
                        <span>6.1inch</span>
                    </label>
                </li>
                <li>
                    <label for="screen4">
                        <input type="checkbox" id="screen4">
                        <span>5.8inch</span>
                    </label>
                </li>
            </ul>
        </div>
        <div class="products-filter__item products-filter__item-closed">
            <div class="products-filter__title">
                <span>
                    Процессор
                </span>
                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 11L8 5L14 11" stroke="black"/>
                </svg>								
            </div>
            <ul class="products-filter__list">
                <li>
                    <label for="cpu1">
                        <input type="checkbox" id="cpu1">
                        <span>A12</span>
                    </label>
                </li>
                <li>
                    <label for="cpu2">
                        <input type="checkbox" id="cpu2">
                        <span>A13</span>
                    </label>
                </li>
                <li>
                    <label for="cpu3">
                        <input type="checkbox" id="cpu3">
                        <span>A14</span>
                    </label>
                </li>
                <li>
                    <label for="cpu4">
                        <input type="checkbox" id="cpu4">
                        <span>A15</span>
                    </label>
                </li>
                <li>
                    <label for="cpu5">
                        <input type="checkbox" id="cpu5">
                        <span>M1</span>
                    </label>
                </li>
            </ul>
        </div>
        <div class="products-filter__btns">
            <a href="#" class="btn products-filter__show">
                {{__('home.Показать')}}
            </a>
            <a href="#" class="btn products-filter__reset">
                {{__('home.Сбросить')}} 
            </a>
        </div>
    </div>
</div>
