<!DOCTYPE html>
<html lang="Ru-ru">
<head>
    <meta charset="UTF-8">
    <title>{{ isset($seotitle) ? $seotitle : 'Title' }}</title>
    
    <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="/css/style.css"/>
    
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
    </style>
    {{-- <script>
            (function() {
              var cx = '008143017935988811443:zbrbrrlehi4';
              var gcse = document.createElement('script');
              gcse.type = 'text/javascript';
              gcse.async = true;
              gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
              var s = document.getElementsByTagName('script')[0];
              s.parentNode.insertBefore(gcse, s);
            })();
          </script>
          <gcse:search></gcse:search> --}}
</head>
<body>

        <script>
                (function() {
                  var cx = '008143017935988811443:zbrbrrlehi4';
                  var gcse = document.createElement('script');
                  gcse.type = 'text/javascript';
                  gcse.async = true;
                  gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                  var s = document.getElementsByTagName('script')[0];
                  s.parentNode.insertBefore(gcse, s);
                })();
              </script>
              <gcse:search></gcse:search>
    <!--[if lt IE 8]>
        <p class="browserhappy">
            Ваш браузер <strong>устарел</strong>. Пожалуйста <a href="https://browsehappy.com/"  target="_blank">обновите</a>.
        </p>
    <![endif]-->
	<div class="wrapper">
        @include('layouts.header')
        @yield ('content')
        @include('layouts.footer')
    
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
</body>
</html>