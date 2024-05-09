@if($attributes->has('href') || count($attributes->whereStartsWith('wire:click')->getAttributes()))
    <a {{$attributes->class('inline-block px-2 py-1 align-self-center content-center text-yellow-500 bg-slate-700 cursor-pointer min-w-[2rem] text-center hover:bg-slate-600')}}>
        {{$slot}}
    </a>
@else
    <span {{ $attributes->class('inline-block px-2 py-1 align-self-center content-center text-slate-600 bg-slate-800 min-w-[2rem] text-center') }}>
        {{$slot}}
    </span>
@endif

