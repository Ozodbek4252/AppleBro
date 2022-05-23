	<section class="products">
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
							<img src="img/apple1.png" alt="product">
						</div>
						<div class="products-carousel__name">
							MacBook Air
						</div>
						<a href="#"></a>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="img/apple1.png" alt="product">
						</div>
						<div class="products-carousel__name">
							MacBook Air
						</div>
						<a href="#"></a>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="img/apple1.png" alt="product">
						</div>
						<div class="products-carousel__name">
							MacBook Air
						</div>
						<a href="#"></a>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="img/apple1.png" alt="product">
						</div>
						<div class="products-carousel__name">
							MacBook Air
						</div>
						<a href="#"></a>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="img/apple1.png" alt="product">
						</div>
						<div class="products-carousel__name">
							MacBook Air
						</div>
						<a href="#"></a>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="img/apple1.png" alt="product">
						</div>
						<div class="products-carousel__name">
							MacBook Air
						</div>
						<a href="#"></a>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="img/apple1.png" alt="product">
						</div>
						<div class="products-carousel__name">
							MacBook Air
						</div>
						<a href="#"></a>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="img/apple1.png" alt="product">
						</div>
						<div class="products-carousel__name">
							MacBook Air
						</div>
						<a href="#"></a>
					</div>
				</div>

			</div>


			<div class="breadcrumbs">
				<a href="{{ Route("home") }}">Home</a>
				<a href="#">Mac</a>
				<a href="#" class="current">Mac Book Air</a>
			</div>
			
			<div class="products-main">

				<div class="products-filter__open">
					{{__('home.Фильтр')}} <img src="img/filter.svg" alt="ico">
				</div>

				<!-- ФИЛЬТР -->
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
							<input type="text" placeholder="150000">
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

				<div class="products-wrap">
					<div class="products-list">
						@foreach($products as $product)
							<div class="products-item">
								<?php 
									$optionArr = [];
									$product_options = \App\Models\ProductOption::where('product_id', $product->id)->get();
									foreach($product_options as $product_option){
											$option = \App\Models\Option::find($product_option->option_id);
											$option["price"] = $product_option->price;
											$optionArr[$option->name][] = $option;
									}
									?>

								<div class="products-item__wrap">
											<div class="products-item__img">
												<img src="img/new1.png" alt="Product">
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
								
								<!-- У КАЖДОГО ТОВАРА ДОЛЖНЫ БЫТЬ УНИКАЛЬНЫЕ АЙДИ У ЦВЕТОВ-->
								<div class="products-item__colors">
											<label for="product1-color1">
												<input type="radio" name="product1-color" id="product1-color1">
												<span style="background: #FCC7A0;"></span>
											</label>
											<label for="product1-color2">
												<input type="radio" name="product1-color" id="product1-color2">
												<span style="background: #455A83;"></span>
											</label>
											<label for="product1-color3">
												<input type="radio" name="product1-color" id="product1-color3">
												<span style="background: #FFFFFF;"></span>
											</label>
								</div>

								<div class="products-item__name">
									{{$product->name}}
									( @foreach($optionArr as $key=>$value)
											{{$key}}
									    @foreach($optionArr[$key] as $option)
												{{ $option['value'] }}@if(!$loop->last)/@endif
											@endforeach @if(!$loop->last), &nbsp;@endif
										@endforeach
									)
								</div>
								<div class="products-item__price">
									from ${{$product->price}} USD
								</div>
								<a href="#" class="products-item__link"></a>
							</div>
						@endforeach
					</div>

					<ul class="products-pagination">
						<li>
							<a href="#" class="current">
								1
							</a>
						</li>
						<li>
							<a href="#">
								2
							</a>
						</li>
						<li>
							<a href="#">
								3
							</a>
						</li>
						<li>
							<a href="#">
								4
							</a>
						</li>
					</ul>
				</div>

			</div>

		</div>
	</section>
