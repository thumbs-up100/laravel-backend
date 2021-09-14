@if ($paginator->hasPages())
    <div class="row row-10">
        <div class="col-sm-12 col-md-5 pl-3">
            <div class="dataTables_info" id="DataTables_Table_4_info" role="status" aria-live="polite">Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} entries
            </div>
        </div>
        <div class="col-sm-12 col-md-7 pr-3">
            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_4_paginate">
                <ul class="pagination" style="float: right">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="disabled page-item paginate_button"><span class="page-link">{{ __('Previous') }}</span></li>
                    @else
                        <li class="page-item paginate_button"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"
                                                 rel="prev">{{ __('Previous') }}</a></li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($paginator->links()->elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="disabled"><span>{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item paginate_button active"><span class="page-link">{{ $page }}</span></li>
                                @else
                                    <li class="page-item paginate_button"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item paginate_button"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"
                                                 rel="next">{{ __('Next') }}</a></li>
                    @else
                        <li class="disabled page-item paginate_button"><span class="page-link">{{ __('Next') }}</span></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endif
