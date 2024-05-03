<div class="rounded-lg shadow-sm overflow-hidden bg-slate-800">
    @isset($title)
        <div {{ $title->attributes->class('flex items-center bg-slate-700 px-3 text-md text-slate-300 font-semibold') }}>
            <div class="py-3 grow">{{$title}}</div>
            @isset($actions)
                <div {{ $actions->attributes->merge(['class' => 'shrink-0']) }}>{{$actions}}</div>
            @endif
        </div>
    @endif
    <div class="p-3 pb-3">
        {{ $slot }}
    </div>
</div>
