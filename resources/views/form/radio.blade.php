<div class="flex select-none mt-1 gap-x-2">
    <input id="{{$id}}" type="radio" name="{{$name}}" value="{{$value}}" {{ $attributes->class('peer sr-only') }}/>
    <label for="{{$id}}"
        class="shrink-0 mt-0.5 flex items-stretch w-6 h-6 border border-slate-500 rounded-full bg-slate-800
            peer-focus:ring-4 peer-focus:ring-blue-800
            [&>*]:hidden peer-checked:[&>*]:block peer-checked:drop-shadow-[0_0_.4rem_rgba(255,255,255,.4)]
            "
    >
        <div class="self-center w-3 h-3 bg-slate-50 rounded-full m-auto"></div>
    </label>
    <div class="peer-checked:[&>label]:text-slate-200">
        <label class="cursor-pointer" for="{{$id}}">{{$label}}</label>
        <div class="{{$descriptionClasses}}">{{$description}}</div>
    </div>
</div>
