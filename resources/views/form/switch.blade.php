<div class="flex flex-row text-center items-center my-2">
    <div class="">
        <label class="inline-flex items-center cursor-pointer mx-2">
            <input
                type="checkbox"
                class="sr-only peer"
                wire:model.live.debounce.150ms="{{$model}}"
                @if($model) checked @endif
            >
            <div
                class="relative w-10 h-5 shrink-0 grow-0 @if($value) bg-slate-600 @else bg-slate-700 @endif rounded-full transition-all ease-in-out duration-300 pl-0 peer-checked:pl-5 peer-focus:ring-4 peer-focus:ring-blue-800">
                <div
                    class="w-5 h-5 bg-white rounded-full ease-in-out duration-100 transition-all"></div>
            </div>
            <span
                class="ms-3 text-sm font-medium leading-4 font-bold @if($value)text-green-500 @else text-slate-500 @endif">
                {{$label}}
            </span>
        </label>

    </div>
</div>
