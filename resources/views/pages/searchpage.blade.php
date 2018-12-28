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
            @if(isset($details))
            <div class="sisea-results-list">
                <div class="sisea-result">
                    <a href="search" title="">Результат поиска по "{{ $query }}"</a>
                    <div class="extract">
                        <p></p>
                    </div>
                </div>

                <div class="sisea-result">
                    <div class="extract">
                        <table style="margin-top: 30px;">
                            <thead>
                                <tr>
                                    <td>
                                        Name
                                    </td>
                                    <td>
                                        Url
                                    </td>
                                    <td>
                                        snippet
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($details as $user)
                                    <tr>
                                        <td>
                                            {{ $user['title'] }}
                                        </td>
                                        <td>
                                            {{ $user['link'] }}
                                        </td>
                                        <td>
                                            {{ $user['snippet'] }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
            @else

            <div class="sisea-results-list">
                <div class="sisea-result">
                    {{-- <a href="search" title="">Совпадений не найдено, попробуйте еще раз.</a> --}}
                    <div class="extract">
                        <p>Совпадений не найдено, попробуйте еще раз.</p>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </article>
</main>
@stop
