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
        <img src="img/pic/main-sec-bottom.jpg" alt="" class="main-sec__img">
        <img src="img/pic/main-mob.jpg" alt="" class="main-sec__mob-img">
    </section>        
    <section class="sec income">
        <div class="container">
            <h2 class="sec__title">Доходное хозяйство</h2>
            <div class="income__wrap">
                <div class="income__row">
                    <div class="income__item">
                        <div class="income__item-img"><img src="img/pic/fermer.jpg" alt=""></div>
                        <div class="income__item-main">
                            <h3 class="income__item-title">Начинающим <br>фермерам</h3>
                            <div class="income__item-txt">АгроДоход поможет вам разобраться со всеми тонкостями ведения фермерского хозяйства и увеличит вашу прибыль.</div>
                        </div>
                    </div>
                    <div class="income__item">
                        <div class="income__item-img"><img src="img/pic/fermer-2.jpg" alt=""></div>
                        <div class="income__item-main">
                            <h3 class="income__item-title">Действующим сельхоз производителям</h3>
                            <div class="income__item-txt">Все, что нужно опытному фермеру: сбыт, снабжение, оформление земли, гранты, субсидии и многое другое для вашего прибыльного хозяйства.</div>
                        </div>
                    </div>
                </div>
                <div class="income__row-bar">
                    <button class="btn income__row-bar-btn">Участвовать</button>
                </div>
                @foreach($top_directions as $top_direction)
                <div class="income__item">
                    <div class="income__item-img"><img src="/storage/{{ $top_direction->image }}" alt=""></div>
                    <div class="income__item-main">
                    <h3 class="income__item-title">{{ $top_direction->title }}</h3>
                        <div class="income__item-txt">{{ $top_direction->description }}</div>
                    <a class="btn income__item-btn" href="/direction{{ $top_direction->id }}">Участвовать</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>        
    <section class="sec directions">
        <div class="container">
            <h2 class="sec__title">Направления деятельности </h2>
            <div class="directions__txt">«Агродоход» — это сервис «одного окна», позволяющий Вам начать свой сельскохозяйственный бизнес или оптимизировать существующий. <br>«Агродоход» — всё, что необходимо фермеру:</div>
            <div class="directions__wrap directions__wrap--first">
                <a href="#" class="directions__item">
                        <div class="directions__item-img"><img src="img/pic/ring-2.png" alt=""></div>
                        <div class="directions__item-txt">Гранты, субсидии и кредитование</div>
                </a>
                <a href="#" class="directions__item">
                    <div class="directions__item-img"><img src="img/pic/ring-6.png" alt=""></div>
                    <div class="directions__item-txt">Бухгалтерское сопровождение</div>
                </a>
                <a href="#" class="directions__item">
                    <div class="directions__item-img"><img src="img/pic/ring-8.png" alt=""></div>
                    <div class="directions__item-txt">Юридическое сопровождение</div>
                </a>
            </div>
            <div class="directions__wrap">                    
                @foreach($bottom_directions as $bottom_direction)
                <a href="/direction{{ $bottom_direction->id }}" class="directions__item">
                    <div class="directions__item-img"><img src="/storage/{{ $bottom_direction->circle }}" alt=""></div>
                    <div class="directions__item-txt">{{ $bottom_direction->title }}</div>
                </a>
                @endforeach
            </div>
        </div>
    </section>            
    <section class="sec-form">
        <div class="container">
            <h2 class="sec-form__title">Хотите, чтобы мы ответили на ваши вопросы?</h2>
            <div class="sec-form__txt">Позвоните по телефону <a href="tel:+74950000000">+7 (495) 000-00-00</a> с понедельника по пятницу с 9.00 до 18.00. Или отправьте запрос и мы сами вам перезвоним.</div>
            <form action="php/mail.php" method="post" name="order-form" class="sec-form__form js-form-val" id="order-form">
                <input type="text" name="title" class="js-val" hidden="hidden" value="Хотите, чтобы мы ответили на ваши вопросы?">
                <input type="text" class="input sec-form__input js-val" name="name" placeholder="Ваше имя">
                <input type="tel" class="input sec-form__input js-val" name="tel" placeholder="Номер телефона">
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
                            <div class="contacts-sec__val"><a href="tel:+74959026838">+7 (495) 902-68-38</a></div>
                        </div>
                        <div class="contacts-sec__row">
                            <div class="contacts-sec__title">E-mail:</div>
                            <div class="contacts-sec__val"><a href="mailto:info@agrodohod.ru">info@agrodohod.ru</a></div>
                        </div>
                        <div class="contacts-sec__row">
                            <div class="contacts-sec__title">Адрес:</div>
                            <div class="contacts-sec__val">142002, Московская область, Домодедово, <br/>ул. Текстильщиков, 1Б, офис 307а</div>
                        </div>
                    </div>
                    <ul class="contacts-sec__soc">
                        <li><a href="" class="contacts-sec__soc-link contacts-sec__soc-link--facebook" target="_blank" title="Facebook">Facebook</a></li>
                        <li><a href="" class="contacts-sec__soc-link contacts-sec__soc-link--instagram" target="_blank" title="Instagram">Instagram</a></li>
                        <li><a href="" class="contacts-sec__soc-link contacts-sec__soc-link--vk" target="_blank" title="Вконтакте">Вконтакте</a></li>
                    </ul>
                </div>
                <div class="contacts-sec__map" id="map"></div>
            </div>
        </div>
    </section>            
    <section class="sec seo-text">
        <div class="container">
            <h2 class="sec__title">Развитие сельского хозяйства в России</h2>
            <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
        </div>
    </section>
</main>
@stop