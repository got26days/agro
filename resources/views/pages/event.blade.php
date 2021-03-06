@extends('layouts.master')

@section('content')
<main class="main">
        <div class="breadcrumbs">
            <div class="container">
                <div class="breadcrumbs__wrap">
                    <a href="/">Главная</a>&#8195;/&#8195;<a href="/events">События</a><span> / {{ $post->title }}</span>
                </div>
            </div>
        </div>
        <article class="article event">
            <div class="container">
                <time class="article__time" datetime="2018-06-20T08:00:00+03:00">{{ Carbon\Carbon::parse($post->date)->format('d.m.Y') }}</time>                    
                <h1>{{ $post->title }}</h1>
            <img class="article__main-img" src="/storage/{{ $post->image }}" alt="">
                {!! $post->body !!}
                <div class="article__bar">
                        @if ($post['btn'] == 'true')
                    <button class="btn btn--green article__btn js-order-btn"data-title="Оставить заявку" data-btn="Оставить заявку">Хочу прийти</button>
                        @endif
                </div>
            </div>
        </article>
    </main>
    @stop