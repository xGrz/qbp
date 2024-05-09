<?php $hasError = $errors->hasAny(['name', $attributes->whereStartsWith('wire:model')->first()]); ?>
<label class="flex flex-col w-full text-gray-700 font-semibold">
    <input
        @if($suggestions) list="{{$suggestionsId}}" @endif
    @if($id) id="{{$id}}" @endif
        @if($inputMode) inputmode="{{$inputMode}}" @endif
        @if($inputMode === 'decimal')
            x-mask:dynamic="$money($input, ',', ' ')"
        @elseif($inputMode === 'numeric')
            @input="$event.target.value = $event.target.value.replace(/[^0-9]/g, '')"
        @endif

        {{ $attributes->class([
            'w-full peer order-2 transition-all inline-block grow shrink border bg-slate-300 focus:bg-gray-200 focus:text-slate-700 rounded-md focus:outline-none py-2 px-2 disabled:bg-gray-100 disabled:text-gray-400',
            'text-slate-600' => !$hasError,
            'text-orange-700 bg-orange-200' => $hasError
        ])}}
    />

    @if (isset($label))
        <div
            class="order-1 text-sm @if($hasError) text-red-500 @else text-slate-500 @endif transition-all peer-focus:text-slate-300 mb-[3px]">
            {{$label}}
        </div>
    @endif

    @if($suggestions)
        <datalist id="{{$suggestionsId}}">
            @foreach($suggestions as $suggestion)
                <option>{{$suggestion}}</option>
            @endforeach
        </datalist>
    @endif

    @if($withTextError && $hasError)
        @error($attributes->whereStartsWith('wire:model')->first())
        <div class="text-sm text-red-500 order-3">{{$message}} LW</div>
        @enderror
        @error($attributes->get('name'))
        <div class="text-sm text-red-500 order-3">{{$message}} BL</div>
        @enderror
    @endif

</label>
