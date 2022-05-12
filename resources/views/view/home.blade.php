@extends('layouts.front')

@section('content')

	<!-- КОРЗИНА-->

	<div class="basket">
		<div class="basket-item">
			<div class="basket-item__img">
				<img src="/img/apple1.png" alt="product">
			</div>
			<div class="basket-item__wrap">
				<div class="basket-item__name">
					iPhone 13 Pro Max" (M1 Max, 10 CPU/32 GPU 202...
				</div>
				<div class="basket-item__price">
					11 700 000 Cум
				</div>
			</div>
			<div class="basket-item__delete">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M18.75 5.25L5.25 18.75" stroke="#CCCCCC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M18.75 18.75L5.25 5.25" stroke="#CCCCCC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>									
			</div>
		</div>
		<div class="basket-item">
			<div class="basket-item__img">
				<img src="/img/apple1.png" alt="product">
			</div>
			<div class="basket-item__wrap">
				<div class="basket-item__name">
					iPhone 13 Pro Max" (M1 Max, 10 CPU/32 GPU 202...
				</div>
				<div class="basket-item__price">
					11 700 000 Cум
				</div>
			</div>
			<div class="basket-item__delete">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M18.75 5.25L5.25 18.75" stroke="#CCCCCC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M18.75 18.75L5.25 5.25" stroke="#CCCCCC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>									
			</div>
		</div>
		<div class="basket-item">
			<div class="basket-item__img">
				<img src="/img/apple1.png" alt="product">
			</div>
			<div class="basket-item__wrap">
				<div class="basket-item__name">
					iPhone 13 Pro Max" (M1 Max, 10 CPU/32 asasd asdas das asdas ds.
				</div>
				<div class="basket-item__price">
					11 70 Cум
				</div>
			</div>
			<div class="basket-item__delete">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M18.75 5.25L5.25 18.75" stroke="#CCCCCC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M18.75 18.75L5.25 5.25" stroke="#CCCCCC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>									
			</div>
		</div>
		<div class="basket-total">
			<a href="#" class="btn">
				Оформить заказ
			</a>
			<div class="basket-total__price">
				<span>Итого:</span>
				34 679 000 Сум
			</div>
		</div>
	</div>

	<!-- FAVOURITE-->

	<div class="favourite">
		<div class="container">
			<div class="favourite-content">
				<div class="favourite__img">
					<img src="/img/apple1.png" alt="img">
				</div>
				<div class="favourite__name">
					iPhone 13 Pro Max" (M1 Max, 10 CPU/32 GPU 202...
				</div>
				<div class="favourite__btn btn">
					Добавлен в избранное
				</div>
			</div>

			<div class="favourite__close">
				<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="30" cy="30" r="30" fill="#F5F5F7"/>
					<path d="M38.4375 21.5625L21.5625 38.4375" stroke="#191919" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M38.4375 38.4375L21.5625 21.5625" stroke="#191919" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>					
			</div>
		</div>
	</div>

	<!-- MOBILE-MENU -->

	<div class="mobile-menu">
		<div class="container">
			<div class="mobile-menu__head">
				<div class="mobile-menu__close">
					<img src="/img/close.svg" alt="ico">
				</div>
				<div class="mobile-menu__logo">
					<a href="index.html">
						<img src="/img/logo.svg" alt="AppleBro">
					</a>
				</div>
				<div class="mobile-menu__icons">
					<a href="#" class="basket-open">
						<img src="/img/basket.svg" alt="ico">
						<span>2</span>
					</a>
					<a href="#">
						<img src="/img/heart.svg" alt="ico">
						<span>2</span>
					</a>
				</div>
			</div>
			<div class="mobile-menu__search">
				<input type="text" placeholder="Поиск">	
			</div>
			<ul class="mobile-menu__menu">
				<li class="mobile-menu__item">
					<span>
						iPhone
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13 6L8 11L3 6" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>	
					</span>
					<ul class="mobile-menu__submenu">
						<li>
							<a href="#">
								iPhone
							</a>
						</li>
						<li>
							<a href="#">
								iPhone X
							</a>
						</li>
						<li>
							<a href="#">
								iPhone X
							</a>
						</li>
						<li>
							<a href="#">
								iPhone X
							</a>
						</li>
						<li>
							<a href="#">
								iPhone X
							</a>
						</li>
						<li>
							<a href="#">
								iPhone X
							</a>
						</li>
						<li>
							<a href="#">
								iPhone X
							</a>
						</li>
						<li>
							<a href="#">
								iPhone X
							</a>
						</li>
						<li>
							<a href="#">
								iPhone X
							</a>
						</li>
						<li>
							<a href="#">
								iPhone X
							</a>
						</li>
						<li>
							<a href="#">
								iPhone X
							</a>
						</li>
					</ul>
				</li>
				<li class="mobile-menu__item">
					<span>
						Mac
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13 6L8 11L3 6" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>	
					</span>
					<ul class="mobile-menu__submenu">
						<li>
							<a href="#">
								Mac
							</a>
						</li>
						<li>
							<a href="#">
								Mac X
							</a>
						</li>
						<li>
							<a href="#">
								Mac X
							</a>
						</li>
						<li>
							<a href="#">
								Mac X
							</a>
						</li>
					</ul>
				</li>
				<li class="mobile-menu__item">
					<span>
						iPad 
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13 6L8 11L3 6" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>	
					</span>
					<ul class="mobile-menu__submenu">
						<li>
							<a href="#">
								iPad
							</a>
						</li>
						<li>
							<a href="#">
								iPad X
							</a>
						</li>
						<li>
							<a href="#">
								iPad X
							</a>
						</li>
						<li>
							<a href="#">
								iPad X
							</a>
						</li>
					</ul>
				</li>
				<li class="mobile-menu__item">
					<span>
						Apple Watch 
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13 6L8 11L3 6" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>	
					</span>
					<ul class="mobile-menu__submenu">
						<li>
							<a href="#">
								Apple Watch
							</a>
						</li>
						<li>
							<a href="#">
								Apple Watch X
							</a>
						</li>
						<li>
							<a href="#">
								Apple Watch X
							</a>
						</li>
						<li>
							<a href="#">
								Apple Watch X
							</a>
						</li>
					</ul>
				</li>
				<li class="mobile-menu__item">
					<span>
						AirPods
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13 6L8 11L3 6" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>	
					</span>
					<ul class="mobile-menu__submenu">
						<li>
							<a href="#">
								AirPods
							</a>
						</li>
						<li>
							<a href="#">
								AirPods X
							</a>
						</li>
						<li>
							<a href="#">
								AirPods X
							</a>
						</li>
						<li>
							<a href="#">
								AirPods X
							</a>
						</li>
					</ul>
				</li>
				<li class="mobile-menu__item">
					<span>
						Аксессуары
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13 6L8 11L3 6" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>	
					</span>
					<ul class="mobile-menu__submenu">
						<li>
							<a href="#">
								Аксессуары
							</a>
						</li>
						<li>
							<a href="#">
								Аксессуары X
							</a>
						</li>
						<li>
							<a href="#">
								Аксессуары X
							</a>
						</li>
						<li>
							<a href="#">
								Аксессуары X
							</a>
						</li>
					</ul>
				</li>
				<li class="mobile-menu__item">
					<span>
						Другие 
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13 6L8 11L3 6" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>	
					</span>
					<ul class="mobile-menu__submenu">
						<li>
							<a href="#">
								Другие
							</a>
						</li>
						<li>
							<a href="#">
								Другие X
							</a>
						</li>
						<li>
							<a href="#">
								Другие X
							</a>
						</li>
						<li>
							<a href="#">
								Другие X
							</a>
						</li>
					</ul>
				</li>
			</ul>
			<ul class="mobile-menu__profile">
				<li>
					<a href="#">
						<span>Профиль</span>
						<img src="/img/caret-right.svg" alt="ico">
					</a>
				</li>
				<li>
					<a href="#">
						<span>Мои заказы</span>
						<img src="/img/caret-right.svg" alt="ico">
					</a>
				</li>
				<li>
					<a href="#">
						<span>Выход</span>
						<img src="/img/caret-right.svg" alt="ico">
					</a>
				</li>
			</ul>
			<div class="mobile-menu__lang">
				<a href="#">
					O’z
				</a>
				<a href="#">
					Eng
				</a>
				<a href="#" class="current">
					Ру
				</a>
			</div>
		</div>
	</div>

	<!-- HEADER -->

	<!-- MAIN -->
	
	<section class="main">
		<div class="main-carousel owl-carousel">
			<div class="main-carousel__item">
				<div class="container">
					<div class="main-carousel__content">
						<h2 class="main-carousel__title big-title">
							MacBook Pro 16-inch
						</h2>
						<div class="main-carousel__text">
							Cамый мощный MacBook Pro в истории Cамый мощный MacBook Pro в истории.  Cамый мощный MacBook Pro в истории..
						</div>
						<a href="#" class="main-carousel__btn btn">
							Купить
						</a>
					</div>
				</div>
				<div class="main-carousel__img">
					<img src="/img/slider.png" alt="Slider">
				</div>
				<div class="main-carousel__img main-carousel__img-mobi">
					<img src="/img/slider-mobile.png" alt="Slider">
				</div>
			</div>
			<div class="main-carousel__item">
				<div class="container">
					<div class="main-carousel__content">
						<h2 class="main-carousel__title big-title">
							MacBook Pro 16-inch
						</h2>
						<div class="main-carousel__text">
							Cамый мощный MacBook Pro в истории Cамый мощный MacBook Pro в истории.  Cамый мощный MacBook Pro в истории..
						</div>
						<a href="#" class="main-carousel__btn btn">
							Купить
						</a>
					</div>
				</div>
				<div class="main-carousel__img">
					<img src="/img/slider.png" alt="Slider">
				</div>
				<div class="main-carousel__img main-carousel__img-mobi">
					<img src="/img/slider-mobile.png" alt="Slider">
				</div>
			</div>

			<!-- ЕСЛИ ВИДЕО ЕСТЬ ТО КЛАСС main-carousel__item-video -->

			<div class="main-carousel__item main-carousel__item-video">
				<div class="container">
					<div class="main-carousel__content">
						<h2 class="main-carousel__title big-title">
							MacBook Pro 16-inch
						</h2>
						<div class="main-carousel__text">
							Cамый мощный MacBook Pro в истории Cамый мощный MacBook Pro в истории.  Cамый мощный MacBook Pro в истории..
						</div>
						<a href="#" class="main-carousel__btn btn">
							Купить
						</a>
					</div>
				</div>
				<div class="main-carousel__video">
					<video preload="auto" muted="muted" autoplay loop playisinline webkit-playisinline>
						<source src="/video/video.mp4" type="video/mp4">
							Ваш браузер не поддерживает HTML5 видео.
					</video>
				</div>
			</div>

			<div class="main-carousel__item">
				<div class="container">
					<div class="main-carousel__content">
						<h2 class="main-carousel__title big-title">
							MacBook Pro 16-inch
						</h2>
						<div class="main-carousel__text">
							Cамый мощный MacBook Pro в истории Cамый мощный MacBook Pro в истории.  Cамый мощный MacBook Pro в истории..
						</div>
						<a href="#" class="main-carousel__btn btn">
							Купить
						</a>
					</div>
				</div>
				<div class="main-carousel__img">
					<img src="/img/slider.png" alt="Slider">
				</div>
				<div class="main-carousel__img main-carousel__img-mobi">
					<img src="/img/slider-mobile.png" alt="Slider">
				</div>
			</div>
			
		</div>
		<div class="main-arrows">
			<div class="container">
				<span class="arrow-left">
					<svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M30.2539 34.5113L21.7433 26.0006L30.2539 17.49" stroke="#0967C5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>					
				</span>
				<span class="arrow-right">
					<svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M21.7461 34.5113L30.2567 26.0006L21.7461 17.49" stroke="#0967C5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>					
				</span>
			</div>
		</div>
	</section>

	<!-- POPULAR -->
	
	<section class="popular">
		<div class="container">
			<h2 class="popular__title big-title">
				Популярные категории
			</h2>
			<div class="popular-content">
				<div class="popular-item">
					<div class="popular-item__title">
						Смартфоны
					</div>
					<div class="popular-item__price">
						от 11.800.000 Сум
					</div>
					<div class="popular-item__img">
						<img src="/img/popular1.png" alt="popular">
					</div>
					<a href="#" class="popular-item__link"></a>
				</div>
				<div class="popular-item">
					<div class="popular-item__title">
						Часы
					</div>
					<div class="popular-item__price">
						от 11.800.000 Сум
					</div>
					<div class="popular-item__img">
						<img src="/img/popular2.png" alt="popular">
					</div>
					<a href="#" class="popular-item__link"></a>
				</div>
				<div class="popular-item">
					<div class="popular-item__title">
						Аксессуары
					</div>
					<div class="popular-item__price">
						от 11.800.000 Сум
					</div>
					<div class="popular-item__img">
						<img src="/img/popular3.png" alt="popular">
					</div>
					<a href="#" class="popular-item__link"></a>
				</div>
				<div class="popular-item">
					<div class="popular-item__title">
						Планшеты
					</div>
					<div class="popular-item__price">
						от 11.800.000 Сум
					</div>
					<div class="popular-item__img">
						<img src="/img/popular4.png" alt="popular">
					</div>
					<a href="#" class="popular-item__link"></a>
				</div>
				<div class="popular-item">
					<div class="popular-item__title">
						MacBook
					</div>
					<div class="popular-item__price">
						от 11.800.000 Сум
					</div>
					<div class="popular-item__img">
						<img src="/img/popular5.png" alt="popular">
					</div>
					<a href="#" class="popular-item__link"></a>
				</div>
				<div class="popular-item">
					<div class="popular-item__title">
						Б / У продукция
					</div>
					<div class="popular-item__price">
						от 11.800.000 Сум
					</div>
					<div class="popular-item__img">
						<img src="/img/popular6.png" alt="popular">
					</div>
					<a href="#" class="popular-item__link"></a>
				</div>
			</div>
		</div>
	</section>

	<!-- NEW -->
	
	<section class="new">
		<div class="container">
			<h2 class="new__title medium-title">
				Новое поступление
			</h2>
			<div class="new-content">
				<div class="new-item">
					<div class="new-item__wrap">
						<div class="new-item__tag">
							NEW
						</div>
						<div class="new-item__img">
							<img src="/img/new1.png" alt="Product">
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
							<span class="new-item__fav">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M12.1671 5.26144C13.1502 4.35261 14.4229 3.81953 15.7602 3.75644L16.0284 3.75012C17.5527 3.75012 19.0132 4.36188 20.0979 5.46437L20.2807 5.66182C22.3094 7.95844 22.2302 11.4408 20.0823 13.648L14.6899 19.1234C13.9804 19.8442 13.0112 20.2501 11.9998 20.2501C10.9884 20.2501 10.0193 19.8442 9.30992 19.1235L3.91412 13.6447C1.69503 11.3643 1.69503 7.73159 3.93137 5.43403L4.13608 5.23724C5.18336 4.28122 6.55111 3.75012 7.97113 3.75012C9.48356 3.75012 10.9332 4.35239 12.0001 5.42281L12.1671 5.26144ZM19.0131 6.50027C18.2258 5.70039 17.1504 5.24994 16.028 5.24994C14.9057 5.24994 13.8303 5.70038 13.0428 6.5004L12.5338 7.01732C12.24 7.31564 11.7588 7.31563 11.465 7.01731L10.9557 6.50019C10.1684 5.70035 9.09306 5.24994 7.97074 5.24994C6.92518 5.24994 5.91806 5.641 5.16161 6.33118L4.98875 6.49711C3.33631 8.19521 3.33631 10.9003 4.98561 12.5952L10.3784 18.0709C10.806 18.5053 11.3899 18.7499 11.9994 18.7499C12.6089 18.7499 13.1929 18.5053 13.6206 18.0708L19.0101 12.5985C20.607 10.9574 20.666 8.364 19.1683 6.66813L19.0131 6.50027Z" fill="#7B7B7B"/>
								</svg>
							</span>
						</div>
					</div>
					<div class="new-item__name">
						iPhone 13 Pro Max
					</div>
					<div class="new-item__price">
						11.800.000 Сум
					</div>
					<a href="#" class="new-item__link"></a>
				</div>
				<div class="new-item">
					<div class="new-item__wrap">
						<div class="new-item__tag">
							NEW
						</div>
						<div class="new-item__img">
							<img src="/img/new2.png" alt="Product">
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
							<span class="new-item__fav">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M12.1671 5.26144C13.1502 4.35261 14.4229 3.81953 15.7602 3.75644L16.0284 3.75012C17.5527 3.75012 19.0132 4.36188 20.0979 5.46437L20.2807 5.66182C22.3094 7.95844 22.2302 11.4408 20.0823 13.648L14.6899 19.1234C13.9804 19.8442 13.0112 20.2501 11.9998 20.2501C10.9884 20.2501 10.0193 19.8442 9.30992 19.1235L3.91412 13.6447C1.69503 11.3643 1.69503 7.73159 3.93137 5.43403L4.13608 5.23724C5.18336 4.28122 6.55111 3.75012 7.97113 3.75012C9.48356 3.75012 10.9332 4.35239 12.0001 5.42281L12.1671 5.26144ZM19.0131 6.50027C18.2258 5.70039 17.1504 5.24994 16.028 5.24994C14.9057 5.24994 13.8303 5.70038 13.0428 6.5004L12.5338 7.01732C12.24 7.31564 11.7588 7.31563 11.465 7.01731L10.9557 6.50019C10.1684 5.70035 9.09306 5.24994 7.97074 5.24994C6.92518 5.24994 5.91806 5.641 5.16161 6.33118L4.98875 6.49711C3.33631 8.19521 3.33631 10.9003 4.98561 12.5952L10.3784 18.0709C10.806 18.5053 11.3899 18.7499 11.9994 18.7499C12.6089 18.7499 13.1929 18.5053 13.6206 18.0708L19.0101 12.5985C20.607 10.9574 20.666 8.364 19.1683 6.66813L19.0131 6.50027Z" fill="#7B7B7B"/>
								</svg>
							</span>
						</div>
					</div>
					<div class="new-item__name">
						iPhone 13 Pro Max
					</div>
					<div class="new-item__price">
						11.800.000 Сум
					</div>
					<a href="#" class="new-item__link"></a>
				</div>
				<div class="new-item">
					<div class="new-item__wrap">
						<div class="new-item__tag">
							NEW
						</div>
						<div class="new-item__img">
							<img src="/img/new3.png" alt="Product">
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
							<span class="new-item__fav">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M12.1671 5.26144C13.1502 4.35261 14.4229 3.81953 15.7602 3.75644L16.0284 3.75012C17.5527 3.75012 19.0132 4.36188 20.0979 5.46437L20.2807 5.66182C22.3094 7.95844 22.2302 11.4408 20.0823 13.648L14.6899 19.1234C13.9804 19.8442 13.0112 20.2501 11.9998 20.2501C10.9884 20.2501 10.0193 19.8442 9.30992 19.1235L3.91412 13.6447C1.69503 11.3643 1.69503 7.73159 3.93137 5.43403L4.13608 5.23724C5.18336 4.28122 6.55111 3.75012 7.97113 3.75012C9.48356 3.75012 10.9332 4.35239 12.0001 5.42281L12.1671 5.26144ZM19.0131 6.50027C18.2258 5.70039 17.1504 5.24994 16.028 5.24994C14.9057 5.24994 13.8303 5.70038 13.0428 6.5004L12.5338 7.01732C12.24 7.31564 11.7588 7.31563 11.465 7.01731L10.9557 6.50019C10.1684 5.70035 9.09306 5.24994 7.97074 5.24994C6.92518 5.24994 5.91806 5.641 5.16161 6.33118L4.98875 6.49711C3.33631 8.19521 3.33631 10.9003 4.98561 12.5952L10.3784 18.0709C10.806 18.5053 11.3899 18.7499 11.9994 18.7499C12.6089 18.7499 13.1929 18.5053 13.6206 18.0708L19.0101 12.5985C20.607 10.9574 20.666 8.364 19.1683 6.66813L19.0131 6.50027Z" fill="#7B7B7B"/>
								</svg>
							</span>
						</div>
					</div>
					<div class="new-item__name">
						iPhone 13 Pro Max
					</div>
					<div class="new-item__price">
						11.800.000 Сум
					</div>
					<a href="#" class="new-item__link"></a>
				</div>
				<div class="new-item">
					<div class="new-item__wrap">
						<div class="new-item__tag">
							NEW
						</div>
						<div class="new-item__img">
							<img src="/img/new4.png" alt="Product">
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
							<span class="new-item__fav">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M12.1671 5.26144C13.1502 4.35261 14.4229 3.81953 15.7602 3.75644L16.0284 3.75012C17.5527 3.75012 19.0132 4.36188 20.0979 5.46437L20.2807 5.66182C22.3094 7.95844 22.2302 11.4408 20.0823 13.648L14.6899 19.1234C13.9804 19.8442 13.0112 20.2501 11.9998 20.2501C10.9884 20.2501 10.0193 19.8442 9.30992 19.1235L3.91412 13.6447C1.69503 11.3643 1.69503 7.73159 3.93137 5.43403L4.13608 5.23724C5.18336 4.28122 6.55111 3.75012 7.97113 3.75012C9.48356 3.75012 10.9332 4.35239 12.0001 5.42281L12.1671 5.26144ZM19.0131 6.50027C18.2258 5.70039 17.1504 5.24994 16.028 5.24994C14.9057 5.24994 13.8303 5.70038 13.0428 6.5004L12.5338 7.01732C12.24 7.31564 11.7588 7.31563 11.465 7.01731L10.9557 6.50019C10.1684 5.70035 9.09306 5.24994 7.97074 5.24994C6.92518 5.24994 5.91806 5.641 5.16161 6.33118L4.98875 6.49711C3.33631 8.19521 3.33631 10.9003 4.98561 12.5952L10.3784 18.0709C10.806 18.5053 11.3899 18.7499 11.9994 18.7499C12.6089 18.7499 13.1929 18.5053 13.6206 18.0708L19.0101 12.5985C20.607 10.9574 20.666 8.364 19.1683 6.66813L19.0131 6.50027Z" fill="#7B7B7B"/>
								</svg>
							</span>
						</div>
					</div>
					<div class="new-item__name">
						iPhone 13 Pro Max
					</div>
					<div class="new-item__price">
						11.800.000 Сум
					</div>
					<a href="#" class="new-item__link"></a>
				</div>
			</div>
		</div>
	</section>

	<!-- BRANDS -->
	
	<section class="brands">
		<div class="container">
			<h2 class="brands__title medium-title">
				Бренды
			</h2>
			<div class="brands-content">
				<a href="#" class="brands-item">
					<img src="/img/brand1.png" alt="Brand">
				</a>
				<a href="#" class="brands-item">
					<img src="/img/brand2.png" alt="Brand">
				</a>
				<a href="#" class="brands-item">
					<img src="/img/brand3.png" alt="Brand">
				</a>
			</div>
		</div>
	</section>

	<!-- MAJOR -->

	<section class="major">
		<div class="container">
			<div class="major-wrap">
				<div class="major__name big-title">
					iPhone 13 Pro Max
				</div>
				<div class="major__price">
					от 11.800.000 Сум
				</div>
				<div class="major__img">
					<img src="img/major.png" alt="Main Product">
				</div>
				<a href="#" class="major__link"></a>
			</div>
		</div>
	</section>
	
	<!-- BRANDS-PRODUCT -->

	<section class="brands-product">
		<div class="container">
			<h2 class="brands-product__title medium-title">
				Apple
			</h2>
			<div class="brands-product__content">
				<div class="brands-product__item">
					<div class="brands-product__name">
						Mac
					</div>
					<div class="brands-product__img">
						<img src="img/apple1.png" alt="Apple">
					</div>
					<a href="#" class="brands-product__link"></a>
				</div>
				<div class="brands-product__item">
					<div class="brands-product__name">
						iPhone
					</div>
					<div class="brands-product__img">
						<img src="img/apple2.png" alt="Apple">
					</div>
					<a href="#" class="brands-product__link"></a>
				</div>
				<div class="brands-product__item">
					<div class="brands-product__name">
						Watch
					</div>
					<div class="brands-product__img">
						<img src="img/apple3.png" alt="Apple">
					</div>
					<a href="#" class="brands-product__link"></a>
				</div>
				<div class="brands-product__item">
					<div class="brands-product__name">
						AirPods
					</div>
					<div class="brands-product__img">
						<img src="img/apple4.png" alt="Apple">
					</div>
					<a href="#" class="brands-product__link"></a>
				</div>
				<div class="brands-product__item">
					<div class="brands-product__name">
						iPod
					</div>
					<div class="brands-product__img">
						<img src="img/apple5.png" alt="Apple">
					</div>
					<a href="#" class="brands-product__link"></a>
				</div>
				<div class="brands-product__item">
					<div class="brands-product__name">
						Others
					</div>
					<div class="brands-product__other">
						72+ 
					</div>
					<a href="#" class="brands-product__link"></a>
				</div>
			</div>
		</div>
	</section>

	<!-- BRANDS-PRODUCT -->

	<section class="brands-product">
		<div class="container">
			<h2 class="brands-product__title medium-title">
				Samsung
			</h2>
			<div class="brands-product__content">
				<div class="brands-product__item">
					<div class="brands-product__name">
						Galaxy Series Note
					</div>
					<div class="brands-product__img">
						<img src="img/samsung1.png" alt="Samsung">
					</div>
					<a href="#" class="brands-product__link"></a>
				</div>
				<div class="brands-product__item">
					<div class="brands-product__name">
						Galaxy Series S
					</div>
					<div class="brands-product__img">
						<img src="img/samsung2.png" alt="Samsung">
					</div>
					<a href="#" class="brands-product__link"></a>
				</div>
				<div class="brands-product__item">
					<div class="brands-product__name">
						Galaxy Series A
					</div>
					<div class="brands-product__img">
						<img src="img/samsung3.png" alt="Samsung">
					</div>
					<a href="#" class="brands-product__link"></a>
				</div>
				<div class="brands-product__item">
					<div class="brands-product__name">
						Galaxy Series M
					</div>
					<div class="brands-product__img">
						<img src="img/samsung4.png" alt="Samsung">
					</div>
					<a href="#" class="brands-product__link"></a>
				</div>
				<div class="brands-product__item">
					<div class="brands-product__name">
						Galaxy Series S
					</div>
					<div class="brands-product__img">
						<img src="img/samsung5.png" alt="Samsung">
					</div>
					<a href="#" class="brands-product__link"></a>
				</div>
				<div class="brands-product__item">
					<div class="brands-product__name">
						Galaxy Series M
					</div>
					<div class="brands-product__img">
						<img src="img/samsung6.png" alt="Samsung">
					</div>
					<a href="#" class="brands-product__link"></a>
				</div>
				<div class="brands-product__item">
					<div class="brands-product__name">
						Others
					</div>
					<div class="brands-product__other">
						72+ 
					</div>
					<a href="#" class="brands-product__link"></a>
				</div>
				
			</div>
		</div>
	</section>

	<!-- BRANDS-PRODUCT -->

	<section class="brands-product">
		<div class="container">
			<h2 class="brands-product__title medium-title">
				Xiaomi
			</h2>
			<div class="brands-product__content">
				<div class="brands-product__item">
					<div class="brands-product__name">
						Galaxy Series Note
					</div>
					<div class="brands-product__img">
						<img src="img/xiaomi1.png" alt="Xiaomi">
					</div>
					<a href="#" class="brands-product__link"></a>
				</div>
				<div class="brands-product__item">
					<div class="brands-product__name">
						Galaxy Series A
					</div>
					<div class="brands-product__img">
						<img src="img/xiaomi2.png" alt="Xiaomi">
					</div>
					<a href="#" class="brands-product__link"></a>
				</div>
				<div class="brands-product__item">
					<div class="brands-product__name">
						Galaxy Series S
					</div>
					<div class="brands-product__img">
						<img src="img/xiaomi3.png" alt="Xiaomi">
					</div>
					<a href="#" class="brands-product__link"></a>
				</div>
				<div class="brands-product__item">
					<div class="brands-product__name">
						Others
					</div>
					<div class="brands-product__other">
						72+ 
					</div>
					<a href="#" class="brands-product__link"></a>
				</div>
			</div>
		</div>
	</section>

	<!-- BANNERS -->

	<section class="banners">
		<div class="container">
			<div class="banners-content">
				<a href="#" class="banners-item">
					<img src="img/banner.png" alt="Banner">
				</a>
				<a href="#" class="banners-item">
					<img src="img/banner.png" alt="Banner">
				</a>
			</div>
		</div>
	</section>

	<!-- SERVICES -->

	<section class="services">
		<div class="container">
			<h2 class="services__title medium-title">
				Популярные услуги
			</h2>
			<div class="services-content">
				<div class="services-item">
					<div class="services-item__ico">
						<img src="img/services1.png" alt="ico">
					</div>
					<div class="services-item__wrap">
						<div class="services-item__title">
							Trade-in
						</div>
						<div class="services-item__text">
							Возврат и обмен в течении 14 дней, согласно Закону UZB о защите прав потребителей
						</div>
					</div>
				</div>
				<div class="services-item">
					<div class="services-item__ico">
						<img src="img/services2.png" alt="ico">
					</div>
					<div class="services-item__wrap">
						<div class="services-item__title">
							Гарантия
						</div>
						<div class="services-item__text">
							Мы предоставляем гарантию от трех месяцев от магазина, а также можем расширить её до трех лет
						</div>
					</div>
				</div>
				<div class="services-item">
					<div class="services-item__ico">
						<img src="img/services3.png" alt="ico">
					</div>
					<div class="services-item__wrap">
						<div class="services-item__title">
							Гибкая оплата
						</div>
						<div class="services-item__text">
							Оплачивайте так, как Вам удобно: Наличкой в магазине, терминалом, переводом на карту
						</div>
					</div>
				</div>
				<div class="services-item">
					<div class="services-item__ico">
						<img src="img/services4.png" alt="ico">
					</div>
					<div class="services-item__wrap">
						<div class="services-item__title">
							Быстрая доставка
						</div>
						<div class="services-item__text">
							Мы доставляем заказы в кратчайшие сроки по всей территории Узбекистана
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@endsection