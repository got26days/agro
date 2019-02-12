@extends('domain.master')

@section('content')
<main class="main">
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__wrap">
                <a href="#">Главная</a>&#8195;/&#8195;<span>Кредиты</span> &#8195;/&#8195;<span>Помощь в получении кредитов, субсидий и грантов от компании «Агродоход»</span>
            </div>
        </div>
    </div>
    <div class="farm">
        <section class="sec credit-page">
            <div class="container">
                <h1 class="sec__title credit-page__title" style="white-space: pre-line;">Помощь в получении кредитов, субсидий и грантов от компании «Агродоход»</h1>
                <div class="credit-page__frame">
                    <div class="credit-page__frame-pic" style="background: url('/img/credit/dbody.jpg') center center no-repeat;"></div>
                    <div class="credit-page__frame-txt">Как получить кредит на хозяйство и не влезть в долги? Как не попасть в кабальный договор с кредитной организацией? Как выгодно воспользоваться кредитом и приумножить свой капитал? У нас есть практический опыт для ответов на эти вопросы.	АгроДоход — это организация, имеющая партнёрские отношения с банками и государственными структурами, содействующими развитию сельского хозяйства в России. С нами вы не только сможете получить кредит под льготный процент, но и правильно подготовить пакет документов на получение государственной поддержки и субсидий. Консультируем бесплатно. Звоните для получения подробностей!</div>                        	
                </div>
                <div class="credit-page__bar">
                    <a href="#" class="btn btn--green sec__bar-btn js-order-btn-two" data-title="Оставить заявку" data-titletwo="Оставить заявку" data-btn="Оставить заявку">Оставить заявку</a>
                </div>
                <h2 class="sec__title">Почему мы</h2>
                <div class="credit-page__row">
                    <div class="credit-page__item">
                        <div class="credit-page__item-pic"><img src="/img/credit/img1.jpg" alt=""></div>
                        <div class="credit-page__item-main">
                            <div class="credit-page__item-name">Обезопасим от долгов</div>
                            <div class="credit-page__item-txt" style="white-space: pre-line;">Изучим вашу финансовую ситуацию. Проверим все возможные варианты для получения кредита лично для вас. Учтём все риски и перспективы. Выберем и предложим самые лучшие условия по кредитованию именно вашего хозяйства.</div>
                        </div>
                    </div>
                    <div class="credit-page__item">
                        <div class="credit-page__item-pic"><img src="/img/credit/img2.jpg" alt=""></div>
                        <div class="credit-page__item-main">
                            <div class="credit-page__item-name">Работаем быстро</div>
                            <div class="credit-page__item-txt" style="white-space: pre-line;"> 
                                Наши партнёрские отношения с десятками кредитных организаций по всей России и многолетний опыт позволят вам получить деньги в сжатые сроки. Доверьте всё формальное общение с банками профессиональным юристам и бухгалтерам из АгроДохода.
                            </div>
                        </div>
                    </div>
                    <div class="credit-page__item">
                        <div class="credit-page__item-pic"><img src="/img/credit/img3.jpg" alt=""></div>
                        <div class="credit-page__item-main">
                            <div class="credit-page__item-name">С нами выгодно</div>
                            <div class="credit-page__item-txt" style="white-space: pre-line;"> 
                                Воспользовавшись услугами АгроДохода, вы не только сможете получить кредит, но откроете для себя доступ к крупными сетями сбыта и поставщиками материалов для СХ. Наша задача - не просто помочь вам получить кредит, но и сделать ваш бизнес успешным.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="main-form main-form--credit">
            <div class="container">
                <div class="main-form__wrap">
                    <h2 class="main-form__title">Оставьте запрос или звоните сами: <a href="tel:+74959026838">8 (800) 555-85-86</a></h2>
                    <form action="/form" method="post" name="tech-form" class="main-form__form js-form-val">
                        @csrf
                        <input type="text" name="title" class="js-val" hidden="hidden" value="Оставьте запрос или звоните сами">
                        <textarea class="main-form__input main-form__textarea js-val" name="text" placeholder="Напишите дополнительную информацию или оставьте это поле пустым."></textarea>
                        <div class="main-form__row">
                            <input type="text" class="main-form__input js-val" name="name" placeholder="Имя">
                            <input type="tel" class="main-form__input js-val" name="tel" placeholder="Телефон">
                            <button class="btn btn--orange main-form__submit" type="submit">Отправить запрос</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@stop