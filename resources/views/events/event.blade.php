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
                    <a href="http://{{ env('APP_MAIN_DOMAIN') }}/" class="header__logo"><img src="/event/img/header/logo.png" alt="Агродоход"></a>
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
                        <a href="http://{{ env('APP_MAIN_DOMAIN') }}/" class="header__logo"><img src="/event/img/header/logo.png" alt="Агродоход"></a>
                        <form action="#" method="get" name="search" class="search" id="search" style="margin-left: 60px;">
                            <input type="search" name="input search-input" class="search__input" placeholder="Поиск">
                            <button class="btn search__btn" type="submit" title="Искать">Искать</button>
                        </form>
                    </div>
                    <div class="header-hide__right">
                        <nav class="user-menu">
                            <ul>
                                <li><a href="http://crm.agrodohod.ru/authentication/register" class="user-menu__link user-menu__link--sign-up" target="_blank">Регистрация</a></li>
                                <li><a href="http://crm.agrodohod.ru/authentication/login" class="user-menu__link user-menu__link--sign-in" target="_blank">Войти</a></li>
                            </ul>
                        </nav>
                        <button class="btn btn--menu-close js-menu-btn" title="Закрыть"></button>
                    </div>
                </div>
                <nav class="main-menu">
                    <ul>
                        <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/o-nas" class="main-menu__link">О нас</a></li>
                        <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/uslugi" class="main-menu__link">Услуги</a></li>
                        <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/events" class="main-menu__link">События</a></li>
                        <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/faq" class="main-menu__link">Вопрос-ответ</a></li>
                        <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/#contacts" class="main-menu__link">Контакты</a></li>
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
                    <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/o-nas" class="main-menu__link">О нас</a></li>
                    <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/uslugi" class="main-menu__link">Услуги</a></li>
                    <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/events" class="main-menu__link">События</a></li>
                    <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/faq" class="main-menu__link">Вопрос-ответ</a></li>
                    <li class="main-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/#contacts" class="main-menu__link">Контакты</a></li>
                </ul>
            </nav>
            <nav class="user-menu">
                <ul>
                    <li><a href="http://crm.agrodohod.ru/authentication/register" class="user-menu__link user-menu__link--sign-up" target="_blank">Регистрация</a></li>
                    <li><a href="http://crm.agrodohod.ru/authentication/login" class="user-menu__link user-menu__link--sign-in" target="_blank">Войти</a></li>
                </ul>
            </nav>
        </header>
        <main class="main">
            <section class="calc-main" style="background: url({{ isset($domain['background']) ? Voyager::image($domain['background']) : '/event/img/main-sec/bg.jpg'}}) center center no-repeat;
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

                            <p class="calc-shem__blc-txt">У нас есть чёткие ответы на волнующие вас вопросы.
                                <br>Воспользуйтесь поддержкой АгроДохода для получения денег.</p>
                        </div>
                        <div class="calc-shem__blc-wrap">
                            <div class="calc-shem__blc-item">
                                <div class="calc-shem__blc-icn calc-shem__blc-icn--check"></div>
                                <div class="calc-shem__blc-item-txt" style="white-space: pre-line;">
                                    {{ isset($domain['body']) ? $domain['body'] : 'Мы заключаем с вами договор и проводим аудит вашего хозяйства'}}
                                </div>
                            </div>
                            <div class="calc-shem__blc-item">
                                <div class="calc-shem__blc-icn calc-shem__blc-icn--list"></div>
                                <div class="calc-shem__blc-item-txt" style="white-space: pre-line;">
                                    {{ isset($domain['body2']) ? $domain['body2'] : 'Готовим все документы и консультируем вас для прохождения комиссии'}}

                                </div>
                            </div>
                            <div class="calc-shem__blc-item">
                                <div class="calc-shem__blc-icn calc-shem__blc-icn--walet"></div>
                                <div class="calc-shem__blc-item-txt" style="white-space: pre-line;">
                                    {{ isset($domain['body3']) ? $domain['body3'] : 'После получения гранта мы помогаем вам правильно подготовить отчётность'}}
                                </div>
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
                            <b>
                                {{ isset($domain['price']) ? $domain['price'] : '40 000p + 4% от полученного гранта'}}
                            </b>
                            стоимость услуги
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
                                @foreach ($partners->slice(0, 5) as $partner)
                                <div class="calc-partners__item"><img src="{{ Voyager::image($partner['image']) }}"
                                        alt="" style="width: 154px;"></div>
                                @endforeach
                            </div>
                        </div>
                        @if(!$partners->slice(5, 10)->isEmpty())
                        <div>
                            <div class="calc-partners__slide">
                                @foreach ($partners->slice(5, 10) as $partner)
                                <div class="calc-partners__item"><img src="{{ Voyager::image($partner['image']) }}"
                                        alt="" style="width: 154px;"></div>
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
                                    {{ isset($domain['whytitle1']) ? $domain['whytitle1'] : 'Обезопасим от долгов'}}
                                </h3>
                                <div class="calc-why__item-txt" style="white-space: pre-line;">
                                    {{ isset($domain['whybody1']) ? $domain['whybody1'] : 'Изучим вашу финансовую ситуацию. Выберем и предложим
									самые лучшие условия по кредитованию именно вашего хозяйства.'}}
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
                                <div class="calc-why__item-txt" style="white-space: pre-line;">{{ isset($domain['whybody2']) ? $domain['whybody2'] : 'Доверьте всё формальное общение с банками
										профессиональным юристам и бухгалтерам из АгроДохода.'}}</div>
                            </div>
                        </div>
                        <div class="calc-why__item">
                            <div class="calc-why__item-pic"
                                style="background-image: url({{ isset($domain['whyimage3']) ? Voyager::image($domain['whyimage3']) : '/event/img/why/pic-3.jpg'}});">
                            </div>
                            <div class="calc-why__item-main">
                                <h3 class="calc-why__item-title">
                                    {{ isset($domain['whytitle3']) ? $domain['whytitle3'] : 'С нами выгодно'}}</h3>
                                <div class="calc-why__item-txt" style="white-space: pre-line;">{{ isset($domain['whybody3']) ? $domain['whybody3'] : 'С нами вы не только сможете получить кредит, но откроете
										для себя доступ к крупными сетями сбыта'}}</div>
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
                            <div class="calc-video__blind js-blind"
                                data-href="https://www.youtube.com/embed/d2ZmNCjW6Qw">
                                <img src="/event/img/video/blind.jpg" alt="">
                            </div>
                        </div>
                        <div class="calc-video__txt">
                            {{-- <div class="calc-video__logo"><img src="/event/img/video/rub.svg" alt="P"></div> --}}
                            <div class="calc-video__txt-main">
                                Получение грантов, кредитов и субсидий нашими клиентами — результат комплексной работы всех подразделений АгроДохода. Это и сбор информации и её анализ, и переговоры со всеми участниками процесса, и обучение наших клиентов. Но всё это невозможно без безупречной работы нашей бухгалтерской службы. Её руководитель Оксана Кондратова рассказывает о специфике своей работы.
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
            <mainform :point="{{ isset($domain['point']) ? $domain['point'] : 0}}"
                :percent="{{ isset($domain['percent']) ? $domain['percent'] : 0}}" :manager="false"></mainform>
        </main>
        <footer class="footer">
            <div class="container">
                <nav class="footer-menu">
                    <ul>
                        <li class="footer-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/o-nas" class="footer-menu__link">О нас</a></li>
                        <li class="footer-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/uslugi" class="footer-menu__link">Услуги</a></li>
                        <li class="footer-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/events" class="footer-menu__link">События</a></li>
                        <li class="footer-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/faq" class="footer-menu__link">Вопрос-ответ</a></li>
                        <li class="footer-menu__item"><a href="http://{{ env('APP_MAIN_DOMAIN') }}/#contacts"
                                class="footer-menu__link js-scroll">Контакты</a></li>
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
    </div>
@endsection