<section class="fav">
	<div class="container">
		<h2 class="fav__title">
			{{__('home.Избранное')}} <span>{{count($wishlists->get())}}</span>
		</h2>
		@if(count($wishlists->get()) > 0)
			<div class="similar-products__wrap">
				@foreach($wishlists->get() as $key=>$wishlist)
						<div class="products-item">
							<div class="products-item__wrap">
								<div class="products-item__img">
									@php
										$product = \App\Models\Product::where('id', $wishlist->product_id)->first();
									@endphp
									<img src="{{$product->main_photo_path}}/{{$product->main_photo}}" alt="Product">
								</div>
								<div class="products-item__btns">
									<span class="products-item__basket">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.96905 6.625L5.30205 3.625H3.37305" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M7.73075 14.835L5.96875 6.625H18.6267C19.2638 6.625 19.7377 7.212 19.6047 7.835L18.1027 14.835C18.0037 15.296 17.5968 15.625 17.1248 15.625H8.70775C8.23675 15.625 7.82975 15.296 7.73075 14.835Z" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M17.4648 19.25C17.2578 19.25 17.0898 19.418 17.0918 19.625C17.0918 19.832 17.2598 20 17.4668 20C17.6738 20 17.8418 19.832 17.8418 19.625C17.8408 19.418 17.6728 19.25 17.4648 19.25" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8.85593 19.25C8.64893 19.25 8.48093 19.418 8.48293 19.625C8.48193 19.832 8.64993 20 8.85693 20C9.06393 20 9.23193 19.832 9.23193 19.625C9.23193 19.418 9.06393 19.25 8.85593 19.25" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</span>

									@livewire('add-to-wishlist', ['id' => $product->id])

								</div>
							</div>
							<?php 
									$optionArr = [];
									$product_options = \App\Models\ProductOption::where('product_id', $product->id)->get();
									foreach($product_options as $product_option){
											$option = \App\Models\Option::find($product_option->option_id);
											$option["price"] = $product_option->price;
											$optionArr[$option->name][] = $option;
									}
							?>
							<div class="products-item__name">
								{{$product->name}}
									( @foreach($optionArr as $key=>$value)
											{{$key}}:
									    @foreach($optionArr[$key] as $option)
												{{ $option['value'] }}@if(!$loop->last)/@endif
											@endforeach @if(!$loop->last), &nbsp;@endif
										@endforeach
									)
							</div>
							<div class="products-item__price">
								${{$product->price}} USD
							</div>
							<a href="{{ Route('front.single-product', $product->id) }}" class="products-item__link"></a>
						</div>
				@endforeach
			</div>
		@else
			<div class="fav__empty">
				{{__('home.У вас пока нет товаров в списке желаний')}}
			</div>
			<h2 class="similar-products__title medium-title">
				{{__('home.Похожие продукты')}}
				<a href="#">{{__('home.Все')}}</a>
			</h2>

			<div class="similar-products__wrap">
				@foreach($recommended_products as $recommended_product)
						<div class="products-item">
							<div class="products-item__wrap">
								<div class="products-item__img">
									<img src="{{$recommended_product->main_photo_path}}/{{$recommended_product->main_photo}}" alt="Product">
								</div>
								<div class="products-item__btns" onclick="refreshLivewire()">
									@livewire('add-to-cart', ['id' => $recommended_product->id])
									@livewire('add-to-wishlist', ['id' => $recommended_product->id])
								</div>
							</div>
							<div class="products-item__name">
								@php
									$product_options = \App\Models\ProductOption::where('product_id', $recommended_product->id)->get();
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
										$options_price = \App\Models\ProductOption::where([['product_id', $recommended_product->id], ['option_id', $value[0]->id]])->first()?->price;
										$total_price += $options_price;
									@endphp
								@endforeach
							</div>
							<div class="products-item__price">
								${{$recommended_product->price + $total_price}} USD
							</div>
							<a href="{{ Route('front.single-product', $recommended_product->id) }}" class="products-item__link"></a>
						</div>
				@endforeach
			</div>
		@endif
	</div>
</section>

	