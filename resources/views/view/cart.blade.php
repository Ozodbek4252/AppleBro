

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
			@livewire('buy-basket')

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
										{{__('home.Экспресс-доставка')}}
										<span>от 350 000 uzs</span>
									</div>
								</label>
							</div>
							<div class="buy-order__map">
								<div class="buy-order__title">
									{{__('home.Фирменный магазин')}}
								</div>
								<div class="buy-order__text">
									<p>{{__('home.Невский пр-т')}}, 38</p>
									<p>{{__('home.Открыто')}} с 10:00 до 20:00</p>
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
								{{__('home.Ваш заказ')}}
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
								<li>
									<div class="buy-price__name">
										{{__('home.Доставка')}}
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
						<a href="#" class="buy-info__btn buy-info__btn-order btn">
							{{__('home.Оформление заказа')}}
						</a>
					</div>
				</div>
			</div>


			<!-- ОПЛАТА -->
			<div class="buy-pay">
				<h2 class="buy__title">
					{{__('home.Способ оплаты')}}
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
									<span>{{__('home.Наличными')}}</span>
								</div>
							</label>
						</div>
					</div>
					<div class="buy-info">
						<div class="buy-info__wrap">
							<div class="buy-info__title">
								{{__('home.Ваш заказ')}}
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
								<li>
									<div class="buy-price__name">
										{{__('home.Доставка')}}
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
						<a href="#" class="buy-info__btn buy-info__btn-pay btn">
							{{__('home.Оплатить заказ')}} 
						</a>
					</div>
				</div>
			</div>

		</div>
	</section>

