@extends('layouts.front')

@section('content')
<div>
	<section class="profile">

		<div class="container">
			<div class="profile-side">
				<div class="profile__btn">
					👋 {{__('home.Привет')}}, Hayrulloh
				</div>
				<a href="{{ Route('profile.history') }}" class="profile__btn">
					🚚 {{__('home.История заказов')}}
				</a>
			</div>
			<div class="profile-main">
				<div class="profile__title">
					{{__('home.Профиль')}}
				</div>
				<div class="profile-photo">
					<div class="profile-photo__img">
						<img src="img/user.png" alt="user">
					</div>
					<label for="avatar">
						<input type="file" id="avatar">
						<span>
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.0524 3.69766L12.4435 1.07543C12.2711 0.903907 12.0378 0.807617 11.7946 0.807617C11.5514 0.807617 11.3181 0.903907 11.1457 1.07543L1.89683 10.311L1.05238 13.9554C1.02325 14.0887 1.02425 14.2267 1.0553 14.3595C1.08636 14.4923 1.14669 14.6165 1.23188 14.7229C1.31707 14.8294 1.42497 14.9155 1.5477 14.975C1.67044 15.0344 1.8049 15.0657 1.94127 15.0665C2.00481 15.073 2.06884 15.073 2.13238 15.0665L5.81683 14.2221L15.0524 4.99543C15.2239 4.82304 15.3202 4.58974 15.3202 4.34654C15.3202 4.10335 15.2239 3.87005 15.0524 3.69766ZM5.37238 13.4221L1.91905 14.1465L2.70572 10.7599L9.62572 3.86654L12.2924 6.53321L5.37238 13.4221ZM12.8879 5.88877L10.2213 3.2221L11.7679 1.68432L14.3902 4.35099L12.8879 5.88877Z" fill="#0967C5"/>
							</svg>								
						</span>
					</label>
				</div>
				<div class="profile-item">
					<div class="profile-item__name">
						{{__('home.Имя')}}
					</div>
					<div class="profile-item__value">
						{{$user?->name}}
					</div>
				</div>
				<div class="profile-item">
					<div class="profile-item__name">
						{{__('home.Фамилия')}}
					</div>
					<div class="profile-item__value">
						{{$user->last_name}}
					</div>
				</div>
				<div class="profile-item">
					<div class="profile-item__name">
						{{__('home.Номер телефона')}}
					</div>
					<div class="profile-item__value">
						{{$user->phone}}
					</div>
				</div>
				<div class="profile-item">
					<div class="profile-item__name">
						{{__('home.Адрес доставки')}}
					</div>
					<div class="profile-item__value">
						{{$user->address}}
					</div>
				</div>
				<div class="profile-btns">
					<a href="{{route('home')}}" class="btn">{{__('home.Выход')}}</a>
					<a class="btn profile-edit">{{__('home.Редактировать')}}</a>
				</div>
			</div>
		</div>
	</section>


	<!-- PROFILE POPUP-->

	<div class="profile-popup">
		<div class="profile-popup__content">
			<form action="{{ Route('front.profile.store') }}" method="POST">
				@csrf
				<div class="login__title">
					{{__('home.Профиль')}}
				</div>
				<div class="login__input">
					<span>{{__('home.Имя')}}</span>
					<input name="name" type="text" value="{{$user->name}}" required>
				</div>
				<div class="login__input">
					<span>{{__('home.Фамилия')}}</span>
					<input name="last_name" type="text" value="{{$user->last_name}}">
				</div>
				<div class="login__input">
					<span>{{__('home.Телефон')}}</span>
					<input name="phone" type="tel" class="form__tel" value="{{$user->phone}}">
				</div>
				<div class="login__input">
					<span>{{__('home.Адрес')}}</span>
					<input name="address" type="text" value="{{$user->address}}">
				</div>
				<div class="profile-popup__btns">
					<a class="btn reset">{{__('home.Сбросить')}}</a>
					<button type="submit" style="background-color: #0967c5; width: 49%; color: #fff; border-radius: .4rem; border: none">
						{{__('home.Сохранить')}}
					</button>
				</div>
			</form>
		</div>
	</div>

</div>

@endsection
