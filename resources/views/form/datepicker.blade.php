<label class="inline-block  px-1 pb-0.5 outline-none">
    @if($label)
        <div class="text-sm text-left mb-[1px]">{{$label}}</div>
    @endif
    <input
        type="{{$type}}"
        @if($min) min="{{$min}}" @endif
        @if($max) max="{{$max}}" @endif
        {{ $attributes->class(['bg-slate-600 outline-none text-yellow-500 px-1 py-1.5 rounded-md']) }}
    />
</label>
