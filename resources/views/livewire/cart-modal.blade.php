<div>
  @if(!empty($products))
    @foreach($products as $id=>$product)
      @php
      // dd($product);
        $product_options = \App\Models\ProductOption::where('product_id', $id)->get();
        $optionArr = [];
        foreach($product_options as $product_option){
            $option = \App\Models\Option::find($product_option->option_id);
            $option["price"] = $product_option->price;
            $optionArr[$option->name][] = $option;
          }
        $photo = \App\Models\ProductPhoto::where('product_id', $id)->first();
      @endphp

      <div class="basket-item">
        <div class="basket-item__img">
          <img src="{{$photo->photo_path}}/{{$photo->photo}}" alt="product">
        </div>
        <div class="basket-item__wrap">
          <div class="basket-item__name">
            {{$product['name']}} 
            @foreach($optionArr as $key=>$value)
              {{$value[0]->value}} @if(!$loop->last)/ @endif
            @endforeach
          </div>
          <div class="basket-item__price">
            ${{$product['price'] }} USD 
          </div>
        </div>
        <div wire:click="delete({{$id}})" class="basket-item__delete" onclick="refreshLivewire()">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.75 5.25L5.25 18.75" stroke="#CCCCCC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M18.75 18.75L5.25 5.25" stroke="#CCCCCC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>									
        </div>
      </div>
    @endforeach
  @endif
  <div class="basket-total">
      <a href="{{ Route('front.cart') }}" class="btn">
          {{__('home.Оформить заказ')}}
      </a>
      <div class="basket-total__price">
          <span>Итого: </span>
          ${{$total_price}} USD
      </div>
  </div>

</div>

<script>
  function refreshLivewire(){
    Livewire.emit('refreshLivewire')
  }
</script>
