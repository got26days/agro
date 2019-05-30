@extends('events.master')

@section('content')
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
        <section class="calc-sec calc-sec--manager" id="js-form">
            <div class="container">
                <mainform :point="{{ isset($domain['point']) ? $domain['point'] : 0}}"
                :percent="{{ isset($domain['percent']) ? $domain['percent'] : 0}}" :manager="true"
                :subject="`{{ isset($domain['subject']) ? $domain['subject'] : '' }}`"></mainform>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <nav class="footer-menu">
                <ul>
                    <li class="footer-menu__item"><a href="#" class="footer-menu__link">О нас</a></li>
                    <li class="footer-menu__item"><a href="#" class="footer-menu__link">Услуги</a></li>
                    <li class="footer-menu__item"><a href="#" class="footer-menu__link">События</a></li>
                    <li class="footer-menu__item"><a href="#" class="footer-menu__link">Вопрос-ответ</a></li>
                    <li class="footer-menu__item"><a href="#contacts" class="footer-menu__link js-scroll">Контакты</a>
                    </li>
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
                    <div><span>АгроДоход © 2018</span>&#8195;&#8195;<span>Сайт создан <a href="http://bigdatak.com/"
                                target="_blank">Big Data Key</a></span></div>
                </div>
                <ul class="footer__soc">
                    <li><a href="#" target="_blank" class="footer__soc-link footer__soc-link--ok"
                            title="Одноклассники">Одноклассники</a></li>
                    <li><a href="#" target="_blank" class="footer__soc-link footer__soc-link--facebook"
                            title="Facebook">Facebook</a></li>
                    <li><a href="#" target="_blank" class="footer__soc-link footer__soc-link--instagram"
                            title="Instagram">Instagram</a></li>
                    <li><a href="#" target="_blank" class="footer__soc-link footer__soc-link--vk"
                            title="Вконтакте">Вконтакте</a></li>
                </ul>
            </div>
        </div>
    </footer>
    @endsection
