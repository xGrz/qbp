<div class="flex select-none mt-1 gap-2">
    <div class="shrink-0">
        <input id="{{$id}}" type="checkbox" class="sr-only peer" {{$attributes}}/>
        <label for="{{$id}}"
               class="block mt-1 relative w-10 h-5 bg-slate-800 shrink-0 grow-0 rounded-full border
            border-slate-600 transition-all ease-in-out duration-300 pl-0
            peer-checked:pl-5 peer-checked:bg-slate-700 peer-focus:ring-4 peer-focus:ring-blue-800 peer-checked:[&>div]:bg-white peer-checked:[&>div]:drop-shadow-[0_0_.4rem_rgba(255,255,255,.9)]">
            <div class="w-5 h-5 bg-slate-300 rounded-full ease-in-out duration-100 transition-all"></div>
        </label>
    </div>
    <div>
        <label for="{{$id}}">{{$label}}</label>
        <div class="text-sm">{{$description}}</div>
    </div>
</div>
