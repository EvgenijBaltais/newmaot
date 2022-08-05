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

		<h1 class = "secondary-h1">Способы оплаты и возврат</h1>

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
				<div class = "pay-left-nav">
					<h2 class="single-block-title left-block-bedroom">
						Навигация
					</h2>
					<div class = "left-nav-block">
						<ul class = "left-nav-list">
							<li class = "left-nav-item">
								<a class = "left-nav-link" href="">Платежи. Оплата банковской картой онлайн</a>
							</li>
							<li class = "left-nav-item">
								<a class = "left-nav-link" href="">Гарантии Безопасности</a>
							</li>
							<li class = "left-nav-item">
								<a class = "left-nav-link" href="">Безопасность Онлайн Платежей</a>
							</li>
							<li class = "left-nav-item">
								<a class = "left-nav-link" href="">Возврат Товаров</a>
							</li>
							<li class = "left-nav-item">
								<a class = "left-nav-link" href="">Конфиденциальность</a>
								<ul class="left-nav-list__sub">
									<li class = "left-nav-item">
										<a href="" class = "left-nav-link">Определения</a>
									</li>
									<li class = "left-nav-item">
										<a href="" class = "left-nav-link">Использование информации</a>
									</li>
									<li class = "left-nav-item">
										<a href="" class = "left-nav-link">Ссылки</a>
									</li>
									<li class = "left-nav-item">
										<a href="" class = "left-nav-link">Ограничение ответственности</a>
									</li>
									<li class = "left-nav-item">
										<a href="" class = "left-nav-link">Контакты</a>
									</li>
								</ul>
							</li>
							<li class = "left-nav-item">
								<a class = "left-nav-link" href="">Проведение операции оплаты товаров/услуг в сети интернет</a>
							</li>
							<li class = "left-nav-item">
								<a class = "left-nav-link" href="">Отмена операции оплаты товаров/услуг в интернете</a>
							</li>
							<li class = "left-nav-item">
								<a class = "left-nav-link" href="">Операция возврата товара (отказа от услуг), оплаченных картой в сети интернет.</a>
							</li>
							<li class = "left-nav-item">
								<a class = "left-nav-link" href="">Юридическое лицо</a>
							</li>
						</ul>
					</div>
					<h2 class="single-block-title left-block-bedroom">
						Супер цена!
					</h2>
					<div class = "left-nav-block super-prices">
						<div class="super-prices-item">
							<div class="super-prices-item__name">
								<a href="" class="super-prices-item__link">Bridge Resort(Сочи)</a>
							</div>
							<div class="super-prices-item__price">
								<p class="super-prices-item__number">
									<span>от 4500</span>&nbsp;&#8381;
								</p>
							</div>
						</div>
						<div class="super-prices-item">
							<div class="super-prices-item__name">
								<a href="" class="super-prices-item__link">Country Resort</a>
							</div>
							<div class="super-prices-item__price">
								<p class="super-prices-item__number">
									<span>от 4500</span>&nbsp;&#8381;
								</p>
							</div>
						</div>
						<div class="super-prices-item">
							<div class="super-prices-item__name">
								<a href="" class="super-prices-item__link">Mriya Resort</a>
							</div>
							<div class="super-prices-item__price">
								<p class="super-prices-item__number">
									<span>от 4500</span>&nbsp;&#8381;
								</p>
							</div>
						</div>
						<div class="super-prices-item">
							<div class="super-prices-item__name">
								<a href="" class="super-prices-item__link">Respect Hall</a>
							</div>
							<div class="super-prices-item__price">
								<p class="super-prices-item__number">
									<span>от 4500</span>&nbsp;&#8381;
								</p>
							</div>
						</div>
						<div class="super-prices-item">
							<div class="super-prices-item__name">
								<a href="" class="super-prices-item__link">Атлас Парк Отель</a>
							</div>
							<div class="super-prices-item__price">
								<p class="super-prices-item__number">
									<span>от 4500</span>&nbsp;&#8381;
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class = "pay-right">
				<h2 class="single-block-title">
					Введение
				</h2>
				<div class = "pay-page-content">
					<p class = "pay-page-content__text">
						Оплата происходит через авторизационный сервер процессингового центра ПАО «Промсвязьбанк» с использованием банковских карт следующих платежных систем:
					</p>
					<div class = "pay-icons">
						<img src="" alt="" class = "pay-icons__items">
						<img src="" alt="" class = "pay-icons__items">
						<img src="" alt="" class = "pay-icons__items">
					</div>
					<p class = "pay-page-content__text">
						При оплате заказа банковской картой обработка информации и платежа происходит на авторизационном сервере
						 процессингового центра Банка. Это значит, что Ваши конфиденциальные данные (реквизиты карты) не
						  поступают в интернет-магазин. Информация по защищенному каналу связи SSL передается в зашифрованном
						   виде напрямую на авторизационный сервер Промсвязьбанка.
					</p>
					<p class = "pay-page-content__text">Для передачи информации используются специальные технологии безопасности интернет-платежей Verifed by Visa,
						 MasterCard SecureCode и MIR Accept. Все операции по Вашей карте осуществляются при полном
						  соблюдении требований VISA International, MasterCard Worldwide и МИР. 
						  Безопасность обработки интернет-платежей через Промсвязьбанк гарантирована
						   международным сертификатом безопасности PCI DSS.
					</p>

					<h2 class="single-block-title">
						Платежи. Оплата банковской картой онлайн.
					</h2>
					<p class = "pay-page-content__text">Наш сайт подключен к интернет-эквайрингу, и Вы можете оплатить Товар банковской картой Visa или Mastercard. 
						После подтверждения выбранного Товара откроется защищенное окно с платежной страницей процессингового центра 
						CloudPayments или ПАО "Промсвязьбанк", где Вам необходимо ввести данные Вашей банковской карты.
						 Для дополнительной аутентификации держателя карты используется протокол 3D Secure. Если Ваш Банк 
						 поддерживает данную технологию, Вы будете перенаправлены на его сервер для дополнительной идентификации.
						 Информацию о правилах и методах дополнительной идентификации уточняйте в Банке, выдавшем Вам банковскую карту.
					</p>

					<h2 class="single-block-title">
						Гарантии Безопасности.
					</h2>
					<p class = "pay-page-content__text">Процессинговые центры CloudPayments и ПАО "Промсвязьбанк" защищают и обрабатывают данные Вашей банковской карты по
						 стандарту безопасности PCI DSS 3.0. Передача информации в платежный шлюз происходит с применением 
						 технологии шифрования SSL. Дальнейшая передача информации происходит по закрытым банковским сетям, 
						 имеющим наивысший уровень надежности. CloudPayments и ПАО "Промсвязьбанк" не передают данные Вашей 
						 карты нам и иным третьим лицам. Для дополнительной аутентификации держателя карты используется протокол 
						 3D Secure. В случае, если у Вас есть вопросы по совершенному платежу, 
						Вы можете обратиться в службу поддержки клиентов по электронной почте support@cloudpayments.ru или support@paykeeper.ru.
					</p>

					<h2 class="single-block-title">
						Безопасность Онлайн Платежей.
					</h2>
					<p class = "pay-page-content__text">Предоставляемая Вами персональная информация (имя, адрес, телефон, e-mail, номер кредитной карты) 
						является конфиденциальной и не подлежит разглашению. Данные Вашей кредитной карты передаются только
						 в зашифрованном виде и не сохраняются на нашем Web-сервере. Все операции с платежными картами происходят
						 в соответствии с требованиями VISA International, MasterCard и других платежных систем. При передаче информации 
						 используется специальные технологии безопасности
						 карточных онлайн-платежей, обработка данных ведется на безопасном высокотехнологичном сервере процессинговой компании.
					</p>

					<h2 class="single-block-title">
						Возврат Товаров
					</h2>
					<p class = "pay-page-content__text">Постановление Правительства РФ от 19 января 1998 г. В случае обнаружения недостатков товара,
						 свойства которого не позволяют устранить их (продовольственные товары, парфюмерно-косметические изделия,
						  товары бытовой химии и другие товары), покупатель вправе по своему выбору потребовать замены такого товара
						   товаром надлежащего качества либо соразмерного уменьшения покупной цены. Вместо предъявления указанных
						    требований покупатель вправе отказаться от приобретенного товара и потребовать возврата уплаченной за
							 товар денежной суммы. При этом покупатель по требованию продавца и за его счет должен возвратить 
							 полученный товар ненадлежащего качества.
					</p>

					<h2 class="single-block-title">
						Конфиденциальность
					</h2>
					<p class = "pay-page-content__text-bold">Определения</p>
					<p class = "pay-page-content__text">Интернет проект maot.ru (далее – URL, «мы») серьезно относится к вопросу конфиденциальности информации своих клиентов и
						 посетителей сайта maot.ru (далее – «вы», «посетители сайта»). Персонифицированной мы называем информацию, 
						 содержащую персональные данные (например: ФИО, логин или название компании) посетителя сайта, а 
						 также информацию о действиях совершаемых вами на сайте URL. (например: заказ посетителя сайта
						  с его контактной информацией). Анонимными мы называем данные, которые невозможно однозначно
						   идентифицировать с конкретным посетителем сайта (например: статистика посещаемости сайта).
					</p>

					<p class = "pay-page-content__text-bold">Использование информации</p>
					<p class = "pay-page-content__text">Мы используем персонифицированную информацию конкретного посетителя сайта исключительно для обеспечения
						 ему качественного оказания услуг и их учета. Мы не раскрываем персонифицированных данных одних посетителей сайта URL
						 другим посетителям сайта. Мы никогда не публикуем персонифицированную информацию в открытом доступе и не передаем ее
						 третьим лицам Исключением являются лишь ситуации, когда предоставление такой информации уполномоченным государственным 
						 органам предписано действующим законодательством Российской Федерации. Мы публикуем и распространяем только отчеты, построенные 
						 на основании собранных анонимных данных. При этом отчеты не содержат информацию, по которой было бы возможным идентифицировать 
						 персонифицированные данные пользователей услуг. 
						Мы также используем анонимные данные для внутреннего анализа, целью которого является развитие продуктов и услуг URL.
					</p>

					<p class = "pay-page-content__text-bold">Ссылки</p>
					<p class = "pay-page-content__text">Сайт maot.ru может содержать ссылки на другие сайты, 
						не имеющие отношения к нашей компании и принадлежащие третьим лицам. Мы не несем ответственности 
						за точность, полноту и достоверность сведений, размещенных на сайтах третьих лиц, и не берем на себя никаких 
						обязательств по сохранению конфиденциальности информации, оставленной вами на таких сайтах.
					</p>

					<p class = "pay-page-content__text-bold">Ограничение ответственности</p>
					<p class = "pay-page-content__text">Мы делаем все возможное для соблюдения настоящей политики конфиденциальности,
						 однако, мы не можем гарантировать сохранность информации в случае воздействия факторов находящихся вне нашего
						  влияния, результатом действия которых станет раскрытие информации. Сайт maot.ru и вся размещенная на
						   нем информация представлены по принципу "как есть” без каких-либо гарантий. Мы не несем ответственности
						    за неблагоприятные последствия, а также за любые убытки, причиненные вследствие ограничения доступа 
							к сайту URL или вследствие посещения сайта и использования размещенной на нем информации.
					</p>

					<p class = "pay-page-content__text-bold">Контакты</p>
					<p class = "pay-page-content__text">По вопросам, касающимся настоящей политики, просьба обращаться по телефону 8 (800) 555-33-75</p>

					<div class = "content-subscribe">
						<h2 class = "single-block-title">Подпишитесь на лучшие предложения</h2>
						<div class = "content-s-w">
							<form action="" name = "content-subscribe-form">
								<div class = "content-subscribe-form">
									<div class="content-subscribe-form-inside">
										<input type="text" name = "get-content-subscribe" id = "get-content-subscribe" class = "get-content-subscribe" placeholder = "Укажите свою электронную почту">
										<div class = "get-content-suscribe-btn">
											<button class = "get-content-suscribe__submit">Подписаться</button>
										</div>
									</div>
								</div>
								<div class = "subscribe-agree">
									<input type="checkbox" id="subscribe-checkbox-<?=$i;?>" class = "stylized"> <label for="subscribe-checkbox-<?=$i;?>">
										Хочу получать акции и спецпредложения для своих путешествий</label>
								</div>
							</form>
						</div>
						<h2 class = "single-block-title">Подпишитесь на наши соц. сети</h2>
						<div class="content-subscribe-socials">
							<a class = "content-social-tg-rus">Лучшие отели России</a>
							<a class = "content-social-tg-pdmsk">Лучшие отели Подмосковья</a>
							<a class = "content-social-vk">Все о качественном и доступном отдыхе в Подмосковье</a>
						</div>
					</div>

					<h2 class="single-block-title">
						Проведение операции оплаты товаров/услуг в сети интернет
					</h2>
					<p class = "pay-page-content__text">Держатель карты обращается на сайт Интернет-магазина и формирует заказ на оплату товара/услуг,
						 подтверждает условия оформления заказа 
						(наименование товаров, способ доставки, выбор средства оплаты, сумма платежа) и выбирает в качестве средства оплаты банковскую карту.</p>

					<p class = "pay-page-content__text">Проведение операций оплаты товаров/услуг с использованием банковских карт
						 в сети Интернет осуществляется с применением 3DSecure технологий.</p>
					<p class = "pay-page-content__text">Интернет-магазин обрабатывает заказ и создает запрос в СПЭП на
						 регистрацию заказа Держателя карты. В запросе Интернет-магазина передается набор данных 
						 о заказе – описание заказа, сумма, обратные адреса, на которые необходимо возвращать Держателя
						  карты в случае успешного и в случае неуспешного платежа, и др. В случае успешной регистрации
						   заказа СПЭП возвращает уникальный номер заказа в Интернет-магазин.</p>
					<p class = "pay-page-content__text">Интернет-магазин осуществляет переадресацию Держателя
						 карты на платежную страницу СПЭП, на которой отображаются параметры платежа, также
						  предлагается ввести реквизиты карты. Держатель карты выбирает тип карты, которой 
						  он будет расплачиваться и вводит информацию о параметрах своей карты:
					</p>
					<ul class = "pay-card-list">
						<li class = "pay-card-item">Тип Карты</li>
						<li class = "pay-card-item">Номер Карты</li>
						<li class = "pay-card-item">дату окончания действия карты</li>
						<li class = "pay-card-item">имя и фамилию, как указано на карте</li>
						<li class = "pay-card-item">значения CVC и CVVz</li>
						<li class = "pay-card-item">подтверждает своё согласие оплатить заказ вводом специального пароля</li>
					</ul>

					<p class = "pay-page-content__text">Специальный пароль представляет собой цифровую/буквенно-цифровую последовательность,
						 однозначно идентифицирующую клиента как Держателя карты. Проверка специального пароля обеспечивается банком-эмитентом.</p>

					<p class = "pay-page-content__text">Провайдер услуг проверяет корректность формата вводимых параметров карты и осуществляет 
						дополнительные процедуры аутентификации Держателя карты
						 в соответствии с международными стандартами (3DSecure) и передает запрос на авторизацию операции в Банк.
					</p>

					<p class = "pay-page-content__text">Банк проверяет право Интернет-магазина провести операцию в соответствии с регистрацией и 
						проводит авторизацию операций в установленном соответствующими международными платежными системами порядке.</p>

					<p class = "pay-page-content__text">При получении отрицательного результата авторизации Банк отправляет уведомление об отказе в СПЭП, который, 
						в свою очередь, передает данную информацию Интернет-магазину и Держателю карты, с указанием причин отказа.</p>

					<p class = "pay-page-content__text">При получении положительного результата авторизации Банк передает в СПЭП подтверждение
						 положительного результата авторизации операции. СПЭП одновременно передает подтверждения положительного результата
						  проводимой авторизации операции в Интернет-магазин и Держателю карты.</p>

					<p class = "pay-page-content__text">После получения подтверждения о положительном результате авторизации Интернет-магазин оказывает
						 услугу (осуществляет работу, отпускает товар) Держателю карты.</p>

					<p class = "pay-page-content__text">Обработка успешно авторизованных операций осуществляется автоматически
						 не позднее следующего рабочего дня за днем совершения операции.</p>


						<div class = "between-populars-items">

							<h2 class = "section-title left-block-bedroom">Популярные отели России</h2>
							<div class = "popular-items">
								<? for ($i = 0; $i < 7; $i++): ?>
								<div class = "popular-item">
									<a href="" class = "popular-item__name">Bridge Resort (Сочи)</a>
									<span class = "popular-item__price">от 4 500 &#8381;</span>
								</div>
								<? endfor;?>
							</div>
						</div>

					<h2 class="single-block-title">
						Отмена операции оплаты товаров/услуг в интернете
					</h2>

					<p class = "pay-page-content__text">В случае если после проведения операции оплаты товара/услуг с использованием 
						карты в сети Интернет возникла необходимость ее отмены (Держатель карты отказался от заказа и т.п.), 
						Интернет-магазин может провести отмену операции. Отмена операции осуществляется до проведения Банком 
						процедуры закрытия дня (до 23:59 часов Московского времени дня совершения операции)
						 в соответствии с «Руководством по использованию аппаратно-программного комплекса электронной коммерции».</p>


					<p class = "pay-page-content__text">Для отмены операции после проведения Банком процедуры закрытия дня необходимо заполнить
						 «Заявку на отмену операции» по форме Приложения №5 к настоящему
						  Договору и предоставить ее в Банк.</p>

					<h2 class="single-block-title">
						Операция возврата товара (отказа от услуг), оплаченных картой в сети интернет.
					</h2>

					<p class = "pay-page-content__text">В случае если Держатель карты возвращает товар, Предприятие 
						проверяет наличие данного заказа по своей базе данных и оформляет Заявление на возврат средств 
						(Приложения № 4 к настоящему Договору) и предоставляет его в Банк. Заявление должно быть подписано 
						лицами, имеющими право подписи в соответствии с карточкой с образцами подписей и оттиска печати, и скреплено оттиском печати Предприятия.
						 Банк осуществляет возврат средств по операциям «возврат покупки» на карту, с использованием которой была произведена оплата товара/услуги.
					</p>

					<div class = "law-info">

						<h2 class="single-block-title">
							Юридическое лицо
						</h2>
						<p class = "info-text">
							<span class = "bold-span">Продавец Магазин Отдыха</span> - продажа горящих путевок
						</p>
						<p class = "info-text">
							<span class = "bold-span">Тел./Факс:</span>	8 (495) 648 - 67 - 11
						</p>
						<p class = "info-text">
							<span class = "bold-span">Юр и факт адрес:</span> ул. Бауманская д.6с2.
						</p>
						<p class = "info-text">
							<span class = "bold-span">Офис:</span> Бизнес-центр Виктория Плаза. 8 этаж. 804 офис
						</p>
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