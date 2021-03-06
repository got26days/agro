<!DOCTYPE html>
<html lang="Ru-ru">
<head>
    <meta charset="UTF-8">
    <title>{{ isset($seotitle) ? $seotitle : 'Title' }}</title>
    
    <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="/css/style.css"/>

    <meta name="google-site-verification" content="rCfQ9Qt1RXm9HUJsTV5DHhDNrt8CEsEP36BwC0LQmEw" />
    <link rel="icon"  href="/favicon.ico">
    
    <!-- Набор иконок для сайта -->
    <!--- генератор https://www.favicon-generator.org/ -->
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
    
    <!--SEO-->
    <meta name="description" content="{{ isset($seodescription) ? $seodescription : 'Description' }}">
    <meta name="keywords" content="{{ isset($seokeywords) ? $seokeywords : 'Keywords' }}" />

    {{-- Для паука Google: --}}
    <meta name="googlebot" content="noindex, nofollow"/>
    {{-- Или для Яндекса: --}}
    <meta name="yandex" content="none"/>
	
    <!-- Meta-теги Open Graph для соц сетей -->
<!--
    <link rel="image_src" href="/img/og.jpg" />  
    
    <meta property="og:type" content="website / movie / book / blog / etc" />
    <meta property="og:url" content="http://site.ru" />
    
    <meta property="og:image" content="http://site.ru/img/og/og.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="968">
    <meta property="og:image:height" content="504">
    
    <meta property="og:title" content="Заголовок для соцсети (ограничение в 65 символов)" />
    <meta property="og:description" content="Описание для соцсети" />
    <meta property="og:video" content="http://site.ru" />
    <meta property="og:locale" content="ru_RU / en_GB / de_DE / etc." />
    <meta property="og:site_name" content="site.ru" />
-->
    <!--- сброс кеша ВК https://vk.com/dev/pages.clearCache -->
    <!--- пролверка opengraph facebook https://developers.facebook.com/tools/debug/sharing/ -->
    <!--- пролверка opengraph https://ogmeta.volego.ru/check -->
    
    <!-- Meta-теги для соц Twitter -->
<!--
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="site.ru"/>
    <meta name="twitter:title" content="Заголовок">
    <meta name="twitter:description" content="Описание"/>
    <meta name="twitter:creator" content="Автор"/>
    <meta name="twitter:image:src" content="https://site.com/img/twitter.png"/>
    <meta name="twitter:domain" content="http://site.ru"/>
-->
    
    <!-- Цветовое оформление окон браузеров -->	
	<meta name="theme-color" content="#fff"><!-- Chrome, Firefox OS and Opera -->	
	<meta name="msapplication-navbutton-color" content="#fff"><!-- Windows Phone -->	
    <meta name="apple-mobile-web-app-status-bar-style" content="#fff"><!-- iOS Safari -->
    
    <style>
        .income__item-btn{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .income__row-bar-btn{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .farm__blc-video:hover .farm__blc-video-blind {
            opacity: 0;
        }
        .about__team-newheader{
            /* padding-left: 25px; */
            /* padding-top: 4px; */
            height: 54px;
            line-height: 50px;
            font-size: 30px;
            font-weight: 600;
            color: #000;
            font-size: 30px;
            margin-bottom: 25px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserhappy">
            Ваш браузер <strong>устарел</strong>. Пожалуйста <a href="https://browsehappy.com/"  target="_blank">обновите</a>.
        </p>
    <![endif]-->
	<div class="wrapper">
        @include('domain.header')
        @yield ('content')
        @include('domain.footer')
    
        <div class="popup" id="js-popup">
            <div class="popup__overlay js-popup-close"></div>
            <div class="popup__main">
                <button class="btn popup__close js-popup-close" title="Закрыть">Закрыть</button>
                <form action="/form" class="popup__form js-form-val">
                    @csrf
                    <div class="popup__form-title" id="js-form-title"></div>
                    <input type="text" name="title" class="js-val" id="js-input-title" hidden="hidden">
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
	</div>		
	<script src="/js/vendors/jquery.min.js"></script>
	<script src="/js/vendors/slick.min.js"></script>
	<script src="/js/main.js"></script>
	<!--map-->
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    <script>
        if ( window.location.pathname == '/' ){
            ymaps.ready(init);
        }
        var map;						
        function init(){     
            map = new ymaps.Map("map", {
                center: [55.441675, 37.725730],
                zoom: 16,
                controls: []
            });
            map.behaviors.disable('scrollZoom');
            placemark = new ymaps.Placemark(
                [55.441675, 37.725730],
                { 
                    iconCaption: 'улица Текстильщиков, 1Б, офис 307а',
                    balloonContent: '142002, Московская область, Домодедово, <br/>улица Текстильщиков, 1Б, офис 307а'
                },
                {
                    iconLayout: 'default#image',
                    iconImageHref: 'img/baloon.png',
                    iconImageSize: [34, 48],
                    iconImageOffset: [-17, -48]
                }
            );
            map.geoObjects.add(placemark);
        };        
    </script><!--карты-->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    
        ym(52287979, "init", {
            id:52287979,
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/52287979" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</body>
</html>