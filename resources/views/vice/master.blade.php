<!DOCTYPE html>
<html lang="Ru-ru">

<head>
    <meta charset="UTF-8">
    <title>{{ isset($seotitle) ? $seotitle : 'Агродоход' }}</title>

    <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/event/css/style.css" />
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
    <div>
            @yield('content')
    </div>

    <div class="popup" id="js-popup">
            <div class="popup__overlay js-popup-close"></div>
            <div class="popup__main">
                <button class="btn popup__close js-popup-close" title="Закрыть">Закрыть</button>
                <form action="/form" class="popup__form js-form-val">
                    @csrf
                    <div class="popup__form-title" id="js-form-title"></div>
                    <input type="text" name="title" class="js-val" id="js-input-title" hidden="hidden" value="{!! isset($domain['title']) ? $domain['title'] : 'Помощь в
                    получении кредитов, субсидий и грантов от компании «Агродоход»' !!}">
                    <input type="text" name="name" class="input popup__input js-val" placeholder="Ваше имя" required>
                    <input type="tel" name="tel" class="input popup__input js-val" placeholder="Телефон" required>
                    <button class="btn btn--green popup__submit" id="js-popup-btn" type="submit">Заказать услугу</button>
                </form>
            </div>
        </div>
        <div class="popup" id="js-popup-ready">
            <div class="popup__overlay js-popup-ready-close"></div>
            <div class="popup__main">
                <button class="btn popup__close js-popup-ready-close" title="Закрыть">Закрыть</button>
                <div class="popup__form-title">Ваша заявка была принята</div>
                <div class="popup__form-txt">В ближайшее время мы свяжемся с вами</div>
            </div>
        </div>

        <a class="btn action-btn js-action-btn" id="js-action-btn" data-title="Оформить заявку" data-titletwo="Оформить заявку" data-btn="Оформить заявку"><span>Оформить заявку</span></a>

        

    <script src="/event/js/vendors/jquery.min.js"></script>
    <script src="/event/js/vendors/slick.min.js"></script>
    {{-- <script src="/event/js/vendors/jquery.formstyler.min.js"></script> --}}
    <!--jQuery UI-->
    <script src="/event/js/vendors/jquery-ui.js"></script>
    <script src="/event/js/vendors/jquery.ui.touch-punch.js"></script>
    <script src="/event/js/main.js"></script>
    <script src="/js/app.js"></script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    
        ym(56441218, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/56441218" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
 
</body>

</html>
