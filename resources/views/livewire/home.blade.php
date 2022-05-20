<div>
    <section class="popular">
		<div class="container">
			<h2 class="popular__title big-title">
				{{__('home.Популярные категории')}}
			</h2>
			<div class="popular-content">
				@foreach ($categories as $category)
				<div class="popular-item">
						<div class="popular-item__title">
							{{$category->name}}
						</div>
							<?php 
								$product = \App\Models\Product::where('category_id', $category->id)->orderBy('price', 'asc',)->first();
								?>
						<div class="popular-item__price">
							{{-- от 11.800.000 Сум --}}
							от {{$product->price}} USD
						</div>
						<div class="popular-item__img">
							<img src="{{$product->main_photo_path}}/{{$product->main_photo}}" alt="popular">
						</div>
						<a href="{{ Route('front.all-products', $category->id) }}" class="popular-item__link"></a>
					</div>
				@endforeach
				</div>
			</div>
		</section>

	<!-- NEW -->
	
	<section class="new">
		<div class="container">
			<h2 class="new__title medium-title">
				{{__('home.Новое поступление')}}
			</h2>
			<div class="new-content">
			
				@foreach ($newest_products as $newest_product )
					<div class="new-item">
						<div class="new-item__wrap">
							<div class="new-item__tag">
								{{__('home.NEW')}}
							</div>
							<div class="new-item__img">
								<img src="{{$newest_product->main_photo_path}}/{{$newest_product->main_photo}}" alt="Product">
							</div>
							<div class="new-item__btns">
								<span class="new-item__basket">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.96905 6.625L5.30205 3.625H3.37305" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M7.73075 14.835L5.96875 6.625H18.6267C19.2638 6.625 19.7377 7.212 19.6047 7.835L18.1027 14.835C18.0037 15.296 17.5968 15.625 17.1248 15.625H8.70775C8.23675 15.625 7.82975 15.296 7.73075 14.835Z" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M17.4648 19.25C17.2578 19.25 17.0898 19.418 17.0918 19.625C17.0918 19.832 17.2598 20 17.4668 20C17.6738 20 17.8418 19.832 17.8418 19.625C17.8408 19.418 17.6728 19.25 17.4648 19.25" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M8.85593 19.25C8.64893 19.25 8.48093 19.418 8.48293 19.625C8.48193 19.832 8.64993 20 8.85693 20C9.06393 20 9.23193 19.832 9.23193 19.625C9.23193 19.418 9.06393 19.25 8.85593 19.25" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>                                    
								</span>
                                {{-- {{$wishlist->where('product_id', $newest_product->id)}} --}}
                                {{$newest_product->id}}
								<span class="">
                                    <span 
                                        wire:click="addToWishlist({{$newest_product->id}})"
                                        @auth
                                            {{-- @if($added)
                                                style="background-color: #FF1E1E;" 
                                            @endif --}}
                                            @if($wishlist->where('product_id', $newest_product->id))
                                                style="background-color: #FF1E1E;" 
                                            @endif
                                        @endauth
                                        class="new-item__fav">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path 
                                                @auth
                                                    @if(\App\Models\Wishlist::where('user_id', Auth::user()->id)->where('product_id', $newest_product->id)->count() > 0)
                                                        fill="#fff" 
                                                    @endif
                                                @endauth
                                                fill-rule="evenodd" clip-rule="evenodd" d="M12.1671 5.26144C13.1502 4.35261 14.4229 3.81953 15.7602 3.75644L16.0284 3.75012C17.5527 3.75012 19.0132 4.36188 20.0979 5.46437L20.2807 5.66182C22.3094 7.95844 22.2302 11.4408 20.0823 13.648L14.6899 19.1234C13.9804 19.8442 13.0112 20.2501 11.9998 20.2501C10.9884 20.2501 10.0193 19.8442 9.30992 19.1235L3.91412 13.6447C1.69503 11.3643 1.69503 7.73159 3.93137 5.43403L4.13608 5.23724C5.18336 4.28122 6.55111 3.75012 7.97113 3.75012C9.48356 3.75012 10.9332 4.35239 12.0001 5.42281L12.1671 5.26144ZM19.0131 6.50027C18.2258 5.70039 17.1504 5.24994 16.028 5.24994C14.9057 5.24994 13.8303 5.70038 13.0428 6.5004L12.5338 7.01732C12.24 7.31564 11.7588 7.31563 11.465 7.01731L10.9557 6.50019C10.1684 5.70035 9.09306 5.24994 7.97074 5.24994C6.92518 5.24994 5.91806 5.641 5.16161 6.33118L4.98875 6.49711C3.33631 8.19521 3.33631 10.9003 4.98561 12.5952L10.3784 18.0709C10.806 18.5053 11.3899 18.7499 11.9994 18.7499C12.6089 18.7499 13.1929 18.5053 13.6206 18.0708L19.0101 12.5985C20.607 10.9574 20.666 8.364 19.1683 6.66813L19.0131 6.50027Z" fill="#7B7B7B"/>
                                        </svg>
                                    </span>
									@livewire('add-to-wishlist', ['id' => $newest_product->id])
								</span>
							</div>
						</div>
						<div class="new-item__name">
							{{$newest_product->name}}
						</div>
						<div class="new-item__price">
							${{$newest_product->price}} USD
						</div>
						<a href="{{ Route('front.single-product', $newest_product->id) }}" class="new-item__link"></a>
					</div>
				@endforeach
			</div>
		</div>
	</section>
</div>
