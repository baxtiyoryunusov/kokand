
@if ($paginator->hasPages())
    <div class="row ">



    <div class="col-md-4 text-center d-flex justify-content-center">
        <nav>
            <ul class="pagination  ">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <span class="page-link" aria-hidden="true">&lsaquo; </span>
                    </li>
                @else
                    <li class="page-item ">
                        <a class="page-link text-white bg-secondary" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo; </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active bg-secondary text-white rounded-0" aria-current="page"><span class="page-link bg-secondary border-0 rounded-0 text-white">{{ $page }}</span></li>
                            @else
                                <li class="page-item "><a class="page-link text-dark" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item next">
                        <a class="page-link bg-secondary border-0 text-white next-a " href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next') "> &rsaquo;</a>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <span class="page-link" aria-hidden="true"> &rsaquo;</span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
        <div class="col-md-4"></div>
    </div>
@endif
