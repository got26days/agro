<header class="header">
    <div class="header__container">
        <div class="header__wrap">
            <a class="header__logo" href="http://agrodohod.ru"><img src="/img/header/logo.png" alt="Агродоход"></a>
            <form action="/search" method="POST" name="search" class="search" id="search" role="search">
                @csrf
                <input type="search" name="q" class="search__input" placeholder="Поиск">
                <button class="btn search__btn" type="submit" title="Искать">Искать</button>
            </form>
                <a href="tel:{{ $phone_var->atel }}" class="header__tel">{{ $phone_var->phone }}</a>
            <nav class="user-menu">
                <ul>
                    <li><a href="#" class="user-menu__link user-menu__link--sign-up">Регистрация</a></li>
                    <li><a href="#" class="user-menu__link user-menu__link--sign-in">Войти</a></li>
                </ul>
            </nav>
        </div>
        <button class="btn mob-menu-btn" onclick="mobMenu(this);">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav class="main-menu container" id="js-main-menu">
            <ul>
                <li class="main-menu__item"><a href="http://agrodohod.ru/o-nas" class="main-menu__link">О НАС</a></li>
                <li class="main-menu__item"><a href="http://agrodohod.ru/uslugi" class="main-menu__link">УСЛУГИ</a></li>
                <li class="main-menu__item"><a href="http://agrodohod.ru/events" class="main-menu__link">СОБЫТИЯ</a></li>
                <li class="main-menu__item"><a href="http://agrodohod.ru/faq" class="main-menu__link">ВОПРОС-ОТВЕТ</a></li>
                @if(Route::current()->getName() == 'mainpage')
                    <li class="main-menu__item"><a href="#contacts" class="main-menu__link js-scroll">КОНТАКТЫ</a></li>
                @else
                <li class="main-menu__item"><a href="http://agrodohod.ru/#contacts" class="main-menu__link">КОНТАКТЫ</a></li>
                @endif
                
            </ul>
        </nav>
    </div>
</header>