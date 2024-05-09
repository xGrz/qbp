@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between my-1">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <x-p::pagination.item aria-disabled="true">
                    {!! __('pagination.previous') !!}
                </x-p::pagination.item>
            @else
                <x-p::pagination.item href="{{ $paginator->previousPageUrl() }}">
                    {!! __('pagination.previous') !!}
                </x-p::pagination.item>
            @endif

            @if ($paginator->hasMorePages())
                <x-p::pagination.item href="{{ $paginator->nextPageUrl() }}">
                    {!! __('pagination.next') !!}
                </x-p::pagination.item>
            @else
                <x-p::pagination.item>
                    {!! __('pagination.next') !!}
                </x-p::pagination.item>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700 leading-5 dark:text-gray-400">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
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
                        href="{{ $paginator->previousPageUrl() }}"
                        aria-label="{{ __('pagination.previous') }}"
                        rel="prev"
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
                                    href="{{ $url }}"
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
                        href="{{ $paginator->nextPageUrl() }}"
                        rel="next"
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
