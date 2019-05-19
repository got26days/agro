<!DOCTYPE html>
<html lang="Ru-ru">
<head>
    <meta charset="UTF-8">
    <title>{{ isset($seotitle) ? $seotitle : 'Title' }}</title>
    
    <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="css/style.css"/>
<!--
	<link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--SEO-->
    <meta name="description" content="{{ isset($seodescription) ? $seodescription : 'Description' }}">
    <meta name="keywords" content="{{ isset($seokeywords) ? $seokeywords : 'Keywords' }}" />
    	
	<meta name="theme-color" content="#64DB66">	
	<meta name="msapplication-navbutton-color" content="#64DB66">
	<meta name="apple-mobile-web-app-status-bar-style" content="#64DB66">
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserhappy">
            Ваш браузер <strong>устарел</strong>. Пожалуйста <a href="https://browsehappy.com/"  target="_blank">обновите</a>.
        </p>
    <![endif]-->
	<div class="wrapper" id="app">
        <header class="header">
        	<div class="container">
        		<div class="header__wrap">
        			<a href="/" class="header__logo"><img src="img/header/logo.png" alt="Агродоход"></a>
        			<div class="header__bar">
        				<a href="tel:88005558586" class="header__tel">8 (800) 555-85-86</a>
        				<button class="btn btn--menu js-menu-btn"></button>
        			</div>
        		</div>
        	</div>
        </header>
        <header class="header-hide" id="js-header-hide">
        	<div class="container">
        		<div class="header-hide__wrap">
        			<div class="header-hide__left">
        				<a href="/" class="header__logo"><img src="img/header/logo.png" alt="Агродоход"></a>
        				<form action="#" method="get" name="search" class="search" id="search">
							<input type="search" name="input search-input" class="search__input" placeholder="Поиск">
							<button class="btn search__btn" type="submit" title="Искать">Искать</button>
						</form>
        			</div>
        			<div class="header-hide__right">
        				<nav class="user-menu">
							<ul>
								<li><a href="#" class="user-menu__link user-menu__link--sign-up">Регистрация</a></li>
								<li><a href="#" class="user-menu__link user-menu__link--sign-in">Войти</a></li>
							</ul>
						</nav>
        				<button class="btn btn--menu-close js-menu-btn" title="Закрыть"></button>
        			</div>
        		</div>
        		<nav class="main-menu">
                    <ul>
                        <li class="main-menu__item"><a href="#" class="main-menu__link">О нас</a></li>
                        <li class="main-menu__item"><a href="#" class="main-menu__link">Услуги</a></li>
                        <li class="main-menu__item"><a href="#" class="main-menu__link">События</a></li>
                        <li class="main-menu__item"><a href="#" class="main-menu__link">Вопрос-ответ</a></li>
                        <li class="main-menu__item"><a href="#" class="main-menu__link">Контакты</a></li>
                    </ul>
                </nav>
        	</div>
        </header>
        <header class="header-mob" id="js-header-mob">
        	<div class="header-mob__header">
        		<a href="/" class="header__logo"><img src="img/header/logo.png" alt="Агродоход"></a>
        		<a href="tel:88005558586" class="header__tel">8 (800) 555-85-86</a>
        		<button class="btn btn--menu-close js-menu-btn" title="Закрыть"></button>
        	</div>
        	<form action="#" method="get" name="search" class="search" id="search">
				<input type="search" name="input search-input" class="search__input" placeholder="Поиск">
				<button class="btn search__btn" type="submit" title="Искать">Искать</button>
			</form>
        	<nav class="main-menu">
                <ul>
                    <li class="main-menu__item"><a href="#" class="main-menu__link">О нас</a></li>
                    <li class="main-menu__item"><a href="#" class="main-menu__link">Услуги</a></li>
                    <li class="main-menu__item"><a href="#" class="main-menu__link">События</a></li>
                    <li class="main-menu__item"><a href="#" class="main-menu__link">Вопрос-ответ</a></li>
                    <li class="main-menu__item"><a href="#" class="main-menu__link">Контакты</a></li>
                </ul>
            </nav>
            <nav class="user-menu">
				<ul>
					<li><a href="#" class="user-menu__link user-menu__link--sign-up">Регистрация</a></li>
					<li><a href="#" class="user-menu__link user-menu__link--sign-in">Войти</a></li>
				</ul>
			</nav>
        </header>
        <main class="main">
            <section class="calc-main">
            	<div class="container">
            		<div class="calc-main__wrap">
            			<h1 class="calc-main__title">{!! isset($domain['title']) ? $domain['title'] : 'Помощь в получении кредитов, субсидий <br>и грантов от компании «Агродоход»' !!}</h1>            			
            		</div>
            	</div>
            </section>
            <section class="calc-shem">
            	<div class="container">
            		<div class="calc-shem__blc">
            			<div class="calc-shem__header">
							<typetext :q1="'{{ isset($domain['question1']) ? $domain['question1'] : 'Вопрос 1'}}'" :q2="'{{ isset($domain['question2']) ? $domain['question2'] : 'Вопрос 2'}}'" :q3="'{{ isset($domain['question3']) ? $domain['question3'] : 'Вопрос 3'}}'"></typetext>
                        
                            <p class="calc-shem__blc-txt">У нас есть чёткие ответы на волнующие вас вопросы. <br>Воспользуйтесь поддержкой АгроДохода для получения денег.</p>
            			</div>
            			<div class="calc-shem__blc-wrap">
            				<div class="calc-shem__blc-item">
            					<div class="calc-shem__blc-icn calc-shem__blc-icn--check"></div>
            					<div class="calc-shem__blc-item-txt">Мы заключаем с вами договор и проводим аудит вашего хозяйства</div>
            				</div>
            				<div class="calc-shem__blc-item">
            					<div class="calc-shem__blc-icn calc-shem__blc-icn--list"></div>
            					<div class="calc-shem__blc-item-txt">Готовим все документы и консультируем вас для прохождения комиссии</div>
            				</div>
            				<div class="calc-shem__blc-item">
            					<div class="calc-shem__blc-icn calc-shem__blc-icn--walet"></div>
            					<div class="calc-shem__blc-item-txt">После получения гранта мы помогаем вам правильно подготовить отчётность</div>
            				</div>
            			</div>
            		</div>
            	</div>
            </section>
            <div class="calc-banner">
            	<div class="container">
            		<div class="calc-banner__wrap">
            			<div class="calc-banner__col">
            				<b>95% одобрений </b>наша статистика по отрасли
            			</div>
            			<div class="calc-banner__col">
            				<b>40 000p + 4% от полученного гранта </b>стоимость услуги
            			</div>
            			<div class="calc-banner__col">
            				<a href="#js-form" class="btn btn--green calc-banner__btn js-scroll">Оформить заявку</a>
            			</div>
            		</div>
            	</div>
            </div>
            <section class="calc-partners">
            	<div class="container">
            		<h2 class="sec__title">Мы сотрудничаем</h2>
            		<div class="calc-partners__slider calc-slider" id="js-calc-partners-slider">
            			<div>
            				<div class="calc-partners__slide">
            					<div class="calc-partners__item"><img src="img/logotyps/vtb.svg" alt="" style="width: 154px;"></div>
            					<div class="calc-partners__item"><img src="img/logotyps/sberbank.svg" alt="" style="width: 195px;"></div>
            					<div class="calc-partners__item"><img src="img/logotyps/rossselhozbank.svg" alt="" style="width: 222px;"></div>
            					<div class="calc-partners__item"><img src="img/logotyps/minselhoz.svg" alt="" style="width: 329px;"></div>
            					<div class="calc-partners__item"><img src="img/logotyps/sk.jpg" alt="" style="width: 138px;"></div>
            				</div>
            			</div>
            			<div>
            				<div class="calc-partners__slide">
            					<div class="calc-partners__item"><img src="img/logotyps/vtb.svg" alt="" style="width: 154px;"></div>
            					<div class="calc-partners__item"><img src="img/logotyps/sberbank.svg" alt="" style="width: 195px;"></div>
            					<div class="calc-partners__item"><img src="img/logotyps/rossselhozbank.svg" alt="" style="width: 222px;"></div>
            					<div class="calc-partners__item"><img src="img/logotyps/minselhoz.svg" alt="" style="width: 329px;"></div>
            					<div class="calc-partners__item"><img src="img/logotyps/sk.jpg" alt="" style="width: 138px;"></div>
            				</div>
            			</div>
            		</div>
            	</div>
            </section>
            <section class="calc-why">
            	<div class="container">
            		<h2 class="sec__title">Почему мы</h2>
            		<div class="calc-why__wrap">
            			<div class="calc-why__item">
            				<div class="calc-why__item-pic" style="background-image: url(img/why/pic-1.jpg);"></div>
            				<div class="calc-why__item-main">
            					<h3 class="calc-why__item-title">Обезопасим от долгов</h3>
            					<div class="calc-why__item-txt">Изучим вашу финансовую ситуацию. Выберем и предложим самые лучшие условия по кредитованию именно вашего хозяйства.</div>
            				</div>
            			</div>
            			<div class="calc-why__item">
            				<div class="calc-why__item-pic" style="background-image: url(img/why/pic-2.jpg);"></div>
            				<div class="calc-why__item-main">
            					<h3 class="calc-why__item-title">Работаем быстро</h3>
            					<div class="calc-why__item-txt">Доверьте всё формальное общение с банками профессиональным юристам и бухгалтерам из АгроДохода.</div>
            				</div>
            			</div>
            			<div class="calc-why__item">
            				<div class="calc-why__item-pic" style="background-image: url(img/why/pic-3.jpg);"></div>
            				<div class="calc-why__item-main">
            					<h3 class="calc-why__item-title">С нами выгодно</h3>
            					<div class="calc-why__item-txt">С нами вы не только сможете получить кредит, но откроете для себя доступ к крупными сетями сбыта.</div>
            				</div>
            			</div>
            		</div>
				</div>
			</section>
       		<section class="calc-video">
       			<div class="container">
       				<h2 class="sec__title">О нашей компании</h2>
       				<div class="calc-video__wrap">
       					<div class="calc-video__blc">
       						<div class="calc-video__blind js-blind" data-href="https://www.youtube.com/embed/x0dX8oVDCNc">
       							<img src="img/video/blind.jpg" alt="">
       						</div>
       					</div>
       					<div class="calc-video__txt">
       						<div class="calc-video__logo"><img src="img/video/rub.svg" alt="P"></div>
       						<div class="calc-video__txt-main">
       							<b>Любовь Николаевна Староверова </b>лауреат конкурса «Лучший бухглатер России» <br>и генеральный директор ООО «АгроДоход»
       						</div>
       					</div>
       				</div>
       			</div>
       			<div class="video-wrapper" id="js-video-vrapper">
                    <div class="video-wrapper__overlay js-video-close"></div>
                    <div class="video-wrapper__container">
                        <button class="btn video-wrapper__close js-video-close" title="Закрыть">Закрыть</button>
                        <div class="video-wrapper__blc" id="js-video-container">
                        </div>
                    </div>
                </div>
       		</section>
       		<section class="calc-team">
       			<div class="container">
       				<h2 class="sec__title">Вам помогают</h2>
       				<div class="calc-team__slider calc-slider" id="js-calc-team-slider">
       					<div>
       						<div class="calc-team__slide">
       							<div class="calc-team__slide-pic"><img src="img/example/photo.jpg" alt=""></div>
       							<div class="calc-team__slide-main">
       								<h3 class="calc-team__slide-title">Сергей Киселёв</h3>
       								<div class="calc-team__slide-txt">Подразделение управленческого аудита и бизнес-планирования</div>
       							</div>
       						</div>
       					</div>
       					<div>
       						<div class="calc-team__slide">
       							<div class="calc-team__slide-pic"><img src="img/example/photo.jpg" alt=""></div>
       							<div class="calc-team__slide-main">
       								<h3 class="calc-team__slide-title">Сергей Киселёв</h3>
       								<div class="calc-team__slide-txt">Подразделение управленческого аудита и бизнес-планирования</div>
       							</div>
       						</div>
       					</div>
       					<div>
       						<div class="calc-team__slide">
       							<div class="calc-team__slide-pic"><img src="img/example/photo.jpg" alt=""></div>
       							<div class="calc-team__slide-main">
       								<h3 class="calc-team__slide-title">Сергей Киселёв</h3>
       								<div class="calc-team__slide-txt">Подразделение управленческого аудита и бизнес-планирования</div>
       							</div>
       						</div>
       					</div>
       					<div>
       						<div class="calc-team__slide">
       							<div class="calc-team__slide-pic"><img src="img/example/photo.jpg" alt=""></div>
       							<div class="calc-team__slide-main">
       								<h3 class="calc-team__slide-title">Сергей Киселёв</h3>
       								<div class="calc-team__slide-txt">Подразделение управленческого аудита и бизнес-планирования</div>
       							</div>
       						</div>
       					</div>
       					<div>
       						<div class="calc-team__slide">
       							<div class="calc-team__slide-pic"><img src="img/example/photo.jpg" alt=""></div>
       							<div class="calc-team__slide-main">
       								<h3 class="calc-team__slide-title">Сергей Киселёв</h3>
       								<div class="calc-team__slide-txt">Подразделение управленческого аудита и бизнес-планирования</div>
       							</div>
       						</div>
       					</div>
       					<div>
       						<div class="calc-team__slide">
       							<div class="calc-team__slide-pic"><img src="img/example/photo.jpg" alt=""></div>
       							<div class="calc-team__slide-main">
       								<h3 class="calc-team__slide-title">Сергей Киселёв</h3>
       								<div class="calc-team__slide-txt">Подразделение управленческого аудита и бизнес-планирования</div>
       							</div>
       						</div>
       					</div>
       				</div>
       			</div>
       		</section>
       		<mainform></mainform>
        </main>
        <footer class="footer">
            <div class="container">
                <nav class="footer-menu">
                    <ul>
                        <li class="footer-menu__item"><a href="#" class="footer-menu__link">О нас</a></li>
                        <li class="footer-menu__item"><a href="#" class="footer-menu__link">Услуги</a></li>
                        <li class="footer-menu__item"><a href="#" class="footer-menu__link">События</a></li>
                        <li class="footer-menu__item"><a href="#" class="footer-menu__link">Вопрос-ответ</a></li>
                        <li class="footer-menu__item"><a href="#contacts" class="footer-menu__link js-scroll">Контакты</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__container">
                <div class="footer__wrap">
                    <div class="footer__contacts">
                        <div>142002, Московская область, Домодедово, улица Текстильщиков, 1Б, офис 307а</div>
                        <div><a href="mailto:info@agroexpertservice.ru">info@agroexpertservice.ru</a></div>
                        <div><a href="tel:+74959026838">+7 (495) 902-68-38</a></div>
                    </div>
                    <div class="footer__middle">
                        <div><a href="#">Политика в отношении обработки персональных данных</a></div>
                        <div><span>АгроДоход © 2018</span>&#8195;&#8195;<span>Сайт создан <a href="http://bigdatak.com/" target="_blank">Big Data Key</a></span></div>
                    </div>
                    <ul class="footer__soc">
                        <li><a href="#" target="_blank" class="footer__soc-link footer__soc-link--ok" title="Одноклассники">Одноклассники</a></li>
                        <li><a href="#" target="_blank" class="footer__soc-link footer__soc-link--facebook" title="Facebook">Facebook</a></li>
                        <li><a href="#" target="_blank" class="footer__soc-link footer__soc-link--instagram" title="Instagram">Instagram</a></li>
                        <li><a href="#" target="_blank" class="footer__soc-link footer__soc-link--vk" title="Вконтакте">Вконтакте</a></li>
                    </ul>
                </div>
            </div>
        </footer>
	</div>		
	<script src="/event/js/vendors/jquery.min.js"></script>
	<script src="/event/js/vendors/slick.min.js"></script>
	<script src="/event/js/vendors/jquery.formstyler.min.js"></script>
	<!--jQuery UI-->
	<script src="/event/js/vendors/jquery-ui.js"></script>
	<script src="/event/js/vendors/jquery.ui.touch-punch.js"></script>
    <script src="/event/js/main.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>