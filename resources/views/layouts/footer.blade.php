<footer class="footer">
    <div class="container">
        <nav class="footer-menu">
            <ul>
                <li class="footer-menu__item"><a href="{{ route('about') }}" class="footer-menu__link">О нас</a></li>
                <li class="footer-menu__item"><a href="/uslugi" class="footer-menu__link">Услуги</a></li>
                <li class="footer-menu__item"><a href="/events" class="footer-menu__link">События</a></li>
                <li class="footer-menu__item"><a href="/faq" class="footer-menu__link">Вопрос-ответ</a></li>
                @if(Route::current()->getName() == 'mainpage')
                    <li class="footer-menu__item"><a href="#contacts" class="footer-menu__link js-scroll">Контакты</a></li>
                @else
                    <li class="footer-menu__item"><a href="/#contacts" class="footer-menu__link">Контакты</a></li>
                @endif
            </ul>
        </nav>
    </div>
    <div class="footer__container">
        <div class="footer__wrap">
            @if(isset($footer_var))
            <div class="footer__contacts">
                {!! $footer_var->body !!}
            </div>
            <div class="footer__middle">
                <div><a href="/download/policy" target="_blank">Политика в отношении обработки персональных данных</a></div>
                <div><span>АгроДоход © 2018</span>&#8195;&#8195;<span>Сайт создан <a href="http://bigdatak.com/" target="_blank">Big Data Key</a></span></div>
            </div>
            <ul class="footer__soc">
                <li><a href="{{ $footer_var->ok }}" target="_blank" class="footer__soc-link footer__soc-link--ok" title="Одноклассники">Одноклассники</a></li>
                <li><a href="{{ $footer_var->facebook }}" target="_blank" class="footer__soc-link footer__soc-link--facebook" title="Facebook">Facebook</a></li>
                <li><a href="{{ $footer_var->inst }}" target="_blank" class="footer__soc-link footer__soc-link--instagram" title="Instagram">Instagram</a></li>
                <li><a href="{{ $footer_var->vk }}" target="_blank" class="footer__soc-link footer__soc-link--vk" title="Вконтакте">Вконтакте</a></li>
            </ul>
            @endif
        </div>
    </div>
</footer>