@extends('layouts.master')

@section('content')
<main class="main">
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__wrap">
                <a href="#">Главная</a>&#8195;/&#8195;<span>О нас</span>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="container">
            <h1 class="sec__title about__title">О нас</h1>
        </div>
        <div class="about__img"></div>
        <div class="container">
            <article class="article about__article">
                    @if (!empty($about))
                    {!! $about->body !!}
                    @endif
            </article>
            <section class="about__team">
                <h2 class="about__team-header">Наша команда</h2>
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
                        <div class="team__status">{{  $team->position }}</div>
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
    </div>
</main>
@stop