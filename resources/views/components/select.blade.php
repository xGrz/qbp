<div class="flex flex-col items-stretch">
    <select
        class="peer order-2 px-4 py-2.5 w-full text-slate-700 bg-slate-300 border transition-all focus:bg-gray-100 focus:transition-all rounded-md"
        @if (isset($model)) wire:model.change="{{$model}}" @endif
    >
        {{$slot}}
    </select>
    @if(isset($label))
        <label
            class="inline-block order-1 w-full transition-all text-gray-500 font-semibold peer-focus:text-gray-100"><small>{{$label}}</small></label>
    @endif
</div>
