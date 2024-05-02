<div class="rounded-lg shadow-sm overflow-hidden {{$background}}">
    @isset($title)
        <div class="flex items-center bg-slate-700 px-3 mb-2">
            <div class="text-md text-slate-300 font-semibold py-3 grow">{{$title}}</div>
            @isset($actions)<div class="shrink-0">{{$actions}}</div> @endif
        </div>
    @endif
    <div class="p-3 pb-5">
        {{ $slot }}
    </div>
</div>
