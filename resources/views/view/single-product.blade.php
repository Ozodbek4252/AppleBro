
	<section class="product">
		<div class="container">
			<div class="products-carousel">

				<!-- ЕСЛИ МНОГО ТОВАРОВ ТО СТРЕЛКИ -->
	
				<div class="products-carousel__arrows">
					<span class="arrow-left">
						<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M30.1406 12.28L17.9206 24.03L30.1406 35.78" stroke="#0967C5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>							
					</span>
					<span class="arrow-right">
						<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M17.8594 35.72L30.0794 23.97L17.8594 12.22" stroke="#0967C5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>							
					</span>
				</div>
	
				<div class="products-carousel__items owl-carousel">
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="/img/apple1.png" alt="product">
						</div>
						<div class="products-carousel__name">
							MacBook Air
						</div>
						<a href="#"></a>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="/img/apple1.png" alt="product">
						</div>
						<div class="products-carousel__name">
							MacBook Air
						</div>
						<a href="#"></a>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="/img/apple1.png" alt="product">
						</div>
						<div class="products-carousel__name">
							MacBook Air
						</div>
						<a href="#"></a>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="/img/apple1.png" alt="product">
						</div>
						<div class="products-carousel__name">
							MacBook Air
						</div>
						<a href="#"></a>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="/img/apple1.png" alt="product">
						</div>
						<div class="products-carousel__name">
							MacBook Air
						</div>
						<a href="#"></a>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="/img/apple1.png" alt="product">
						</div>
						<div class="products-carousel__name">
							MacBook Air
						</div>
						<a href="#"></a>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="/img/apple1.png" alt="product">
						</div>
						<div class="products-carousel__name">
							MacBook Air
						</div>
						<a href="#"></a>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="/img/apple1.png" alt="product">
						</div>
						<div class="products-carousel__name">
							MacBook Air
						</div>
						<a href="#"></a>
					</div>
				</div>
	
			</div>
	
	
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
											<span>{{$option['value']}}</span>
											@if($option['name'] == 'Color')
												<div class="color" style="background: linear-gradient(229.47deg, #FFCB46 -17.16%, #C58E00 103.37%);"></div>
											@endif
										</label>
									@endforeach
							</div>
						</div>
					@endforeach

					<div wire:click="last()" class="product-info__price">
						${{$price}} USD
					</div>
					<div class="product-info__btns">
						<a href="#" class="btn">
							{{__('home.Добавить в корзину')}}
						</a>
						<a href="#" class="btn btn-white">
							{{__('home.Купить в рассрочку')}}
						</a>
					</div>
				</div>
			</div>
	
			<div class="product-desc">
				<div class="product-tabs">
					<ul class="product-tabs__head">
						<li>
							{{_-('home.Описание')}}
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
	</section>

	
	<!-- SIMILAR-PRODUCTS -->

	<section class="similar-products">
		<div class="container">
			<h2 class="similar-products__title medium-title">
				Похожие продукты

				<a href="#">Все</a>
			</h2>
			<div class="similar-products__wrap">
				<div class="products-item">
					<div class="products-item__wrap">
						<div class="products-item__img">
							<img src="/img/apple2.png" alt="Product">
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
							<span class="products-item__fav">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M12.1671 5.26144C13.1502 4.35261 14.4229 3.81953 15.7602 3.75644L16.0284 3.75012C17.5527 3.75012 19.0132 4.36188 20.0979 5.46437L20.2807 5.66182C22.3094 7.95844 22.2302 11.4408 20.0823 13.648L14.6899 19.1234C13.9804 19.8442 13.0112 20.2501 11.9998 20.2501C10.9884 20.2501 10.0193 19.8442 9.30992 19.1235L3.91412 13.6447C1.69503 11.3643 1.69503 7.73159 3.93137 5.43403L4.13608 5.23724C5.18336 4.28122 6.55111 3.75012 7.97113 3.75012C9.48356 3.75012 10.9332 4.35239 12.0001 5.42281L12.1671 5.26144ZM19.0131 6.50027C18.2258 5.70039 17.1504 5.24994 16.028 5.24994C14.9057 5.24994 13.8303 5.70038 13.0428 6.5004L12.5338 7.01732C12.24 7.31564 11.7588 7.31563 11.465 7.01731L10.9557 6.50019C10.1684 5.70035 9.09306 5.24994 7.97074 5.24994C6.92518 5.24994 5.91806 5.641 5.16161 6.33118L4.98875 6.49711C3.33631 8.19521 3.33631 10.9003 4.98561 12.5952L10.3784 18.0709C10.806 18.5053 11.3899 18.7499 11.9994 18.7499C12.6089 18.7499 13.1929 18.5053 13.6206 18.0708L19.0101 12.5985C20.607 10.9574 20.666 8.364 19.1683 6.66813L19.0131 6.50027Z" fill="#7B7B7B"/>
								</svg>
							</span>
						</div>
					</div>
					<div class="products-item__name">
						iPhone 13 Pro Max" (M1 Max, 10 CPU/32 GPU 2021) 64 ГБ, 8 Тб SSD
					</div>
					<div class="products-item__price">
						11.800.000 Сум
					</div>
					<a href="#" class="products-item__link"></a>
				</div>
				<div class="products-item">
					<div class="products-item__wrap">
						<div class="products-item__img">
							<img src="/img/apple2.png" alt="Product">
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
							<span class="products-item__fav">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M12.1671 5.26144C13.1502 4.35261 14.4229 3.81953 15.7602 3.75644L16.0284 3.75012C17.5527 3.75012 19.0132 4.36188 20.0979 5.46437L20.2807 5.66182C22.3094 7.95844 22.2302 11.4408 20.0823 13.648L14.6899 19.1234C13.9804 19.8442 13.0112 20.2501 11.9998 20.2501C10.9884 20.2501 10.0193 19.8442 9.30992 19.1235L3.91412 13.6447C1.69503 11.3643 1.69503 7.73159 3.93137 5.43403L4.13608 5.23724C5.18336 4.28122 6.55111 3.75012 7.97113 3.75012C9.48356 3.75012 10.9332 4.35239 12.0001 5.42281L12.1671 5.26144ZM19.0131 6.50027C18.2258 5.70039 17.1504 5.24994 16.028 5.24994C14.9057 5.24994 13.8303 5.70038 13.0428 6.5004L12.5338 7.01732C12.24 7.31564 11.7588 7.31563 11.465 7.01731L10.9557 6.50019C10.1684 5.70035 9.09306 5.24994 7.97074 5.24994C6.92518 5.24994 5.91806 5.641 5.16161 6.33118L4.98875 6.49711C3.33631 8.19521 3.33631 10.9003 4.98561 12.5952L10.3784 18.0709C10.806 18.5053 11.3899 18.7499 11.9994 18.7499C12.6089 18.7499 13.1929 18.5053 13.6206 18.0708L19.0101 12.5985C20.607 10.9574 20.666 8.364 19.1683 6.66813L19.0131 6.50027Z" fill="#7B7B7B"/>
								</svg>
							</span>
						</div>
					</div>
					<div class="products-item__name">
						iPhone 13 Pro Max" (M1 Max, 10 CPU/32 GPU 2021) 64 ГБ, 8 Тб SSD
					</div>
					<div class="products-item__price">
						11.800.000 Сум
					</div>
					<a href="#" class="products-item__link"></a>
				</div>
				<div class="products-item">
					<div class="products-item__wrap">
						<div class="products-item__img">
							<img src="/img/apple2.png" alt="Product">
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
							<span class="products-item__fav">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M12.1671 5.26144C13.1502 4.35261 14.4229 3.81953 15.7602 3.75644L16.0284 3.75012C17.5527 3.75012 19.0132 4.36188 20.0979 5.46437L20.2807 5.66182C22.3094 7.95844 22.2302 11.4408 20.0823 13.648L14.6899 19.1234C13.9804 19.8442 13.0112 20.2501 11.9998 20.2501C10.9884 20.2501 10.0193 19.8442 9.30992 19.1235L3.91412 13.6447C1.69503 11.3643 1.69503 7.73159 3.93137 5.43403L4.13608 5.23724C5.18336 4.28122 6.55111 3.75012 7.97113 3.75012C9.48356 3.75012 10.9332 4.35239 12.0001 5.42281L12.1671 5.26144ZM19.0131 6.50027C18.2258 5.70039 17.1504 5.24994 16.028 5.24994C14.9057 5.24994 13.8303 5.70038 13.0428 6.5004L12.5338 7.01732C12.24 7.31564 11.7588 7.31563 11.465 7.01731L10.9557 6.50019C10.1684 5.70035 9.09306 5.24994 7.97074 5.24994C6.92518 5.24994 5.91806 5.641 5.16161 6.33118L4.98875 6.49711C3.33631 8.19521 3.33631 10.9003 4.98561 12.5952L10.3784 18.0709C10.806 18.5053 11.3899 18.7499 11.9994 18.7499C12.6089 18.7499 13.1929 18.5053 13.6206 18.0708L19.0101 12.5985C20.607 10.9574 20.666 8.364 19.1683 6.66813L19.0131 6.50027Z" fill="#7B7B7B"/>
								</svg>
							</span>
						</div>
					</div>
					<div class="products-item__name">
						iPhone 13 Pro Max" (M1 Max, 10 CPU/32 GPU 2021) 64 ГБ, 8 Тб SSD
					</div>
					<div class="products-item__price">
						11.800.000 Сум
					</div>
					<a href="#" class="products-item__link"></a>
				</div>
				<div class="products-item">
					<div class="products-item__wrap">
						<div class="products-item__img">
							<img src="/img/apple2.png" alt="Product">
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
							<span class="products-item__fav">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M12.1671 5.26144C13.1502 4.35261 14.4229 3.81953 15.7602 3.75644L16.0284 3.75012C17.5527 3.75012 19.0132 4.36188 20.0979 5.46437L20.2807 5.66182C22.3094 7.95844 22.2302 11.4408 20.0823 13.648L14.6899 19.1234C13.9804 19.8442 13.0112 20.2501 11.9998 20.2501C10.9884 20.2501 10.0193 19.8442 9.30992 19.1235L3.91412 13.6447C1.69503 11.3643 1.69503 7.73159 3.93137 5.43403L4.13608 5.23724C5.18336 4.28122 6.55111 3.75012 7.97113 3.75012C9.48356 3.75012 10.9332 4.35239 12.0001 5.42281L12.1671 5.26144ZM19.0131 6.50027C18.2258 5.70039 17.1504 5.24994 16.028 5.24994C14.9057 5.24994 13.8303 5.70038 13.0428 6.5004L12.5338 7.01732C12.24 7.31564 11.7588 7.31563 11.465 7.01731L10.9557 6.50019C10.1684 5.70035 9.09306 5.24994 7.97074 5.24994C6.92518 5.24994 5.91806 5.641 5.16161 6.33118L4.98875 6.49711C3.33631 8.19521 3.33631 10.9003 4.98561 12.5952L10.3784 18.0709C10.806 18.5053 11.3899 18.7499 11.9994 18.7499C12.6089 18.7499 13.1929 18.5053 13.6206 18.0708L19.0101 12.5985C20.607 10.9574 20.666 8.364 19.1683 6.66813L19.0131 6.50027Z" fill="#7B7B7B"/>
								</svg>
							</span>
						</div>
					</div>
					<div class="products-item__name">
						iPhone 13 Pro Max" (M1 Max, 10 CPU/32 GPU 2021) 64 ГБ, 8 Тб SSD
					</div>
					<div class="products-item__price">
						11.800.000 Сум
					</div>
					<a href="#" class="products-item__link"></a>
				</div>
			</div>
		</div>
	</section>
