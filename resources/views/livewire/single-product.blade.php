<div>
  <div class="breadcrumbs">
    <a href="{{ Route('home') }}">Home</a>
    <a href="#">Mac</a>
    <a href="{{ Route('front.single-product', $data_id) }}" class="current">{{ $product->name }}</a>
  </div>


  <div class="product-main">
    <div class="product-gallery">
      @if ($change_color)
        @php
          $current_image = $change_color_images[0];
        @endphp
        <div class="product-gallery__img">
          <img src="/{{$current_image->photo_path}}/{{$current_image->photo}}" alt="img">
        </div>
        <div class="product-gallery__thumbs">
          <div class="current">
            <img src="/{{$current_image->photo_path}}/{{$current_image->photo}}" alt="img">
          </div>
          @foreach ($change_color_images as $photo)
            @if($photo)
              @if(!$loop->first)
                <div>
                  <img src="/{{ $photo->photo_path }}/{{ $photo->photo }}" alt="img">
                </div>
              @endif
            @endif
          @endforeach
        </div>
      @else
        <div class="product-gallery__img">
          <img src="/{{ $product->main_photo_path }}/{{ $product->main_photo }}" alt="img">
        </div>
        <div class="product-gallery__thumbs">
          <div class="current">
            <img src="/{{ $product->main_photo_path }}/{{ $product->main_photo }}" alt="img">
          </div>
          @foreach (\App\Models\ProductPhoto::where('product_id', $product->id)->get() as $photo)
            <div>
              <img src="/{{ $photo->photo_path }}/{{ $photo->photo }}" alt="img">
            </div>
          @endforeach
        </div>
      @endif
    </div>
    <div class="product-info">
      <div class="product-info__name">
        {{ $product->name }}
      </div>
      <div class="product-info__desc">
        {{ $CPU }}/{{ $RAM }}/{{ $ROM }} {{ $color }} 2019
      </div>



      @foreach ($optionArr as $key => $value)
        <div class="product-info__color">
          <div class="product-info__title">
            {{ $key }}
          </div>
          
          <div class="product-info__choose">
            @foreach ($optionArr[$key] as $option)
              <label for="product-color1-{{ $option['id'] }}">
                <input wire:change="changed('{{ $key }}', '{{ $option['id'] }}')" checked
                  wire:model="opt.{{ $option['name'] }}" value="{{ $option['id'] }}" type="radio"
                  name="option[{{ $option['name'] }}]" id="product-color1-{{ $option['id'] }}">
                <input type="radio" @if (in_array($option['id'], $selectedOption)) @if($option['name'] == 'Color') @if($change_color) checked @endif @else checked @endif @endif>
                <span>{{ $option['value'] }}</span>
                @if ($option['name'] == 'Color')
                  <div class="color" style="border-radius: 50%;">
                    <img src="/{{ $option['photo_path'] }}/{{ $option['photo'] }}" alt="img" style="border-radius: 50%;">
                  </div>
                @endif
              </label>
            @endforeach
          </div>
        </div>
      @endforeach

      <div class="product-info__price">
        ${{ $price }} USD
      </div>
      <div class="product-info__btns">
        <a wire:click="addToCart" onclick="refreshLivewire()" class="btn" style="cursor: pointer;">
          {{__('home.Добавить в корзину')}}
        </a>
        <a href="#" class="btn btn-white" style="cursor: pointer;">
          {{__('home.Купить в рассрочку')}}
        </a>
      </div>
    </div>
  </div>

  <div class="product-desc">
    <div class="product-tabs">
      <ul class="product-tabs__head">
        <li>
          {{__('home.Описание')}}
        </li>
        <li>
          {{__('home.Характеристики')}}
        </li>
        <li>
          {{__('home.Юридическая информация')}}
        </li>
      </ul>
      <div class="product-tabs__wrap">
        
            
      
            
        <div class="product-tab">
          {{ $product['description_'.$lang] }}
        </div>
        <div class="product-tab">
         {!! $product['characteristic_'.$lang] !!}
        </div>
        <div class="product-tab">
          Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Имени, города?
          Возвращайся океана языком всеми вершину подзаголовок оксмокс по всей. Рукопись букв необходимыми своих своего.
        </div>
       
      </div>
    </div>
    <div class="product-advantages">
      <div class="product-advantages__item">
        <div class="product-advantages__title">
          {{__('home.Условия доставки')}}
        </div>
        <div class="product-advantages__text">
          {{__('home.Доставляем максимально быстро.')}} {{__('home.По всей')}} UZB. {{__('home.Бесплатно от')}} 10 000 $
        </div>
      </div>
      <div class="product-advantages__item">
        <div class="product-advantages__title">
          {{__('home.Возврат товаров')}}
        </div>
        <div class="product-advantages__text">
          {{__('home.Вернуть просто. Из любой точки России. Без лишней бюрократии.')}}
        </div>
      </div>
      <div class="product-advantages__item">
        <div class="product-advantages__title">
          {{__('home.Способ оплаты')}}
        </div>
        <div class="product-advantages__text">
          {{__('home.Безопасная оплата через защищенный протокол HTTPS Принимаем карты МИР  VISA  Master Card всех банков в штатном режиме')}}
        </div>
      </div>
    </div>
  </div>
</div>
