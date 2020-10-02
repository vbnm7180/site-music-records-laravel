@if ($paginator->hasPages())
    <nav class="nav__paginator">
        <ul class="list__paginator">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="paginator__page-inactive" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">Предыдущая</span>
                </li>
            @else
                <li class="paginator__page-active">
                    <a class="paginator__page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">Предыдущая</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="paginator__page-selected" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li class="paginator__page-active"><a class="paginator__page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="paginator__page-active">
                    <a class="paginator__page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Следующая</a>
                </li>
            @else
                <li class="paginator__page-inactive" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">Следующая</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
