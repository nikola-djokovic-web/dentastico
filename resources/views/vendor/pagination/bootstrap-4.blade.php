@if ($paginator->hasPages())
<nav id="pagination" class="pagination_wrap pagination_pages">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())

            <span class="pager_prev"></span>
        @else

                <a class="pager_prev" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"></a>

        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a>{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="pager_current active" aria-current="page">{{ $page }}</span>
                    @else
                      <a  href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())

                <a class="pager_next" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"></a>

        @else

                <span class="pager_next" aria-hidden="true"></span>

        @endif
    </nav>
@endif

<!-- <span class="pager_current active ">1</span>
<a href="#">2</a>
<a href="#" class="pager_next"></a>
<a href="#" class="pager_last"></a> -->
