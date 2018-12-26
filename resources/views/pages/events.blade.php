@extends('layouts.master')

@section('content')
<main class="main">
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__wrap">
                <a href="/">Главная</a>&#8195;/&#8195;<span>События</span>
            </div>
        </div>
    </div>
    <div class="events">
        <div class="container">
            <h1 class="sec__title events__title">События</h1>
            <div class="events__wrap">
                @foreach($posts as $post)
                <div class="events__item">
                    <a href="#" class="events__item-img"><img src="img/events/pic-1.jpg" alt=""></a>
                    <div class="events__item-main">
                    <time class="events__item-time" datetime="2018-06-20T08:00:00+03:00">{{ Carbon\Carbon::parse($post->updated_at)->format('d.m.Y') }}</time>
                        <div class="events__item-title">{{ $post->title }}</div>
                        <div class="events__item-txt"></div>
                        <div class="events__item-bar">
                        <a href="/event/solo{{ $post->id }}" class="events__item-more">Подробнее</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $posts->links() }}
        </div>
    </div>
</main>
@stop