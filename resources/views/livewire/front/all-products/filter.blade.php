<div>
  <div class="products-filter">
    <div class="products-filter__close">
      <span>{{ __('home.Фильтр') }}</span>
      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M25 7L7 25" stroke="#191919" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M25 25L7 7" stroke="#191919" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </div>
    <div class="products-filter__item">
      <div class="products-filter__title">
        {{ __('home.Новая цена') }}
      </div>
      <div class="products-filter__price">
        <input type="text" wire:change="changed" wire:model="minPrice">
        <span>—</span>
        <input type="text" wire:change="changed" wire:model="maxPrice">
      </div>

      {{-- <input type="range" min="1000" max="10000" step="50" value="50" wire:model="" /> --}}

    </div>
    @foreach ($options as $option)
      <div class="products-filter__item">
        <div class="products-filter__title">
          <span>
            {{ $option[0]['name'] }}
          </span>
          <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 11L8 5L14 11" stroke="black" />
          </svg>
        </div>
        @if($option[0]['name'] == 'Color')
        <ul class="products-filter__color">
          @foreach (collect($option)->unique()->toArray() as $value)
            <li>
              <label for="{{ $value['value'] }}">
                <input wire:model="{{ $value['name'] }}" value="{{ $value['value'] }}" type="checkbox" id="{{ $value['value'] }}">
                <img class="color" src="{{$value['photo_path']}}/{{$value['photo']}}" alt="">
                <span>{{$value['value']}}</span>
              </label>
            </li>
          @endforeach
        </ul>
        @else
          <ul class="products-filter__list">
            {{-- @foreach($CPU as $CP)
              {{$CP}}
            @endforeach --}}
            @foreach (collect($option)->unique()->toArray() as $value)
              <li>
                <label for="{{ $value['value'] }}">
                  <input wire:model="{{ $value['name'] }}" value="{{ $value['value'] }}" type="checkbox" id="{{ $value['value'] }}">
                  <span>{{ $value['value'] }}</span>
                </label>
              </li>
            @endforeach
          </ul>
        @endif
      </div>
    @endforeach
    <div class="products-filter__item">
      <div class="products-filter__title">
        <span>
          Тип
        </span>
        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2 11L8 5L14 11" stroke="black" />
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
    

    <!-- products-filter__item-closed ЗАКРЫТЫЕ ВНАЧАЛЕ -->
    <div class="products-filter__item products-filter__item-closed">
      <div class="products-filter__title">
        <span>
          Диагональ
        </span>
        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2 11L8 5L14 11" stroke="black" />
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
          <path d="M2 11L8 5L14 11" stroke="black" />
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
      <a wire:click="filter" class="btn products-filter__show">
        {{ __('home.Показать') }}
      </a>
      <a href="#" class="btn products-filter__reset">
        {{ __('home.Сбросить') }}
      </a>
    </div>
  </div>
</div>



@livewire('front.all-products.products', ['filteredProduct' => $filteredProducts])
