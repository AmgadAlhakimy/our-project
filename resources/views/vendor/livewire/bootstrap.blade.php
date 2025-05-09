@php
if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp

<div>
    @if ($paginator->hasPages())
        <nav class="">
            <div class="number_rows_links_2 m-0">
                <p class="small text-muted">
                    {{__('public.Showing')}}
                    <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                    {{__('public.to')}}
                    <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                    {{__('public.of')}}
                    <span class="fw-semibold">{{ $paginator->total() }}</span>
                    {{__('public.results')}}
                </p>
            </div>
            <div class="d-sm-none m-0">
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled " aria-disabled="true">
                            <span class="page-link next_text">{{__('pagination.previous')}}</span>
                        </li>
                    @else
                        <li class="page-item sm_rows_botton">
                            <button type="button" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="page-link" wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled">@lang('pagination.previous')</button>
                        </li>
                    @endif

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item sm_rows_botton">
                            <button type="button" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="page-link" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled">@lang('pagination.next')</button>
                        </li>
                    @else
                        <li class="page-item disabled next_text" aria-disabled="true">
                            <span class="page-link " aria-hidden="true"> {{__('pagination.next')}} </span>
                        </li>
                    @endif
                </ul>
            </div>

            <div class="">
                <div class="number_rows_links_1">
                    <p class="small text-muted">
                        {{__('public.Showing')}}
                        <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                        {{__('public.to')}}
                        <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                        {{__('public.of')}}
                        <span class="fw-semibold">{{ $paginator->total() }}</span>
                        {{__('public.results')}}
                    </p>
                </div>

                <div>
                    <ul class="pagination number_rows_links_1 ms-2 me-2">
                        {{-- Previous Page Link --}}
                        @if ($paginator->onFirstPage())
                            <li class="page-item disabled " aria-disabled="true" aria-label="@lang('pagination.previous')">
                                <span class="page-link  " aria-hidden="true">&lsaquo;</span>
                            </li>
                        @else
                            <li class="page-item ">
                                <button type="button" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="page-link rows_botton radus-10  " wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" aria-label="@lang('pagination.previous')">&lsaquo;</button>
                            </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                <li class="page-item disabled  " aria-disabled="true"><span class="page-link ">{{ $element }}</span></li>
                            @endif

                            {{-- Array Of Links --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <li class="page-item active " wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}" aria-current="page"><span class="page-link radus-10 ">{{ $page }}</span></li>
                                    @else
                                        <li class="page-item " wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}"><button type="button" class="page-link rows_botton radus-10" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}">{{ $page }}</button></li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($paginator->hasMorePages())
                            <li class="page-item ">
                                <button type="button" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="page-link rows_botton radus-10" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" aria-label="@lang('pagination.next')">&rsaquo;</button>
                            </li>
                        @else
                            <li class="page-item disabled " aria-disabled="true" aria-label="@lang('pagination.next')">
                                <span class="page-link " aria-hidden="true">&rsaquo;</span>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    @endif
</div>
