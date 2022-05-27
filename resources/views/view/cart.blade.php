

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
					<div class="buy-head__step" >
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
			{{\Carbon\Carbon::now()->timezone('Asia/Tashkent')}}		
			
			@livewire('buy-basket')
			
			
			<form method="POST" action="{{ route('basket-order-info') }}">
				@csrf
				<!-- Order -->
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
															<input name="first_name" type="text" required>
													</div>
													<div class="buy-order__input">
															<span>{{__('home.Фамилия')}}</span>
															<input name="last_name" type="text" required>
													</div>
													<div class="buy-order__input">
															<span>{{__('home.Телефон')}}</span>
															<input name="phone" type="text" required class="form__tel">
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
								@if(session()->get('cart'))  
									<div class="buy-info__wrap">
												@livewire('basket-total')
									</div>
								@endif
									{{-- <button class="buy-info__btn buy-info__btn-order btn" type="submit" style="width: 100%; margin: 0; padding: 0; border: none; border-radius: 0.4rem;"> --}}
										<a class="buy-info__btn buy-info__btn-order btn">
												{{__('home.Оформление заказа')}}
										</a>
									{{-- </button> --}}
							</div>
						</div>
				</div>

				<!-- Payment -->
				<div class="buy-pay">
					<h2 class="buy__title">
							{{__('home.Способ оплаты')}}
					</h2>
					<div class="buy-wrap">
							<div class="buy-main">
									<div class="buy-cards">
											<label for="card1">
													<input type="radio" value="apelsin" name="card" id="card1">
													<div>
															<img src="img/pay1.png" alt="pay">
													</div>
											</label>
											<label for="card2">
													<input type="radio" value="payme" name="card" id="card2">
													<div>
															<img src="img/pay2.png" alt="pay">
													</div>
											</label>
											<label for="card3">
													<input type="radio" value="click" name="card" id="card3">
													<div>
															<img src="img/pay3.png" alt="pay">
													</div>
											</label>
											<label for="card4">
													<input type="radio" value="cash" name="card" id="card4">
													<div>
															<span>{{__('home.Наличными')}}</span>
													</div>
											</label>
									</div>
							</div>
							<div class="buy-info">
								@if(session()->get('cart'))
									<div class="buy-info__wrap">
											@livewire('basket-total')
									</div>
								@endif
								<button type="submit" class="btn last-btn" style="width: 100%; background-color: #3D69FB; height: 3.2rem; font-size: 1rem;">
										{{__('home.Оформление заказа')}}
								</button>
							</div>
					</div>
				</div>
			
			</form>
		</div>
	</section>

