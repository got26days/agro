@extends('domain.master')

@section('content')
<main class="main">
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__wrap">
                <a href="#">Главная</a>&#8195;/&#8195;<span>Кредиты</span> &#8195;/&#8195;<span>{{ $credit['title'] }}</span>
            </div>
        </div>
    </div>
    <div class="farm">
        <section class="sec credit-page">
            <div class="container">
                <h1 class="sec__title credit-page__title" style="white-space: pre-line;">{{ $credit['title'] }}</h1>
                <div class="credit-page__frame">
                    <div class="credit-page__frame-pic" style="background: url('/storage/{{ $credit['image'] }}') center center no-repeat;"></div>
                    <div class="credit-page__frame-txt" style="white-space: pre-line;">{{ $credit['body'] }}</div>                        	
                </div>
                <div class="credit-page__bar">
                    <a href="#" class="btn btn--green sec__bar-btn js-order-btn-two" data-title="Оставить заявку" data-titletwo="{{ $credit->title }}" data-btn="Оставить заявку">Оставить заявку</a>
                </div>
                <h2 class="sec__title">Почему мы</h2>
                <div class="credit-page__row">
                    <div class="credit-page__item">
                        <div class="credit-page__item-pic"><img src="/storage/{{ $credit['image1'] }}" alt=""></div>
                        <div class="credit-page__item-main">
                            <div class="credit-page__item-name">{{ $credit['title1'] }}</div>
                            <div class="credit-page__item-txt" style="white-space: pre-line;">{{ $credit['body1'] }}</div>
                        </div>
                    </div>
                    <div class="credit-page__item">
                        <div class="credit-page__item-pic"><img src="/storage/{{ $credit['image2'] }}" alt=""></div>
                        <div class="credit-page__item-main">
                            <div class="credit-page__item-name">{{ $credit['title2'] }}</div>
                            <div class="credit-page__item-txt" style="white-space: pre-line;"> 
                                    {{ $credit['body2'] }}
                            </div>
                        </div>
                    </div>
                    <div class="credit-page__item">
                        <div class="credit-page__item-pic"><img src="/storage/{{ $credit['image3'] }}" alt=""></div>
                        <div class="credit-page__item-main">
                            <div class="credit-page__item-name">{{ $credit['title3'] }}</div>
                            <div class="credit-page__item-txt" style="white-space: pre-line;"> 
                                    {{ $credit['body3'] }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
        <section class="about__team">
            <h2 class="about__team-newheader">Вам помогают</h2>
            <div class="team" id="js-team-slider">
                @foreach($teams as $team)
                <div>
                    <div class="team__slide">
                        <div class="team__photo">
                        <img src="/storage/{{ $team->photo }}" alt="">
                        @if (!empty($team->youtube))
                        <div class="video__blind js-blind" data-href="{{ $team->youtube }}"></div>
                        @endif
                        </div>
                    <div class="team__name">{{ $team->name  }}</div>
                    <div class="team__status" style="white-space: pre-line;">{{  $team->position }}</div>
                    </div>
                </div>
                @endforeach
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
        </div>
        <div class="main-form main-form--credit">
            <div class="container">
                <div class="main-form__wrap">
                    <h2 class="main-form__title">Оставьте запрос или звоните сами: <a href="tel:+74959026838">8 (800) 555-85-86</a></h2>
                    <form action="/form" method="post" name="tech-form" class="main-form__form js-form-val">
                        @csrf
                        <input type="text" name="title" class="js-val" hidden="hidden" value="{{ $credit['title'] }}">
                        <input type="text" name="yandex_title" hidden="hidden" value="{{ $credit['yandex_title'] }}"
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