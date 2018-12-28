@extends('layouts.master')

@section('content')
<main class="main">
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__wrap"><a href="/">Главная</a> / 
                <span>Результат поиска</span></div>
        </div>
    </div>
    <article class="article">
        <div class="container">
            <h1>Результат поиска</h1>
            <!--<p class="sisea-results">2 найдено для "<span class="simplesearch-highlight">поиск</span>"</p>-->
            @if(count($users) > 0)
            <div class="sisea-results-list">
                <div class="sisea-result" style="margin-bottom: 15px;">
                    <p>Результат поиска "{{ $query }}"</p>
                </div>

                <div class="sisea-results-list">
                    @foreach($users as $user)
                    <div class="sisea-result" style="margin-bottom: 15px;">
                        <a href="{{ $user['link'] }}" title="">{{ $user['title'] }}</a>
                        <div class="extract"><p>{{ $user['snippet'] }}</p></div>
                    </div>
                    @endforeach
                </div>
                
            </div>
            @else

            <div class="sisea-results-list">
                <div class="sisea-result">
                    <div class="extract">
                        <p>По вашему запросу ничего не найдено. Попробуйте ввести похожие по смыслу слова, чтобы получить лучший результат.</p>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </article>
</main>
@stop
