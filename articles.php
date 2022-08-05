<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>New maot</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper">
		<? //require_once('mobile-nav.php');?>
		<header class = "header">
			<div class="main-logo">
				<img src="logo-maot.svg" alt="">
			</div>
			<nav class = "main-nav">
				<ul class = "nav-list">
					<li class = "nav-item">
						<a href="" class = "nav-link">Лучшие направления</a>
					</li>
					<li class = "nav-item">
						<a href="" class = "nav-link">Статьи</a>
					</li>
					<li class = "nav-item">
						<a href="" class = "nav-link">Способы оплаты</a>
					</li>
					<li class = "nav-item">
						<a href="" class = "nav-link">Контакты</a>
					</li>
				</ul>
			</nav>
			<div class="phones">
				<div class = "top-phone-w">
					<a href="tel:+74956486711" class = "top-phone top-chast">+7 495 648 67 11</a>
					<p class = "top-phone-info">Для частных лиц</p>
				</div>
				<div class = "top-phone-w">
					<a href="tel:+74956624928" class = "top-phone top-corp">+7 495 662 49 28</a>
					<p class = "top-phone-info">Корпоративный отдел</p>
				</div>
			</div>
		</header>

		<h1 class = "secondary-h1">Полезные статьи</h1>

		<section class = "main-form">
			<div class="form-titles">
				<a href="" class = "form-titles__item active">Направления</a>
				<a href="" class = "form-titles__item">Отели</a>
			</div>
			<div class = "selection-forms">
				<div class = "selection-form-item">
					<form action="" name = "direction-form" class = "selection-form direction-form" id = "direction-form">
						<div class = "direction-form-w">
							<div class = "direction-form__inside">
								<div class = "direction-form-block direction-form-way">
									<input type="text" name="choose-way" class = "form-way-input" placeholder="Выберите направление" value = "">
								</div>
								<div class = "direction-form-block direction-form-in">
									<input type="text" name="choose-in" class = "form-way-input" placeholder="Заезд" value = "">
								</div>
								<div class = "direction-form-block direction-form-out">
									<input type="text" name="choose-out" class = "form-way-input" placeholder="Выезд" value = "">
								</div>
								<div class = "direction-form-block direction-form-people">
									<input type="text" name="choose-people" class = "form-way-input" placeholder="2 взрослых" value = "">
								</div>
								<div class = "direction-form-block direction-form-submit">
									<button type = "button" class = "direction-form-btn">Найти</button>
								</div>
							</div>
						</div>
						<div class = "direction-ways">
							<a class = "direction-way" href="">Подмосковье</a>
							<a class = "direction-way" href="">Сочи</a>
							<a class = "direction-way" href="">Крым</a>
							<a class = "direction-way" href="">Абхазия</a>
							<a class = "direction-way dont-know-way" href="">Я не знаю, куда хочу поехать</a>
						</div>
					</form>
				</div>
				<div class = "selection-form-item" style = "display:none;">
					<form action="" name = "hotel-form" class = "selection-form hotel-form" id = "hotel-form">
					
					</form>
				</div>
			</div>
		</section>
		<section class = "pay-content">
			<div class = "pay-left">
				<h2 class="single-block-title left-block-bedroom">
					Навигация
				</h2>

				<div class = "left-nav-block">
				</div>
			</div>
			<div class = "pay-right">
				<h2 class="single-block-title">
					Бани и сауны в домах отдыха Подмосковья
				</h2>
				<div class = "pay-page-content">

				</div>
			</div>
		</section>

		<footer class = "footer">
			<div class = "footer-col footer-col-1">
				<h3 class = "footer-col-title">Контакты с нами</h3>
				<div class = "footer-phones">
					<div class = "footer-phones__item">
						<a href="+74956486711" class = "footer-phone">+7 495 648 67 11</a>
						<span class = "footer-phone-info">&nbsp;Для частных лиц</span>
					</div>
					<div class = "footer-phones__item">
						<a href="+74956624928" class = "footer-phone">+7 495 662 49 28</a>
						<span class = "footer-phone-info">&nbsp;Корпоративный отдел</span>
					</div>
				</div>
				<div class = "working-time">
					<h3 class = "footer-title-small">Мы работаем</h3>
					<p class = "footer-title-p">по будням с 9:00 до 21:00</p>
					<p class = "footer-title-p">по выходным с 11:00 до 18:00</p>
				</div>
				<div class = "footer-address">
					<h3 class = "footer-title-small">Адрес</h3>
					<p class="footer-title-p">г. Москва, ул. Бауманская д.6с2. Бизнес-центр Виктория Плаза, 8 этаж, 804 офис</p>
				</div>
			</div>
			<div class = "footer-col footer-col-2">
				<h3 class = "footer-col-title">Наши офисы</h3>
				<div class = "footer-places">
					<a href="" class = "footer-place-item">Москва</a>
					<a href="" class = "footer-place-item">Санкт-Петербург</a>
					<a href="" class = "footer-place-item">Ростов-на-Дону</a>
					<a href="" class = "footer-place-item">Краснодар</a>
					<a href="" class = "footer-place-item">Тула</a>
				</div>
			</div>
			<div class = "footer-col footer-col-3">
				<h3 class = "footer-col-title">Соц. сети</h3>
				<div class = "footer-social-items">
					<a href="" class = "footer-social-item" style = "background-image: url(telegram.svg);">Лучшие отели России</a>
					<a href="" class = "footer-social-item" style = "background-image: url(telegram.svg);">Лучшие отели Подмосковья</a>
					<a href="" class = "footer-social-item" style = "background-image: url(vk.svg);">Все о качественном и доступном отдыхе в Подмосковье</a>
				</div>
			</div>
			<div class = "footer-col footer-col-4">
				<h3 class = "footer-col-title">Оплата</h3>
			</div>
		</footer>
		<div class = "footer-copyright">&#169; 2004-<?=date('Y', $timestamp);?> МАОТ</div>
	</div>
</body>
</html>