<div class="relative flex flex-col items-stretch">
    <select {{$attributes->class(['peer order-2 px-4 py-2.5 w-full text-slate-800 bg-slate-300 border transition-all focus:bg-gray-100 focus:transition-all rounded-md', $classes])}}>
        @if($placeholder)
            <option selected disabled>{{$placeholder}}</option>
        @endif
        {{$slot}}
    </select>
    @if(!$isLabelDisabled)
        <label class="inline-block order-1 w-full transition-all text-gray-500 text-sm font-semibold peer-focus:text-gray-100 h-6 overflow-x-hidden {{ $labelClasses}}">
            @if($label)
                {{$label}}
            @endif
        </label>
    @endif
</div>
