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

		<section class = "search-result-title">
			Результаты поиска
		</section>

		<section class = "search-result-w">

			<div class = "search-result-left">
				<div class = "search-result-left-w">


					<div class = "aside-block direction-aside-form">
							<h3 class = "aside-block-title">Направление</h3>
						<div class = "aside-form-input-w">
							<input type="text" class = "aside-form-input aside-form__name" placeholder="Подмосковье" value = "Подмосковье">
						</div>
						<div class = "aside-form-input-w aside-form-input-small">
							<input type="text" class = "aside-form-input aside-form__in" placeholder="16 июля" value = "16 июля">
						</div>
						<div class = "aside-form-input-w aside-form-input-small">
							<input type="text" class = "aside-form-input aside-form__out" placeholder="18 июля">
						</div>
						<div class = "aside-form-input-w">
							<input type="text" class = "aside-form-input aside-form__guests" placeholder="3 гостя">
						</div>
						<button type = "button" class = "aside-form__btn">Найти</button>
					</div>

					<div class = "aside-block">
						<h3 class = "aside-block-title">Тип питания</h3>
						<a class="aside-close">Свернуть</a>
						<? for ($i = 0; $i < 5; $i++): ?>
						<div class = "aside-checkbox">
							<input type="checkbox" id="checkbox-<?=$i;?>" class = "stylized"> <label for="checkbox-<?=$i;?>">Завтрак и обед</label>
						</div>
						<? endfor; ?>
					</div>

					<div class = "aside-block">
						<h3 class = "aside-block-title">Дополнительные условия</h3>
						<a class="aside-close">Свернуть</a>
						<? for ($i = 0; $i < 10; $i++): ?>
						<div class = "aside-checkbox">
							<input type="checkbox" id="checkbox-<?=$i;?>" class = "stylized"> <label for="checkbox-<?=$i;?>">Завтрак и обед</label>
						</div>
						<? endfor; ?>
					</div>

				</div>
			</div>

			<div class = "search-result-right">

				<? for ($i = 0; $i < 8; $i++):?>
				<div class="search-item">
					<div class = "search-item-pic" style = "background-image: url('../pic.jpg');"></div>
					<div class = "search-item__content">
						<a class = "search-item__title">Отель Солнечный Park Hotel</a>
						<div class = "search-item__rate">
							<ul class="search-rate__list">
								<li class="search-rate__item search-rate__item-yellow"></li>
								<li class="search-rate__item search-rate__item-yellow"></li>
								<li class="search-rate__item search-rate__item-yellow"></li>
								<li class="search-rate__item search-rate__item-yellow"></li>
								<li class="search-rate__item search-rate__item-grey"></li>
							</ul>
							<span class = "search-rate__reviews">18 отзывов</span>
							<span class = "search-rate__foodtype">Все включено</span>
						</div>
						<ul class = "search-item__list">
							<li class = "search-item__item">Ресторан</li>
							<li class = "search-item__item">SPA</li>
							<li class = "search-item__item">Боулинг</li>
							<li class = "search-item__item">Бильярд</li>
							<li class = "search-item__item">Прокат</li>
							<li class = "search-item__item">Бассейн</li>
							<li class = "search-item__item">Бар</li>
							<li class = "search-item__item">Тренажерный зал</li>
							<li class = "search-item__item">WI-FI</li>
							<li class = "search-item__item">Анимация</li>
							<li class = "search-item__item">Конференц-зал</li>
							<li class = "search-item__item">Детская площадка</li>
							<li class = "search-item__item">Спортивная площадка</li>
							<li class = "search-item__item">Сауна</li>
							<li class = "search-item__item">Водоем</li>
						</ul>
					</div>
					<div class = "search-item__broninfo">
						<div class = "search-item__price">
							<span class = "search-item__price-from">от</span>
							<span class = "search-item__price-number">30 000</span>
							<span class = "search-item__price-currency">&#8381;</span>
						</div>
						<p class = "search-item__nights">цена за <span class = "search-item__nights-number">1</span> ночь</p>
						<button class = "search-item__bron">Выбрать</button>
					</div>
				</div>
				<? endfor; ?>

				<div class="search-item">
					<div class = "search-item-pic" style = "background-image: url('../pic.jpg');"></div>
					<div class = "search-item__content">
						<a class = "search-item__title">Отель Фореста Парк с очень длинным названием</a>
						<div class = "search-item__rate">
							<ul class="search-rate__list">
								<li class="search-rate__item search-rate__item-yellow"></li>
								<li class="search-rate__item search-rate__item-yellow"></li>
								<li class="search-rate__item search-rate__item-yellow"></li>
								<li class="search-rate__item search-rate__item-yellow"></li>
								<li class="search-rate__item search-rate__item-grey"></li>
							</ul>
							<span class = "search-rate__reviews">18 отзывов</span>
							<span class = "search-rate__foodtype">Все включено</span>
						</div>
						<ul class = "search-item__list">
							<li class = "search-item__item">Ресторан</li>
							<li class = "search-item__item">SPA</li>
							<li class = "search-item__item">Боулинг</li>
							<li class = "search-item__item">Бильярд</li>
							<li class = "search-item__item">Прокат</li>
							<li class = "search-item__item">Бассейн</li>
							<li class = "search-item__item">Бар</li>
						</ul>
						<div class = "search-item__adress">
							В 30 км. от МКАД по Симферопольскому шоссе, поворот налево, потом направо, потом налево
						</div>
					</div>
					<div class = "search-item__broninfo">
						<div class = "search-item__price">
							<span class = "search-item__price-from">от</span>
							<span class = "search-item__price-number">30 000</span>
							<span class = "search-item__price-currency">&#8381;</span>
						</div>
						<p class = "search-item__nights">цена за <span class = "search-item__nights-number">1</span> ночь</p>
						<button class = "search-item__bron">Выбрать</button>
					</div>
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