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
		<h1 class = "secondary-h1">Контакты</h1>


		<section class = "map">

			<div class = "map-slider-wrapper">
				<ul class = "map-slider-items">
					<li class="map-slider-item">
						<a href = "" class = "map-slider-link">Ростов-на-Дону</a>
					</li>
					<li class="map-slider-item">
						<a href = "" class = "map-slider-link">Краснодар</a>
					</li>
					<li class="map-slider-item">
						<a href = "" class = "map-slider-link">Тула</a>
					</li>
					<li class="map-slider-item active">
						<a href = "" class = "map-slider-link active">Москва</a>
					</li>
					<li class="map-slider-item">
						<a href = "" class = "map-slider-link">Санкт-Петербург</a>
					</li>
					<li class="map-slider-item">
						<a href = "" class = "map-slider-link">Ростов-на-Дону</a>
					</li>
				</ul>
			</div>
			<div class = "map-slider-nav">
				<div class = "our-offices-left"></div>
				<div class = "our-offices-info">Наши офисы расположены по всей России</div>
				<div class = "our-offices-right"></div>
			</div>

			<div class = "map-section">
				<div class = "map-info">
					<p class = "block-subtitle">Как к нам добраться</p>
					<div class = "contact-info-block">
						<p class = "subtitle-bold">Адрес</p>
						<span class = "block-span">г. Москва, ул. Бауманская д.6с2. Бизнес-центр Виктория Плаза, 8 этаж, 804 офис</span>
					</div>
					<div class = "contact-info-block">
						<p class = "subtitle-bold">Телефоны</p>
						<div class = "contact-info__phone">
							<a href="tel:+74956486711" class = "contacts-phone contacts-chast">+7 495 648 67 11</a>
							<span class = "contacts-phone-info">Для частных лиц</span>
						</div>
						<div class = "contact-info__phone">
							<a href="tel:+74956624928" class = "contacts-phone contacts-corp">+7 495 662 49 28</a>
							<span class = "contacts-phone-info">Корпоративный отдел</span>
						</div>
					</div>
					<div class = "contact-info-block">
						<p class = "subtitle-bold">Мы работаем</p>
						<span class = "block-span">по будням с 9:00 до 21:00,<br/>по выходным с 11:00 до 18:00</span>
						<div class = "metro-block">
							<div class = "metro-item">Бауманская</div>
							<div class = "metro-item">Красносельская</div>
						</div>
					</div>
				</div>
				<div class = "map-block">
					<img src="y-map.jpg" alt="" class = "y-map">
				</div>
			</div>
		</section>

		<section class = "vacancy-banner">
			<div class = "vacancy-banner__info">
				<h2 class = "vacancy-title">Работа в сфере туризма!</h2>
				<p class = "vacancy-subtitle">Мы ищем менеджера по продажам во внутреннем туризме.</p>
			</div>
			<div class = "vacancy-banner__btn">
				<p class = "vacancy-banner__p">Никаких холодных звонков, клиенты звонят сами!</p>
			</div>
		</section>

		<section class = "contacts-form">

			<div class = "contacts-callback">
				<h2 class = "contacts-callback__title">Свяжитесь с нами</h2>

				<form action="" name = "contacts-form">
					<div class = "contacts-form-w">
						<input type="text" name = "contacts-name" class = "contacts-form__input contacts-form__name" placeholder="Имя">
						<input type="text" name = "contacts-company" class = "contacts-form__input contacts-form__company" placeholder="Название компании">
						<input type="text" name = "contacts-email" class = "contacts-form__input contacts-form__email" placeholder="Email">
						<input type="text" name = "contacts-phone" class = "contacts-form__input contacts-form__phone" placeholder="Телефон">

						<textarea name="contacts-textarea" class = "contacts-form__textarea" placeholder="Сообщение"></textarea>
						<div class = "contacts-btn-area">
							<div class = "contacts-agree">
								Я соглашаюсь с политикой конфиденциальности
							</div>
							<button class = "contacts-send-btn">Отправить</button>
						</div>
					</div>
				</form>
			</div>
			<div class = "contacts-subscribe">
				<h2 class = "contacts-callback__title">Подпишитесь на лучшие предложения</h2>
				<div class = "contacts-s-w">
					<form action="" name = "contacts-subscribe-form">
						<div class = "contacts-subscribe-form">
							<div class="contacts-subscribe-form-inside">
								<input type="text" name = "get-contacts-subscribe" id = "get-contacts-subscribe" class = "get-contacts-subscribe" placeholder = "Укажите свою электронную почту">
								<div class = "get-contacts-suscribe-btn">
									<button class = "get-contacts-suscribe__submit">Подписаться</button>
								</div>
							</div>
						</div>
						<div class = "subscribe-agree">
							<input type="checkbox" id="subscribe-checkbox-<?=$i;?>" class = "stylized"> <label for="subscribe-checkbox-<?=$i;?>">
							Хочу получать акции и спецпредложения для своих путешествий</label>
						</div>
					</form>
				</div>
				<h2 class = "contacts-callback__title">Подпишитесь на наши соц. сети</h2>
				<div class="contacts-s-w">
					<a class = "contacts-social-tg-rus">Лучшие отели России</a>
					<a class = "contacts-social-tg-pdmsk">Лучшие отели Подмосковья</a>
					<a class = "contacts-social-vk">Все о качественном и доступном отдыхе в Подмосковье</a>
				</div>
				<span class = "contacts-copyright">&#169; 2004-2022. Магазин Отдыха - продажа горящих путевок</span>
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