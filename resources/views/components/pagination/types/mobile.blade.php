@if ($paginator->hasPages())
    <nav
        role="navigation"
        aria-label="{{ __('Pagination Navigation') }}"
        class="flex items-center justify-between sm:hidden"
    >
        @if ($paginator->onFirstPage())
            <x-p::pagination.items.disabled class="px-3 py-[.3rem] rounded-md">
                {!! __('pagination.previous') !!}
            </x-p::pagination.items.disabled>
        @else
            <x-p::pagination.items.active href="{{ $paginator->previousPageUrl() }}" class="px-3 py-[.3rem] rounded-md">
                {!! __('pagination.previous') !!}
            </x-p::pagination.items.active>
        @endif

        @if ($paginator->hasMorePages())
            <x-p::pagination.items.active href="{{ $paginator->nextPageUrl() }}" class="px-3 py-[.3rem] rounded-md">
                {!! __('pagination.next') !!}
            </x-p::pagination.items.active>
        @else
            <x-p::pagination.items.disabled class="px-3 py-[.3rem] rounded-md">
                {!! __('pagination.next') !!}
            </x-p::pagination.items.disabled>
        @endif
    </nav>
@endif
