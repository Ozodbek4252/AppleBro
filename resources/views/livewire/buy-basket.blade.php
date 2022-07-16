<div>
@if($products)
  <div class="buy-basket">
      
      <h2 class="buy__title">
          {{__('home.Моя корзина')}}
      </h2>

      <div class="buy-basket__content">
        {{-- ---------------------------change--------------------------- --}}
        @if(!empty($products))
          @foreach($products as $id=>$product)
            @php
              $product_options = \App\Models\ProductOption::where('product_id', $id)->get();
              foreach($product_options as $product_option){
                  $option = \App\Models\Option::find($product_option->option_id);
                  $option["price"] = $product_option->price;
                  $optionArr[$option->name][] = $option;
              } 
              $photo = \App\Models\ProductPhoto::where('product_id', $id)->first();
            @endphp

            <div class="buy-basket__item">
                <div class="buy-basket__info">
                    <div class="buy-basket__img">
                      <img src="{{$photo->photo_path}}/{{$photo->photo}}" alt="img">
                    </div>
                    <div class="buy-basket__text">
                      <div class="buy-basket__name">
                          {{$product['name']}}
                      </div>
                      @foreach($product['options'] as $name=>$option_id)
                        <div class="buy-basket__desc">
                          {{$name}}:
                            <label for="product-color1">
                              <span>{{\App\Models\Option::find($option_id)->value}}</span>
                            </label>
                        </div>
                      @endforeach
                    </div>
                </div>
                <div class="buy-basket__wrap">
                    <div class="buy-basket__count">
                        <span>{{__('home.Количество')}}:</span>
                        <div class="buy-basket__count-btns">
                            <span class="minus" wire:click="subtract({{$id}})" onclick="refreshLivewire()">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.75 12H20.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>											
                            </span>
                            <span wire:model="quantity.{{$id}}" class="value">
                              {{$quantity[$id]}}
                            </span>
                            <span class="plus" wire:click="add({{$id}})" onclick="refreshLivewire()">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.75 12H20.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 3.75V20.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>											
                            </span>
                        </div>
                    </div>
                    <div class="buy-basket__price">
                        <span>{{__('home.Цена')}}:</span>
                        <div>${{$product['price'] * $quantity[$id]}}  USD</div>
                    </div>
                </div>
                <div class="buy-basket__delete" wire:click="remove({{$id}})" onclick="refreshLivewire()">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27 7L5 7.00001" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13 13V21" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19 13V21" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M25 7.00001V26C25 26.2652 24.8946 26.5196 24.7071 26.7071C24.5196 26.8946 24.2652 27 24 27H8C7.73478 27 7.48043 26.8946 7.29289 26.7071C7.10536 26.5196 7 26.2652 7 26V7" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 7V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3H13C12.4696 3 11.9609 3.21071 11.5858 3.58579C11.2107 3.96086 11 4.46957 11 5V7" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>								
                </div>
            </div>
          @endforeach
        @endif
      </div>

      @livewire('basket-price')

      <div class="buy-basket__btn">
          <a class="buy-info__btn buy-info__btn-basket btn">
              {{__('home.Оплатить заказ')}} 
          </a>
      </div>
  </div>
@else
  <div class="buy-basket">
    <h2 class="buy__title">
      Моя корзина
    </h2>
    <div class="buy__empty">
      В вашей корзине пока нет товаров
    </div>
    <h2 class="similar-products__title medium-title">
      Похожие продукты

      <a href="#">Все</a>
    </h2>
    <div class="similar-products__wrap">

      @foreach($recomendProducts as $product)
        <div class="products-item">
          <div class="products-item__wrap">
            <div class="products-item__img">
              <img src="{{$product->main_photo_path}}/{{$product->main_photo}}" alt="Product">
            </div>
            <div class="products-item__btns" onclick="refreshLivewire()">
              @livewire('add-to-cart', ['id' => $product->id])
							{{-- @livewire('add-to-wishlist', ['id' => $product->id]) --}}
            </div>
          </div>
          <div class="products-item__name">
            {{$product->name}}
            @php
								$product_options = \App\Models\ProductOption::where('product_id', $product->id)->get();
								$optionArr = [];
								foreach($product_options as $product_option){
										$option = \App\Models\Option::find($product_option->option_id);
										$option["price"] = $product_option->price;
										$optionArr[$option->name][] = $option;
								}
								$total_price = 0;
							@endphp
							@foreach($optionArr as $key=>$value)
								{{$value[0]->value}} @if(!$loop->last)/ @endif
								@php
								  $options_price = \App\Models\ProductOption::where([['product_id', $product->id], ['option_id', $value[0]->id]])->first()?->price;
									$total_price += $options_price;
								@endphp
							@endforeach
          </div>
          <div class="products-item__price">
            ${{$product->price + $total_price}} USD
          </div>
          <a href="#" class="products-item__link"></a>
        </div>
      @endforeach

    </div>
  </div>
@endif
</div>