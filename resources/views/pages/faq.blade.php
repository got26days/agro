@extends('layouts.master')

@section('content')
<main class="main">
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__wrap">
                <a href="#">Главная</a>&#8195;/&#8195;<span>{{ $page_title }}</span>
            </div>
        </div>
    </div>
    <div class="faq">
        <div class="container">
            <h1 class="sec__title faq__title">{{ $page_title }}</h1>
            <div class="faq__wrap">
                @foreach($faqs as $faq)
                <div class="faq__item js-accordion-item">
                    <div class="faq__item-header">
                        <h3 class="faq__item-title" style="white-space: pre-line;">{{ $faq->question }}</h3>
                        <button class="btn btn--green faq__item-btn js-accordion-btn">Ответ</button>
                    </div>
                    <div class="faq__item-main js-accordion-hide" style="white-space: pre-line;">
                        {{ $faq->answer }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@stop