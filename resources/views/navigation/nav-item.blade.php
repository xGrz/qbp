<a href="{{$url}}"{{ $attributes->class([
        'inline-flex flex-row md:flex-col items-center px-2 md:px-4 py-1 self-center grow-1 gap-x-2',
        'bg-slate-600 text-slate-100' => $isActive,
        'hover:bg-slate-700 hover:text-slate-300' => !$isActive
    ])}}>
    {{ $slot }}
</a>
