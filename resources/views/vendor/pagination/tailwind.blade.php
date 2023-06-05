@if ($paginator->hasPages())
    <ul class="pagination">
        @if (!$paginator->onFirstPage())
            <li class="pagination__item">
                <a class="pagination__item-link" href="{{ $paginator->previousPageUrl() }}">
                    <img class="pagination__arrow" src="{{ asset('site/img/arrow_right.svg') }}" /></a>
            </li>
        @endif
        @foreach ($elements as $element)
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="pagination__item pagination__item_active">
                        <a href="{{ $url }}" class="pagination__item-link">{{ $page }}</a>
                    </li>
                @else
                    <li class="pagination__item">
                        <a href="{{ $url }}" class="pagination__item-link">{{ $page }}</a>
                    </li>
                @endif
            @endforeach
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="pagination__item">
                <a href="{{ $paginator->nextPageUrl() }}" class="pagination__item-link">
                    <img class="pagination__arrow" src="{{ asset('site/img/arrow_left.svg') }}" />
                </a>
            </li>
        @endif
    </ul>
@endif
