<<<<<<< HEAD


=======
@extends('layouts.front')

@section('content')
>>>>>>> 64a122dc2a50485733d4c7cf594854ea7f65bc0b

	<section class="buy">
		<div class="container">

			<div class="buy-head">
				<div class="buy-head__wrap">
					<div class="buy-head__step current">
						<div class="buy-head__number">
							1
						</div>
						<div class="buy-head__name">
							{{__('home.Мои заказы')}}
						</div>
					</div>
					<div class="buy-head__step">
						<div class="buy-head__number">
							2
						</div>
						<div class="buy-head__name">
							{{__('home.Оформление заказа')}}
						</div>
					</div>
					<div class="buy-head__step">
						<div class="buy-head__number">
							3
						</div>
						<div class="buy-head__name">
							{{__('home.Способ оплаты')}}
						</div>
					</div>
					<div class="buy-head__line"></div>
				</div>
			</div>

			<!-- КОРЗИНА ПУСТАЯ-->

			<div class="buy-basket">
				<h2 class="buy__title">
					{{__('home.Моя корзина')}}
				</h2>
				<div class="buy-basket__content">
					<div class="buy-basket__item">
						<div class="buy-basket__info">
							<div class="buy-basket__img">
								<img src="img/apple1.png" alt="apple">
							</div>
							<div class="buy-basket__text">
								<div class="buy-basket__name">
									{{__('home.Беспроводные наушники APPLE AirPods Pro с поддержкой MagSafe')}}
								</div>
								<div class="buy-basket__desc">
									i7/16/512GB Silver 2019
								</div>
							</div>
						</div>
						<div class="buy-basket__wrap">
							<div class="buy-basket__count">
								<span>{{__('home.Количество')}}:</span>
								<div class="buy-basket__count-btns">
									<span class="minus">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M3.75 12H20.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>											
									</span>
									<span class="value">
										1
									</span>
									<span class="plus">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M3.75 12H20.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M12 3.75V20.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>											
									</span>
								</div>
							</div>
							<div class="buy-basket__price">
								<span>{{__('home.Цена')}}:</span>
								<div>168 767 500 сум</div>
							</div>
						</div>
						<div class="buy-basket__delete">
							<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M27 7L5 7.00001" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13 13V21" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M19 13V21" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M25 7.00001V26C25 26.2652 24.8946 26.5196 24.7071 26.7071C24.5196 26.8946 24.2652 27 24 27H8C7.73478 27 7.48043 26.8946 7.29289 26.7071C7.10536 26.5196 7 26.2652 7 26V7" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M21 7V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3H13C12.4696 3 11.9609 3.21071 11.5858 3.58579C11.2107 3.96086 11 4.46957 11 5V7" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>								
						</div>
					</div>
					<div class="buy-basket__item">
						<div class="buy-basket__info">
							<div class="buy-basket__img">
								<img src="img/apple1.png" alt="apple">
							</div>
							<div class="buy-basket__text">
								<div class="buy-basket__name">
									{{__('home.Беспроводные наушники APPLE AirPods Pro с поддержкой MagSafe')}}
								</div>
								<div class="buy-basket__desc">
									i7/16/512GB Silver 2019
								</div>
							</div>
						</div>
						<div class="buy-basket__wrap">
							<div class="buy-basket__count">
								<span>{{__('home.Количество')}}:</span>
								<div class="buy-basket__count-btns">
									<span class="minus">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M3.75 12H20.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>											
									</span>
									<span class="value">
										1
									</span>
									<span class="plus">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M3.75 12H20.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M12 3.75V20.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>											
									</span>
								</div>
							</div>
							<div class="buy-basket__price">
								<span>{{__('home.Цена')}}:</span>
								<div>168 767 500 сум</div>
							</div>
						</div>
						<div class="buy-basket__delete">
							<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M27 7L5 7.00001" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13 13V21" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M19 13V21" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M25 7.00001V26C25 26.2652 24.8946 26.5196 24.7071 26.7071C24.5196 26.8946 24.2652 27 24 27H8C7.73478 27 7.48043 26.8946 7.29289 26.7071C7.10536 26.5196 7 26.2652 7 26V7" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M21 7V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3H13C12.4696 3 11.9609 3.21071 11.5858 3.58579C11.2107 3.96086 11 4.46957 11 5V7" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>								
						</div>
					</div>
					<div class="buy-basket__item">
						<div class="buy-basket__info">
							<div class="buy-basket__img">
								<img src="img/apple1.png" alt="apple">
							</div>
							<div class="buy-basket__text">
								<div class="buy-basket__name">
									{{__('home.Беспроводные наушники APPLE AirPods Pro с поддержкой MagSafe')}}
								</div>
								<div class="buy-basket__desc">
									i7/16/512GB Silver 2019
								</div>
							</div>
						</div>
						<div class="buy-basket__wrap">
							<div class="buy-basket__count">
								<span>{{__('home.Количество')}}:</span>
								<div class="buy-basket__count-btns">
									<span class="minus">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M3.75 12H20.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>											
									</span>
									<span class="value">
										1
									</span>
									<span class="plus">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M3.75 12H20.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M12 3.75V20.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>											
									</span>
								</div>
							</div>
							<div class="buy-basket__price">
								<span>{{__('home.Цена')}}:</span>
								<div>168 767 500 сум</div>
							</div>
						</div>
						<div class="buy-basket__delete">
							<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M27 7L5 7.00001" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13 13V21" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M19 13V21" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M25 7.00001V26C25 26.2652 24.8946 26.5196 24.7071 26.7071C24.5196 26.8946 24.2652 27 24 27H8C7.73478 27 7.48043 26.8946 7.29289 26.7071C7.10536 26.5196 7 26.2652 7 26V7" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M21 7V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3H13C12.4696 3 11.9609 3.21071 11.5858 3.58579C11.2107 3.96086 11 4.46957 11 5V7" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>								
						</div>
					</div>
					<div class="buy-basket__item">
						<div class="buy-basket__info">
							<div class="buy-basket__img">
								<img src="img/apple1.png" alt="apple">
							</div>
							<div class="buy-basket__text">
								<div class="buy-basket__name">
									{{__('home.Беспроводные наушники APPLE AirPods Pro с поддержкой MagSafe')}}
								</div>
								<div class="buy-basket__desc">
									i7/16/512GB Silver 2019
								</div>
							</div>
						</div>
						<div class="buy-basket__wrap">
							<div class="buy-basket__count">
								<span>{{__('home.Количество')}}:</span>
								<div class="buy-basket__count-btns">
									<span class="minus">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M3.75 12H20.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>											
									</span>
									<span class="value">
										1
									</span>
									<span class="plus">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M3.75 12H20.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M12 3.75V20.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>											
									</span>
								</div>
							</div>
							<div class="buy-basket__price">
								<span>{{__('home.Цена')}}:</span>
								<div>168 767 500 сум</div>
							</div>
						</div>
						<div class="buy-basket__delete">
							<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M27 7L5 7.00001" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13 13V21" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M19 13V21" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M25 7.00001V26C25 26.2652 24.8946 26.5196 24.7071 26.7071C24.5196 26.8946 24.2652 27 24 27H8C7.73478 27 7.48043 26.8946 7.29289 26.7071C7.10536 26.5196 7 26.2652 7 26V7" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M21 7V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3H13C12.4696 3 11.9609 3.21071 11.5858 3.58579C11.2107 3.96086 11 4.46957 11 5V7" stroke="#3D69FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>								
						</div>
					</div>
				</div>
				<div class="buy-basket__total">
					<div class="buy-basket__total-wrap">
						<div class="buy-basket__title">
							{{__('home.Продукты')}}(17)
						</div>
						<div class="buy-carousel">
							<div class="buy-carousel__arrows">
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

							<div class="buy-carousel__items owl-carousel">
								<div class="buy-carousel__item">
									<div class="buy-carousel__img">
										<img src="img/apple1.png" alt="product">
									</div>
									<div class="buy-carousel__name">
										MacBook Air MacBook Air MacBook Air
									</div>
									<a href="#"></a>
								</div>
								<div class="buy-carousel__item">
									<div class="buy-carousel__img">
										<img src="img/apple1.png" alt="product">
									</div>
									<div class="buy-carousel__name">
										MacBook Air
									</div>
									<a href="#"></a>
								</div>
								<div class="buy-carousel__item">
									<div class="buy-carousel__img">
										<img src="img/apple1.png" alt="product">
									</div>
									<div class="buy-carousel__name">
										MacBook Air
									</div>
									<a href="#"></a>
								</div>
								<div class="buy-carousel__item">
									<div class="buy-carousel__img">
										<img src="img/apple1.png" alt="product">
									</div>
									<div class="buy-carousel__name">
										MacBook Air
									</div>
									<a href="#"></a>
								</div>
								<div class="buy-carousel__item">
									<div class="buy-carousel__img">
										<img src="img/apple1.png" alt="product">
									</div>
									<div class="buy-carousel__name">
										MacBook Air
									</div>
									<a href="#"></a>
								</div>
								<div class="buy-carousel__item">
									<div class="buy-carousel__img">
										<img src="img/apple1.png" alt="product">
									</div>
									<div class="buy-carousel__name">
										MacBook Air
									</div>
									<a href="#"></a>
								</div>
								<div class="buy-carousel__item">
									<div class="buy-carousel__img">
										<img src="img/apple1.png" alt="product">
									</div>
									<div class="buy-carousel__name">
										MacBook Air
									</div>
									<a href="#"></a>
								</div>
								<div class="buy-carousel__item">
									<div class="buy-carousel__img">
										<img src="img/apple1.png" alt="product">
									</div>
									<div class="buy-carousel__name">
										MacBook Air
									</div>
									<a href="#"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="buy-basket__total-wrap">
						<div class="buy-basket__title">
							{{__('home.Ваш заказ')}}
						</div>
						<ul class="buy-price">
							<li>
								<div class="buy-price__name">
									{{__('home.Продукты')}}(2)
								</div>
								<div class="buy-price__value">
									31 533 500 сум
								</div>
							</li>
							<li>
								<div class="buy-price__name">
									{{__('home.Скидка')}}
								</div>
								<div class="buy-price__value">
									0 сум
								</div>
							</li>
						</ul>
						<div class="buy-total">
							{{__('home.Всего')}}

							<span>31 533 500 сум</span>
						</div>
					</div>
				</div>
				<div class="buy-basket__btn">
					<a href="#" class="buy-info__btn buy-info__btn-basket btn">
						{{__('home.Оплатить заказ')}} 
					</a>
				</div>
			</div>

			<!-- ЗАКАЗ -->

			<div class="buy-order">
				<h2 class="buy__title">
					{{__('home.Оформления заказа')}}
				</h2>
				<div class="buy-wrap">
					<div class="buy-main">
						<div class="buy-order__info">
							<div class="buy-order__title">
								{{__('home.Покупатель')}}
							</div>
							<div class="buy-order__form">
								<div class="buy-order__input">
									<span>{{__('home.Имя')}}</span>
									<input type="text" required>
								</div>
								<div class="buy-order__input">
									<span>{{__('home.Фамилия')}}</span>
									<input type="text" required>
								</div>
								<div class="buy-order__input">
									<span>{{__('home.Телефон')}}</span>
									<input type="text" required class="form__tel">
								</div>
							</div>
						</div>
						<div class="buy-order__wrap">
							<div class="buy-order__type">
								<div class="buy-order__title">
									{{__('home.Доставка')}}
								</div>
								<label for="order1">
									<input type="radio" name="order" id="order1">
									<div>
										{{__('home.Самовывоз')}}
										<span>— {{__('home.бесплатно')}}</span>
									</div>
								</label>
								<label for="order2">
									<input type="radio" name="order" id="order2">
									<div>
										{{__('home.Доставка курьером')}}
										<span>от 350 000 uzs</span>
									</div>
								</label>
								<label for="order3">
									<input type="radio" name="order" id="order3">
									<div>
										Экспресс-доставка
										<span>от 350 000 uzs</span>
									</div>
								</label>
							</div>
							<div class="buy-order__map">
								<div class="buy-order__title">
									Фирменный магазин
								</div>
								<div class="buy-order__text">
									<p>Невский пр-т, 38</p>
									<p>Открыто с 10:00 до 20:00</p>
								</div>
								<div class="map">
									<div id="map"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="buy-info">
						<div class="buy-info__wrap">
							<div class="buy-info__title">
								Ваш заказ
							</div>
							<div class="buy-carousel">
								<div class="buy-carousel__arrows">
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
	
								<div class="buy-carousel__items owl-carousel">
									<div class="buy-carousel__item">
										<div class="buy-carousel__img">
											<img src="img/apple1.png" alt="product">
										</div>
										<div class="buy-carousel__name">
											MacBook Air MacBook Air MacBook Air
										</div>
										<a href="#"></a>
									</div>
									<div class="buy-carousel__item">
										<div class="buy-carousel__img">
											<img src="img/apple1.png" alt="product">
										</div>
										<div class="buy-carousel__name">
											MacBook Air
										</div>
										<a href="#"></a>
									</div>
									<div class="buy-carousel__item">
										<div class="buy-carousel__img">
											<img src="img/apple1.png" alt="product">
										</div>
										<div class="buy-carousel__name">
											MacBook Air
										</div>
										<a href="#"></a>
									</div>
									<div class="buy-carousel__item">
										<div class="buy-carousel__img">
											<img src="img/apple1.png" alt="product">
										</div>
										<div class="buy-carousel__name">
											MacBook Air
										</div>
										<a href="#"></a>
									</div>
									<div class="buy-carousel__item">
										<div class="buy-carousel__img">
											<img src="img/apple1.png" alt="product">
										</div>
										<div class="buy-carousel__name">
											MacBook Air
										</div>
										<a href="#"></a>
									</div>
									<div class="buy-carousel__item">
										<div class="buy-carousel__img">
											<img src="img/apple1.png" alt="product">
										</div>
										<div class="buy-carousel__name">
											MacBook Air
										</div>
										<a href="#"></a>
									</div>
									<div class="buy-carousel__item">
										<div class="buy-carousel__img">
											<img src="img/apple1.png" alt="product">
										</div>
										<div class="buy-carousel__name">
											MacBook Air
										</div>
										<a href="#"></a>
									</div>
									<div class="buy-carousel__item">
										<div class="buy-carousel__img">
											<img src="img/apple1.png" alt="product">
										</div>
										<div class="buy-carousel__name">
											MacBook Air
										</div>
										<a href="#"></a>
									</div>
								</div>
							</div>
							<ul class="buy-price">
								<li>
									<div class="buy-price__name">
										Продукты(2)
									</div>
									<div class="buy-price__value">
										31 533 500 сум
									</div>
								</li>
								<li>
									<div class="buy-price__name">
										Скидка
									</div>
									<div class="buy-price__value">
										0 сум
									</div>
								</li>
								<li>
									<div class="buy-price__name">
										Доставка
									</div>
									<div class="buy-price__value">
										0 сум
									</div>
								</li>
							</ul>
							<div class="buy-total">
								Всего
	
								<span>31 533 500 сум</span>
							</div>
						</div>
						<a href="#" class="buy-info__btn buy-info__btn-order btn">
							Оформление заказа
						</a>
					</div>
				</div>
			</div>


			<!-- ОПЛАТА -->

			<div class="buy-pay">
				<h2 class="buy__title">
					Способ оплаты
				</h2>
				<div class="buy-wrap">
					<div class="buy-main">
						<div class="buy-cards">
							<label for="card1">
								<input type="radio" name="card" id="card1">
								<div>
									<img src="img/pay1.png" alt="pay">
								</div>
							</label>
							<label for="card2">
								<input type="radio" name="card" id="card2">
								<div>
									<img src="img/pay2.png" alt="pay">
								</div>
							</label>
							<label for="card3">
								<input type="radio" name="card" id="card3">
								<div>
									<img src="img/pay3.png" alt="pay">
								</div>
							</label>
							<label for="card4">
								<input type="radio" name="card" id="card4">
								<div>
									<span>Наличными</span>
								</div>
							</label>
						</div>
					</div>
					<div class="buy-info">
						<div class="buy-info__wrap">
							<div class="buy-info__title">
								Ваш заказ
							</div>
							<div class="buy-carousel">
								<div class="buy-carousel__arrows">
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
	
								<div class="buy-carousel__items owl-carousel">
									<div class="buy-carousel__item">
										<div class="buy-carousel__img">
											<img src="img/apple1.png" alt="product">
										</div>
										<div class="buy-carousel__name">
											MacBook Air MacBook Air MacBook Air
										</div>
										<a href="#"></a>
									</div>
									<div class="buy-carousel__item">
										<div class="buy-carousel__img">
											<img src="img/apple1.png" alt="product">
										</div>
										<div class="buy-carousel__name">
											MacBook Air
										</div>
										<a href="#"></a>
									</div>
									<div class="buy-carousel__item">
										<div class="buy-carousel__img">
											<img src="img/apple1.png" alt="product">
										</div>
										<div class="buy-carousel__name">
											MacBook Air
										</div>
										<a href="#"></a>
									</div>
									<div class="buy-carousel__item">
										<div class="buy-carousel__img">
											<img src="img/apple1.png" alt="product">
										</div>
										<div class="buy-carousel__name">
											MacBook Air
										</div>
										<a href="#"></a>
									</div>
									<div class="buy-carousel__item">
										<div class="buy-carousel__img">
											<img src="img/apple1.png" alt="product">
										</div>
										<div class="buy-carousel__name">
											MacBook Air
										</div>
										<a href="#"></a>
									</div>
									<div class="buy-carousel__item">
										<div class="buy-carousel__img">
											<img src="img/apple1.png" alt="product">
										</div>
										<div class="buy-carousel__name">
											MacBook Air
										</div>
										<a href="#"></a>
									</div>
									<div class="buy-carousel__item">
										<div class="buy-carousel__img">
											<img src="img/apple1.png" alt="product">
										</div>
										<div class="buy-carousel__name">
											MacBook Air
										</div>
										<a href="#"></a>
									</div>
									<div class="buy-carousel__item">
										<div class="buy-carousel__img">
											<img src="img/apple1.png" alt="product">
										</div>
										<div class="buy-carousel__name">
											MacBook Air
										</div>
										<a href="#"></a>
									</div>
								</div>
							</div>
							<ul class="buy-price">
								<li>
									<div class="buy-price__name">
										Продукты(2)
									</div>
									<div class="buy-price__value">
										31 533 500 сум
									</div>
								</li>
								<li>
									<div class="buy-price__name">
										Скидка
									</div>
									<div class="buy-price__value">
										0 сум
									</div>
								</li>
								<li>
									<div class="buy-price__name">
										Доставка
									</div>
									<div class="buy-price__value">
										0 сум
									</div>
								</li>
							</ul>
							<div class="buy-total">
								Всего
	
								<span>31 533 500 сум</span>
							</div>
						</div>
						<a href="#" class="buy-info__btn buy-info__btn-pay btn">
							Оплатить заказ 
						</a>
					</div>
				</div>
			</div>

		</div>
	</section>

