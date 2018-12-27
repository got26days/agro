@extends('layouts.master')

@section('content')

<main class="main">
        <div class="breadcrumbs">
            <div class="container">
                <div class="breadcrumbs__wrap">
                <a href="/">Главная</a>&#8195;/&#8195;<span>{{ $direction->title }}</span>
                </div>
            </div>
        </div>
        <article class="article">
            <div class="container">
                <h1>{{ $direction->title }}</h1>
                <p>{!! $direction->body !!}</p>
            </div>
        </article>
    <div class="main-form main-form--agro" style="background-image: url(/storage/{{ $direction->background }});">
            <div class="container">
                <div class="main-form__wrap">
                    <h2 class="main-form__title">{{ $direction->formtitle }}</h2>
                    <form action="/form" method="post" name="tech-form" class="main-form__form js-form-val">
                        @csrf
                        <input type="text" name="title" class="js-val" hidden="hidden" value="страница '{{ $direction->title }}'">
                        <textarea class="main-form__input main-form__textarea js-val" name="text" placeholder="Подробно опишите ваше предложение" required></textarea>
                        <div class="main-form__row">
                            <input type="text" class="main-form__input js-val" name="name" placeholder="Имя" required>
                            <input type="email" class="main-form__input js-val" name="email" placeholder="E-mail" required>
                            <button class="btn btn--orange main-form__submit" type="submit">Отправить предложение</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

@stop
