<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/main.css">
	<title>Apple Bro</title>
</head>
<body>




	
	<!-- LOGIN LOGIN-REGISTR-->

	<div class="login login-registr">
		<div class="login-content">
			<div class="login__title">
				{{__('home.Регистрация')}}
			</div>
			<div class="login__input">
				<span>{{__('home.Имя')}}</span>
				<input type="text" required>
			</div>
			<div class="login__input">
				<span>{{__('home.Фамилия')}}</span>
				<input type="text" required>
			</div>
			<div class="login__input">
				<span>{{__('home.Телефон')}}</span>
				<input type="tel" class="form__tel" required>
			</div>
			<div class="login__input">
				<span>{{__('home.Введите код')}}</span>
				<input type="text" required>
			</div>
			<button class="login__btn btn disabled">
				{{__('home.Зарегистрироваться')}}
			</button>
			<div class="login__wrap">
				<label for="remember">
					<input type="checkbox" id="remember">
					<span>{{__('home.Запомнить')}}</span>
				</label>
				<a href="#">
					{{__('home.Войти')}}
				</a>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.inputmask.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/ion.rangeSlider.min.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script src="js/map.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>