@extends('vice.master')

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
                <a href="http://{{ env('APP_MAIN_DOMAIN') }}/" class="header__logo"><img
                        src="/event/img/header/logo.png" alt="Агродоход"></a>
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
                    <a href="http://{{ env('APP_MAIN_DOMAIN') }}/" class="header__logo"><img
                            src="/event/img/header/logo.png" alt="Агродоход"></a>
                    <form action="#" method="get" name="search" class="search" id="search" style="margin-left: 60px;">
                        <input type="search" name="input search-input" class="search__input" placeholder="Поиск">
                        <button class="btn search__btn" type="submit" title="Искать">Искать</button>
                    </form>
                </div>
                <div class="header-hide__right">
                    <nav class="user-menu">
                        <ul>
                            <li><a href="http://crm.agrodohod.ru/authentication/register"
                                    class="user-menu__link user-menu__link--sign-up" target="_blank">Регистрация</a>
                            </li>
                            <li><a href="http://crm.agrodohod.ru/authentication/login"
                                    class="user-menu__link user-menu__link--sign-in" target="_blank">Войти</a></li>
                        </ul>
                    </nav>
                    <button class="btn btn--menu-close js-menu-btn" title="Закрыть"></button>
                </div>
            </div>
            <nav class="main-menu">
                <ul>
                    <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/o-nas"
                            class="main-menu__link">О нас</a></li>
                    <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/uslugi"
                            class="main-menu__link">Услуги</a></li>
                    <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/events"
                            class="main-menu__link">События</a></li>
                    <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/faq"
                            class="main-menu__link">Вопрос-ответ</a></li>
                    <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/#contacts"
                            class="main-menu__link">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <header class="header-mob" id="js-header-mob">
        <div class="header-mob__header">
            <a href="/" class="header__logo"><img src="/event/img/header/logo.png" alt="Агродоход"></a>
            <a href="tel:88005558586" class="header__tel">8 (800) 555-85-86</a>
            <button class="btn btn--menu-close js-menu-btn" title="Закрыть"></button>
        </div>
        <form action="#" method="get" name="search" class="search" id="search">
            <input type="search" name="input search-input" class="search__input" placeholder="Поиск">
            <button class="btn search__btn" type="submit" title="Искать">Искать</button>
        </form>
        <nav class="main-menu">
            <ul>
                <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/o-nas"
                        class="main-menu__link">О нас</a></li>
                <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/uslugi"
                        class="main-menu__link">Услуги</a></li>
                <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/events"
                        class="main-menu__link">События</a></li>
                <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/faq"
                        class="main-menu__link">Вопрос-ответ</a></li>
                <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/#contacts"
                        class="main-menu__link">Контакты</a></li>
            </ul>
        </nav>
        <nav class="user-menu">
            <ul>
                <li><a href="http://crm.agrodohod.ru/authentication/register"
                        class="user-menu__link user-menu__link--sign-up" target="_blank">Регистрация</a></li>
                <li><a href="http://crm.agrodohod.ru/authentication/login"
                        class="user-menu__link user-menu__link--sign-in" target="_blank">Войти</a></li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <section class="calc-main" style="background: url({{ isset($domain['background']) ? Voyager::image($domain['background']) : '/img/vice/back3.png'}}) center center no-repeat;
			background-size: cover;">
            <div class="container">
                <div class="calc-main__wrap">
                    <h1 class="calc-main__title">{!! isset($domain['title']) ? $domain['title'] : 'Помощь в
                        получении кредитов, субсидий <br>и грантов от компании «Агродоход»' !!}</h1>
                </div>
            </div>
        </section>
        <section class="calc-shem">
            <div class="container">
                <div class="calc-shem__blc">
                    <div class="calc-shem__header">
                        <typetext :q1="'{{ isset($domain['question1']) ? $domain['question1'] : 'Вопрос 1'}}'"
                            :q2="'{{ isset($domain['question2']) ? $domain['question2'] : 'Вопрос 2'}}'"
                            :q3="'{{ isset($domain['question3']) ? $domain['question3'] : 'Вопрос 3'}}'"></typetext>

                        <p class="calc-shem__blc-txt" style="white-space: pre-line;">
                            {{ isset($domain['body_after']) ? $domain['body_after'] : 'У нас есть чёткие ответы на волнующие вас вопросы.
                                Воспользуйтесь поддержкой АгроДохода для получения денег.'}}
                        </p>
                    </div>
                    <div class="calc-shem__blc-wrap">
                        <div class="calc-shem__blc-item">
                            <div class="calc-shem__blc-icn calc-shem__blc-icn--check"></div>
                            <div class="calc-shem__blc-item-txt" style="white-space: pre-line;">
                                {{ isset($domain['body']) ? $domain['body'] : 'Заключаем договор и берём вашу бухглатерию на обслуживание'}}
                            </div>
                        </div>
                        <div class="calc-shem__blc-item">
                            <div class="calc-shem__blc-icn calc-shem__blc-icn--list"></div>
                            <div class="calc-shem__blc-item-txt" style="white-space: pre-line;">
                                {{ isset($domain['body2']) ? $domain['body2'] : 'Ваша отчётность и финансовая модель подготавливается для получения поддержки от государства'}}

                            </div>
                        </div>
                        <div class="calc-shem__blc-item">
                            <div class="calc-shem__blc-icn calc-shem__blc-icn--walet"></div>
                            <div class="calc-shem__blc-item-txt" style="white-space: pre-line;">
                                {{ isset($domain['body3']) ? $domain['body3'] : 'Вы получаете поддержку от государства в виде субсидии или гранта'}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="calc-banner calc-banner-newmargin">
            <div class="container">
                <div class="calc-banner__wrap green-area-wrap">
                    <div class="green-area-price">
                        <p class="green-price-desc">Эффективная ставка</p>
                        <p class="green-price">2-9,5%</p>
                    </div>
                    <div class="green-area-price">
                        <p class="green-price-desc">Средняя ставка по статистике</p>
                        <p class="green-price">5,5%</p>
                    </div>
                    <div class="green-area-price">
                        <p class="green-price-desc">Залогового имущества в обеспечение</p>
                        <p class="green-price">40%</p>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="container">
                <div class="credit-page__bar">
                    <a href="#sec-form" class="btn btn--green sec__bar-btn js-order-btn-two" data-title="Оформить заявку"
                        data-titletwo="Оформить заявку" data-btn="Оформить заявку">Оформить заявку</a>
                </div>
            </div>
        </section>



        <section class="calc-partners">
            <div class="container">
                <h2 class="sec__title">Наши партнёры</h2>
                <div class="calc-partners__slider calc-slider" id="js-calc-partners-slider">
                    <div>
                        <div class="calc-partners__slide">
                            @foreach ($partners->slice(0, 5) as $partner)
                            <div class="calc-partners__item"><img src="{{ Voyager::image($partner['image']) }}" alt=""
                                    style="width: 154px;"></div>
                            @endforeach
                        </div>
                    </div>
                    @if(!$partners->slice(5, 10)->isEmpty())
                    <div>
                        <div class="calc-partners__slide">
                            @foreach ($partners->slice(5, 10) as $partner)
                            <div class="calc-partners__item"><img src="{{ Voyager::image($partner['image']) }}" alt=""
                                    style="width: 154px;"></div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>
        <section class="calc-why">
            <div class="container">
                <h2 class="sec__title">Почему мы</h2>
                <div class="calc-why__wrap">
                    <div class="calc-why__item">
                        <div class="calc-why__item-pic"
                            style="background-image: url({{ isset($domain['whyimage1']) ? Voyager::image($domain['whyimage1']) : '/event/img/why/pic-1.jpg'}});">
                        </div>
                        <div class="calc-why__item-main">
                            <h3 class="calc-why__item-title">
                                {{ isset($domain['whytitle1']) ? $domain['whytitle1'] : 'Заботимся о вашей безопасности'}}
                            </h3>
                            <div class="calc-why__item-txt" style="white-space: pre-line;">
                                {{ isset($domain['whybody1']) ? $domain['whybody1'] : 'Изучим вашу финансовую ситуацию. Учтём все риски: от возможных долгов до проблем с налоговыми органами. Выберем и предложим самые лучшие условия финансирования именно для вашего хозяйства.'}}
                            </div>
                        </div>
                    </div>
                    <div class="calc-why__item">
                        <div class="calc-why__item-pic"
                            style="background-image: url({{ isset($domain['whyimage2']) ? Voyager::image($domain['whyimage2']) : '/event/img/why/pic-2.jpg'}});">
                        </div>
                        <div class="calc-why__item-main">
                            <h3 class="calc-why__item-title">
                                {{ isset($domain['whytitle2']) ? $domain['whytitle2'] : 'Работаем быстро'}}</h3>
                            <div class="calc-why__item-txt" style="white-space: pre-line;">{{ isset($domain['whybody2']) ? $domain['whybody2'] : 'Наши партнёрские отношения с десятками кредитных организаций по всей России и многолетний опыт позволят вам получить деньги в сжатые сроки.'}}</div>
                        </div>
                    </div>
                    <div class="calc-why__item">
                        <div class="calc-why__item-pic"
                            style="background-image: url({{ isset($domain['whyimage3']) ? Voyager::image($domain['whyimage3']) : '/event/img/why/pic-3.jpg'}});">
                        </div>
                        <div class="calc-why__item-main">
                            <h3 class="calc-why__item-title">
                                {{ isset($domain['whytitle3']) ? $domain['whytitle3'] : 'С нами выгодно'}}</h3>
                            <div class="calc-why__item-txt" style="white-space: pre-line;">{{ isset($domain['whybody3']) ? $domain['whybody3'] : 'С нами вы не только сможете получить финансирование на выгодных условиях, но и откроете для себя доступ к крупными сетями сбыта и поставщиками материалов для сельского хозяйства.'}}</div>
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
                        <div class="calc-video__blind js-blind" data-href="https://www.youtube.com/embed/d2ZmNCjW6Qw">
                            <img src="/event/img/video/blind.jpg" alt="">
                        </div>
                    </div>
                    <div class="calc-video__txt">
                        <div class="calc-video__logo"><img src="/event/img/video/rub.svg" alt="P"></div>
                        <div class="calc-video__txt-main">
                            <div class="calc-video__area-name">
                                <b class="calc-video__name">Любовь Николаевна Староверова</b> 
                            </div>
                            {!! isset($domain['body_video']) ? $domain['body_video'] : 'победитель конкурса лучший бухглатер России и главный финансист АгроДохода'!!}

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
        <section>
            <div class="year-area prefooter-year-area">
                <div class="container">
                    <h2 class="sec__title">Проектное финансирование</h2>
                    <div class="year-area__desc">
                        <p>Проектное финансирование&nbsp;&mdash; идеи, планирование, реализации, прибыль! От&nbsp;структурирование проекта до&nbsp;получения финансирования. Входная экспертиза <nobr>бизнес-проекта</nobr> и&nbsp;сопровождение для возможного получения проектного финансирования, <nobr>со-инвестирования</nobr>, субсидий, грантов, кредитов на&nbsp;пополнение оборотных. <br /> Компания &laquo;АГРОДОХОД&raquo;&nbsp;&mdash; лучший <nobr>старт-ап</nobr> года по&nbsp;версии Sk&nbsp;&laquo;Сколково&raquo;</p>
                    </div>
                </div>
            </div>


        </section>
        <section class="calc-team">
            <div class="container">
                <h2 class="sec__title">Вам помогают</h2>
                <div class="calc-team__slider calc-slider" id="js-calc-team-slider">

                    @foreach($teams as $team)
                    <div>
                        <div class="calc-team__slide">
                            <div class="calc-team__slide-pic"><img src="/storage/{{ $team->photo }}" alt=""></div>
                            <div class="calc-team__slide-main">
                                <h3 class="calc-team__slide-title">{{ $team->name  }}</h3>
                                <div class="calc-team__slide-txt">{{  $team->position }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>



        <section>
            <div class="year-area">
                <div class="container">
                    <h2 class="sec__title">АгроДоход — проект года по версии «Сколково»</h2>

                    <div class="year-area__image">
                        <a href="/">
                            <img src="/img/vice/viceimage.png" alt="image">
                        </a>
                    </div>

                    <div class="year-area__desc">
                            <p>1 июня 2019 года компания &laquo;АгроДоход&raquo; стала лауреатом ежегодной премии SKOLKOVO Alumni Awards как лучший &laquo;StartUp&raquo; года. Жюри конкурса высоко оценило наш вклад в&nbsp;развитие сельского хозяйства в&nbsp;России. За&nbsp;время своего существования &laquo;АгроДоход&raquo; помог сотням фермерских хозяйств получить поддержку от&nbsp;государства и&nbsp;правильно её учесть.</p>
                    </div>
                </div>
            </div>
        </section>

        <mainform :back="1" :point="{{ isset($domain['point']) ? $domain['point'] : 0}}"
        :percent="{{ isset($domain['percent']) ? $domain['percent'] : 0}}" :manager="false" :subject="`{{ isset($domain['subject']) ? $domain['subject'] : ''}}`"></mainform>


    </main>
    <footer class="footer">
        <div class="container">
            <nav class="footer-menu">
                <ul>
                    <li class="footer-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/o-nas"
                            class="footer-menu__link">О нас</a></li>
                    <li class="footer-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/uslugi"
                            class="footer-menu__link">Услуги</a></li>
                    <li class="footer-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/events"
                            class="footer-menu__link">События</a></li>
                    <li class="footer-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/faq"
                            class="footer-menu__link">Вопрос-ответ</a></li>
                    <li class="footer-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/#contacts"
                            class="footer-menu__link">Контакты</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer__container">
            <div class="footer__wrap">
                <div class="footer__contacts">
                    <div>142007, Московская область, город Домодедово, мкр Авиационный, ул. Ильюшина, стр. 2а, номер
                        помещения 517</div>
                    <div><a href="mailto:info@agrodohod.ru">info@agrodohod.ru</a></div>
                    <div><a href="tel:88005558586">8 (800) 555-85-86</a></div>
                </div>
                <div class="footer__middle">
                    <div><a href="http://{{ env('APP_MAIN_DOMAIN') }}/download/policy" target="_blank">Политика в
                            отношении обработки персональных данных</a></div>
                    <div><span>АгроДоход © 2019</span>&#8195;&#8195;<span>Сайт создан <a href="http://bigdatak.com/"
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
</div>
@endsection
