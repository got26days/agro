@if ($paginator->hasPages())
<div class="pagination">
        @if ($paginator->onFirstPage())

            
        @else
                <a href="{{ $paginator->previousPageUrl() }}"  rel="prev" class="pagination__next" aria-label="@lang('pagination.previous')" style="margin-right: 30px;">Назад</a>
        @endif

    <ul class="pagination__bar" role="navigation">
        {{-- Previous Page Link --}}


        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><a class="active" aria-current="page">{{ $element }}</a></li> 
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active" aria-current="page"><a class="active">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

    </ul>

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pagination__next" aria-label="@lang('pagination.next')">Далее</a>
        @else

        @endif
</div>

@endif
