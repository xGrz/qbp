<div {{$attributes->class('py-5 px-2 flex flex-col items-center text-slate-500')}}>
    <x-p::icons.none class="w-{{$iconSize}} h-{{$iconSize}}"/>
    <div class="py-2">{{ $message ?? 'Not found'}}</div>
</div>
