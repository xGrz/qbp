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
        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between my-1">
            <div class="flex justify-between flex-1 sm:hidden">
                <span>
                    @if ($paginator->onFirstPage())
                        <x-p::pagination.item aria-disabled="true">
                            {!! __('pagination.previous') !!}
                        </x-p::pagination.item>
                    @else
                        <x-p::pagination.item
                            wire:click.prevent="previousPage('{{ $paginator->getPageName() }}')"
                            x-on:click="{{ $scrollIntoViewJsSnippet }}"
                        >
                            {!! __('pagination.previous') !!}
                        </x-p::pagination.item>
                    @endif
                </span>

                <span>
                    @if ($paginator->hasMorePages())
                        <x-p::pagination.item
                            wire:click="nextPage('{{ $paginator->getPageName() }}')"
                            x-on:click="{{ $scrollIntoViewJsSnippet }}"
                        >
                            {!! __('pagination.next') !!}
                        </x-p::pagination.item>
                    @else
                        <x-p::pagination.item>
                            {!! __('pagination.next') !!}
                        </x-p::pagination.item>
                    @endif
                </span>
            </div>

            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700 leading-5">
                        <span>{!! __('Showing') !!}</span>
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        <span>{!! __('to') !!}</span>
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                        <span>{!! __('of') !!}</span>
                        <span class="font-medium">{{ $paginator->total() }}</span>
                        <span>{!! __('results') !!}</span>
                    </p>
                </div>

                <div class="flex items-stretch gap-x-0.5">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <x-p::pagination.item
                            aria-disabled="true"
                            aria-label="{{ __('pagination.previous') }}"
                        >
                            <x-p::icons.left-arrow/>
                        </x-p::pagination.item>
                    @else
                        <x-p::pagination.item
                            wire:click.prevent="previousPage('{{ $paginator->getPageName() }}')"
                            x-on:click="{{ $scrollIntoViewJsSnippet }}"
                            aria-label="{{ __('pagination.previous') }}"
                        >
                            <x-p::icons.left-arrow/>
                        </x-p::pagination.item>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <x-p::pagination.item aria-disabled="true">
                                {{ $element }}
                            </x-p::pagination.item>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <x-p::pagination.item
                                        aria-current="page"
                                        wire:key="paginator-{{ $paginator->getPageName() }}-page{{ $page }}"
                                    >
                                        {{$page}}
                                    </x-p::pagination.item>
                                @else
                                    <x-p::pagination.item
                                        wire:key="paginator-{{ $paginator->getPageName() }}-page{{ $page }}"
                                        wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')"
                                        x-on:click="{{ $scrollIntoViewJsSnippet }}"
                                        aria-label="{{ __('Go to page :page', ['page' => $page]) }}"
                                    >
                                        {{$page}}
                                    </x-p::pagination.item>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <x-p::pagination.item
                            wire:click="nextPage('{{ $paginator->getPageName() }}')"
                            x-on:click="{{ $scrollIntoViewJsSnippet }}"
                            aria-label="{{ __('pagination.next') }}"
                        >
                            <x-p::icons.right-arrow/>
                        </x-p::pagination.item>
                    @else
                        <x-p::pagination.item
                            aria-disabled="true"
                            aria-label="{{ __('pagination.next') }}"
                        >
                            <x-p::icons.right-arrow/>
                        </x-p::pagination.item>
                    @endif
                </div>
            </div>
        </nav>
    @endif
</div>
