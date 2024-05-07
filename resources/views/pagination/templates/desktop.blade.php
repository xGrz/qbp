@if ($paginator->hasPages())
    <nav class="hidden sm:flex-1 sm:flex items-center justify-center">
        <div class="flex items-center justify-between">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <x-p-pagination-item class="p-1 mr-[1px]">
                    <x-p::icons.left-arrow />
                </x-p-pagination-item>
            @else
                <x-p-pagination-item href="{{ $paginator->previousPageUrl() }}" class="p-1 mr-[1px] rounded-l-md">
                    <x-p::icons.left-arrow />
                </x-p-pagination-item>
            @endif


            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <x-p-pagination-item class="px-2 py-1">
                        {{ $element }}
                    </x-p-pagination-item>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <x-p-pagination-item class="px-2 py-1 mr-[1px] !text-slate-300 !bg-slate-500">
                                {{ $page }}
                            </x-p-pagination-item>
                        @else
                            <x-p-pagination-item href="{{$url}}" class="px-2 py-1 mr-[1px]">
                                {{ $page }}
                            </x-p-pagination-item>
                        @endif
                    @endforeach
                @endif
            @endforeach


            @if ($paginator->hasMorePages())
                <x-p-pagination-item href="{{ $paginator->nextPageUrl() }}" class="p-1 mr-[1px] rounded-r-md">
                    <x-p::icons.right-arrow />
                </x-p-pagination-item>
            @else
                <x-p-pagination-item class="p-1 mr-[1px]">
                    <x-p::icons.right-arrow />
                </x-p-pagination-item>
            @endif


        </div>

    </nav>

@endif
