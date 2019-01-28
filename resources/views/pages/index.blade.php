@extends('layouts.master')

@section('content')
<main class="main">
    <section class="main-sec">
        <div class="main-sec__wrap">
            <div class="container">
                <h1 class="main-sec__title">
                   {!! $caption->body !!}
                </h1>
            </div>
        </div>
        <img src="/storage/{{ $caption->banner }}" alt="" class="main-sec__img">
        <img src="/storage/{{ $caption->mobile_banner }}" alt="" class="main-sec__mob-img">
    </section>        
    <section class="sec income">
        <div class="container">
            <h2 class="sec__title">Доходное хозяйство</h2>
            <div class="income__wrap">
                <div class="income__row">
                    <div class="income__item">
                        <div class="income__item-img"><img src="/img/pic/fermer.jpg" alt=""></div>
                        <div class="income__item-main">
                            <h3 class="income__item-title">Начинающим <br>фермерам</h3>
                            <div class="income__item-txt">АгроДоход поможет вам разобраться со всеми тонкостями ведения фермерского хозяйства и увеличит вашу прибыль.</div>
                        </div>
                    </div>
                    <div class="income__item">
                        <div class="income__item-img"><img src="/img/pic/fermer-2.jpg" alt=""></div>
                        <div class="income__item-main">
                            <h3 class="income__item-title">Действующим сельхоз производителям</h3>
                            <div class="income__item-txt">Все, что нужно опытному фермеру: сбыт, снабжение, оформление земли, гранты, субсидии и многое другое для вашего прибыльного хозяйства.</div>
                        </div>
                    </div>
                </div>
                <div class="income__row-bar">
                    <a class="btn income__row-bar-btn" href="/uslugi">Участвовать</a>
                </div>
                <div class="income__item">
                    <div class="income__item-img"><img src="img/pic/invest.jpg" alt=""></div>
                    <div class="income__item-main">
                        <h3 class="income__item-title">Инвесторам</h3>
                        <div class="income__item-txt">Мы предоставляем возможность инвестировать в выгодные сельскохозяйственные проекты. У нас вы найдёте актуальные предложения и необходимую аналитику.</div>
                        <a class="btn income__item-btn" href="/direction/investoram">Участвовать</a>
                    </div>
                </div>
                <div class="income__item">
                    <div class="income__item-img"><img src="img/pic/tech.jpg" alt=""></div>
                    <div class="income__item-main">
                        <h3 class="income__item-title">Поставщикам <br>технологий и <br>оборудования</h3>
                        <div class="income__item-txt">Фермерским хозяйствам необходимы новейшие высокотехнологичные разработки. Спрос рождает предложения.</div>
                        <a class="btn income__item-btn" href="/direction/postavshikam-tehnologij-i-oborudovaniya">Участвовать</a>
                    </div>
                </div>
                <div class="income__item">
                    <div class="income__item-img"><img src="img/pic/agrorinok.jpg" alt=""></div>
                    <div class="income__item-main">
                        <h3 class="income__item-title">Агрорынок</h3>
                        <div class="income__item-txt">Для каждого продавца найдётся свой покупатель. Сбыт и оптовое приобретение продукции посредством нашего сайта.</div>
                        <a class="btn income__item-btn" href="/direction/agrorynok/">Участвовать</a>
                    </div>
                </div>

            </div>
        </div>
    </section>        
    <section class="sec directions">
        <div class="container">
            <h2 class="sec__title">Направления деятельности </h2>
            <div class="directions__txt">«Агродоход» — это сервис «одного окна», позволяющий Вам начать свой сельскохозяйственный бизнес или оптимизировать существующий. <br>«Агродоход» — всё, что необходимо фермеру:</div>
            <div class="directions__wrap directions__wrap--first">
                <a href="{{ $circl1['link'] }}" class="directions__item">
                    <div class="directions__item-img"><img src="img/pic/ring-1.png" alt=""></div>
                    <div class="directions__item-txt">Дистрибьюция и сбыт продукции</div>
                </a>
                <a href="{{ $circl2['link'] }}" class="directions__item">
                    <div class="directions__item-img"><img src="img/pic/ring-2.png" alt=""></div>
                    <div class="directions__item-txt">Гранты, субсидии и кредитование</div>
                </a>
                <a href="{{ $circl3['link'] }}" class="directions__item">
                    <div class="directions__item-img"><img src="img/pic/ring-3.png" alt=""></div>
                    <div class="directions__item-txt">Единый центр закупок</div>
                </a>
                <a href="{{ $circl4['link'] }}" class="directions__item">
                    <div class="directions__item-img"><img src="img/pic/ring-4.png" alt=""></div>
                    <div class="directions__item-txt">Привлечение инвестиций</div>
                </a>
            </div>
            <div class="directions__wrap">                    
                <a href="{{ $circl5['link'] }}" class="directions__item">
                    <div class="directions__item-img"><img src="img/pic/ring-5.png" alt=""></div>
                    <div class="directions__item-txt">Технологии и инновации</div>
                </a>
                <a href="{{ $circl6['link'] }}" class="directions__item">
                    <div class="directions__item-img"><img src="img/pic/ring-6.png" alt=""></div>
                    <div class="directions__item-txt">Бухгалтерское сопровождение</div>
                </a>
                <a href="{{ $circl7['link'] }}" class="directions__item">
                    <div class="directions__item-img"><img src="img/pic/ring-7.png" alt=""></div>
                    <div class="directions__item-txt">Производственный аудит</div>
                </a>
                <a href="{{ $circl8['link'] }}" class="directions__item">
                    <div class="directions__item-img"><img src="img/pic/ring-8.png" alt=""></div>
                    <div class="directions__item-txt">Юридическое сопровождение</div>
                </a>
                <a href="{{ $circl9['link'] }}" class="directions__item">
                    <div class="directions__item-img"><img src="img/pic/ring-9.png" alt=""></div>
                    <div class="directions__item-txt">Аналитический центр</div>
                </a>
            </div>


        </div>
    </section>            
    <section class="sec-form">
        <div class="container">
            <h2 class="sec-form__title">Хотите, чтобы мы ответили на ваши вопросы?</h2>
            <div class="sec-form__txt">Позвоните по телефону <a href="tel:+74950000000">+7 (495) 000-00-00</a> с понедельника по пятницу с 9.00 до 18.00. Или отправьте запрос и мы сами вам перезвоним.</div>
            <form action="/form" method="post" name="order-form" class="sec-form__form js-form-val" id="order-form">
                @csrf
                <input type="text" name="title" class="js-val" hidden="hidden" value="Хотите, чтобы мы ответили на ваши вопросы?">
                <input type="text" class="input sec-form__input js-val" name="name" placeholder="Ваше имя" required>
                <input type="tel" class="input sec-form__input js-val" name="tel" placeholder="Номер телефона" required>
                <button class="btn btn--orange sec-form__submit" type="submit">Перезвоните мне</button>
            </form>
        </div>
    </section>        
    <section class="sec contacts-sec" id="contacts">
        <div class="container">
            <h2 class="sec__title">Контакты</h2>
            <div class="contacts-sec__wrap">
                <div class="contacts-sec__main">
                    <div class="contacts-sec__table">
                        <div class="contacts-sec__row">
                            <div class="contacts-sec__title">Тел.:</div>
                            <div class="contacts-sec__val"><a href="tel:{{ $caption['phonelink'] }}">{{ $caption['phone'] }}</a></div>
                        </div>
                        <div class="contacts-sec__row">
                            <div class="contacts-sec__title">E-mail:</div>
                        <div class="contacts-sec__val"><a href="mailto:{{ $caption['email'] }}">{{ $caption['email'] }}</a></div>
                        </div>
                        <div class="contacts-sec__row">
                            <div class="contacts-sec__title">Адрес:</div>
                        <div class="contacts-sec__val">{!! $caption['adderss'] !!}</div>
                        </div>
                    </div>
                    <ul class="contacts-sec__soc">
                        @if(isset($footer_var))
                        <li><a href="{{ $footer_var->facebook }}" class="contacts-sec__soc-link contacts-sec__soc-link--facebook" target="_blank" title="Facebook">Facebook</a></li>
                        <li><a href="{{ $footer_var->inst }}" class="contacts-sec__soc-link contacts-sec__soc-link--instagram" target="_blank" title="Instagram">Instagram</a></li>
                        <li><a href="{{ $footer_var->vk }}" class="contacts-sec__soc-link contacts-sec__soc-link--vk" target="_blank" title="Вконтакте">Вконтакте</a></li>
                        @endif
                    </ul>
                </div>
                <div class="contacts-sec__map" id="map"></div>
            </div>
        </div>
    </section>            
    <section class="sec seo-text">
        <div class="container">
            <h2 class="sec__title">{{ $caption->seo_titile }}</h2>
            <p>{{ $caption->seo_text }}</p>
        </div>
    </section>
</main>
@stop