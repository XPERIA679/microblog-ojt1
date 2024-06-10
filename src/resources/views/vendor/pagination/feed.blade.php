@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center my-4">
        <ul class="pagination flex items-center list-none">
            @if ($paginator->onFirstPage())
                <li class="disabled px-3 py-2 mx-1 text-mydark bg-mycream rounded-full">
                    <span>@lang('pagination.previous')</span>
                </li>
            @else
                <li class="px-3 py-2 mx-1 text-mycream bg-mydark hover:bg-mygray rounded-full">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                </li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="disabled px-3 py-2 mx-1 text-mydark bg-mycream rounded-full"><span>{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active px-3 py-2 mx-1 text-mydark bg-mywhite rounded-full"><span>{{ $page }}</span></li>
                        @else
                            <li class="px-3 py-2 mx-1 text-mycream bg-mydark hover:bg-mygray rounded-full"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="px-3 py-2 mx-1 text-mycream bg-mydark hover:bg-mygray rounded-full">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                </li>
            @else
                <li class="disabled px-3 py-2 mx-1 text-mydark bg-mycream rounded-full">
                    <span>@lang('pagination.next')</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
