@if ($paginator->hasPages())
    <nav
        role="navigation"
        aria-label="{{ __('Pagination Navigation') }}"
        class="flex items-center justify-between sm:hidden"
    >
        @if ($paginator->onFirstPage())
            <x-p-pagination-item class="px-3 py-[.3rem] rounded-md">
                {!! __('pagination.previous') !!}
            </x-p-pagination-item>
        @else
            <x-p-pagination-item href="{{ $paginator->previousPageUrl() }}" class="px-3 py-[.3rem] rounded-md">
                {!! __('pagination.previous') !!}
            </x-p-pagination-item>
        @endif

        @if ($paginator->hasMorePages())
            <x-p-pagination-item href="{{ $paginator->nextPageUrl() }}" class="px-3 py-[.3rem] rounded-md">
                {!! __('pagination.next') !!}
            </x-p-pagination-item>
        @else
            <x-p-pagination-item class="px-3 py-[.3rem] rounded-md">
                {!! __('pagination.next') !!}
            </x-p-pagination-item>
        @endif
    </nav>
@endif
