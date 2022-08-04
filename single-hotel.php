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

		<section class = "single-hotel">

			<div class = "title-block">

				<h1 class = "hotel-title">Курорт-парк Союз (МИД)</h1>
				<p class = "hotel-adress">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae,
					veniam facere dolores fugit cumque illo? Enim laborum consequuntur, 
					ullam voluptas consectetur quis? Aliquid eius quis, consectetur molestiae ipsam id vero?
				</p>
			</div>
			<div class = "hotel-rate-info">
				<ul class = "hotel-rate__list">
					<li class="hotel-rate__item hotel-rate__item-yellow"></li>
					<li class="hotel-rate__item hotel-rate__item-yellow"></li>
					<li class="hotel-rate__item hotel-rate__item-yellow"></li>
					<li class="hotel-rate__item hotel-rate__item-yellow"></li>
					<li class="hotel-rate__item hotel-rate__item-grey"></li>
				</ul>
				<span class = "hotel-rate__reviews">18 отзывов</span>
				<div class="add-to-favorite">
					<a href="" class="add-to-favorite__link">добавить в избранное</a>
				</div>
			</div>

			<div class = "map-slider">
				<div class="hotel-slider">
					<div class = "hotel-slider__main"></div>
					<div class = "hotel-slider__items">
						<div class = "hotel-slider__w">
							<div class = "hotel-slider__item active"></div>
							<div class = "hotel-slider__item"></div>
							<div class = "hotel-slider__item"></div>
							<div class = "hotel-slider__item"></div>
							<div class = "hotel-slider__item"></div>
						</div>
					</div>
				</div>
				<div class = "hotel-map">
					<div class = "hotel-map__place">
						<span>Координаты: </span>
						<a href="" class = "hotel-map__coordinates">55.922899, 38.129345</a>
					</div>
				</div>
			</div>
		</section>

		<section class = "select-dates-content">
			<div class = "select-dates-form-block">
				<h2 class = "hotel-title-h2">Номера на 
					<span class = "select-dates-in">16</span>
					-
					<span class = "select-dates-in">18</span>
					<span class = "select-dates-month">июля</span>
					для
					<span class = "select-dates-adults">2</span>
					взрослых и 
					<span class = "select-dates-children">ребенка</span>
				</h2>

				<form action="">
					<div class = "select-dates-form">
						<div class = "select-dates-form__form">
							<div class = "select-form-items">
								<div class = "select-form-input-w">
									<input type="text" name = "select-form-name" class = "select-form-input select-form-name" placeholder="Курорт-парк Союз(МИД)" value = "Курорт-парк Союз(МИД)">
								</div>
								<div class = "select-form-input-w">
									<input type="text" name = "select-form-in" class = "select-form-input select-form-in" placeholder="16 июля" value = "16 июля">
								</div>
								<div class = "select-form-input-w">
									<input type="text" name = "select-form-out" class = "select-form-input select-form-out" placeholder="18 июля" value = "18 июля">
								</div>
								<div class = "select-form-input-w">
									<input type="text" name = "select-form-guests" class = "select-form-input select-form-guests" placeholder="3 гостя" value = "3 гостя">
								</div>
							</div>
						</div>
						<button type = "button" class = "select-dates-form__btn">Найти</button>
					</div>
				</form>

				<div class = "select-results">
					<? for ($i = 0; $i < 3; $i++):?>
					<div class="select-results__item">
						<div class="select-results__item-pic" style = ""></div>
						<div class="select-results__item-content">
							<a href=""class="select-item-title">4 местный 23-24 коттедж</a>
							<div class = "select-item-info">
								<div class = "select-item__block select-item__in">
									<span class = "select-item__text">Заезд:</span>
									<span class = "select-item__value select-item__in">16.07.2022</span>
								</div>
								<div class = "select-item__block select-item__adults">
									<span class = "select-item__text">Взрослых:</span>
									<span class = "select-item__value select-item__adults">2</span>
								</div>
								<div class = "select-item__block select-item__out">
									<span class = "select-item__text">Выезд:</span>
									<span class = "select-item__value select-item__out">18.07.2022</span>
								</div>
								<div class = "select-item__block select-item__children">
									<span class = "select-item__text">Детей:</span>
									<span class = "select-item__value select-item__children">1</span>
								</div>
							</div>
						</div>
						<div class="select-results__item-price">
							<div class="select-results-price-info">
								<span class = "select-results-price">90 000</span>&nbsp;
								<span class = "select-results-currency">&#8381;</span>&nbsp;
								<span>за</span>&nbsp;
								<span class = "select-results-nights">3</span>&nbsp;
								<span>ночи</span>
							</div>
							<div class = "select-results-from">
								<span>от</span>
								<span class = "select-from-value">30 000</span>
								<span class = "select-from-currency">&#8381;</span>
							</div>
							<div class = "select-results-from-info">
								<span>цена за</span>
								<span class = "select-results-nights">1</span>
								<span>ночь</span>
							</div>
							<button class = "select-results-bron">Забронировать</button>
						</div>
						<div class="select-results__item-text">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolor accusantium maiores molestiae, 
							itaque atque ratione ipsam quam rem totam magni esse nesciunt, a nostrum harum unde, facere eum deserunt?
						</div>
					</div>
					<? endfor;?>
				</div>
			</div>

			<div class = "select-dates-nav">
				<div class = "select-dates-item">
					<a href="" class = "select-dates-link">Поиск номеров</a>
				</div>
				<div class = "select-dates-item">
					<a href="" class = "select-dates-link">Описание отеля</a>
				</div>
				<div class = "select-dates-item">
					<a href="" class = "select-dates-link">Номера</a>
				</div>
				<div class = "select-dates-item">
					<a href="" class = "select-dates-link">Инфраструктура</a>
				</div>
				<div class = "select-dates-item">
					<a href="" class = "select-dates-link">Развлечения</a>
				</div>
				<div class = "select-dates-item">
					<a href="" class = "select-dates-link">Контакты</a>
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