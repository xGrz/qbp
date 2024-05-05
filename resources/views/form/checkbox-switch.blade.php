<div class="flex select-none mt-1 gap-2">
    <input id="{{$id}}" type="checkbox" class="sr-only peer" {{$attributes}}/>
    <label
        for="{{$id}}"
        class="w-10 h-5 shrink-0 grow-0 bg-slate-800 border border-slate-600 rounded-full transition-all
        peer-focus:ring-4 peer-focus:ring-blue-800
        peer-checked:bg-slate-700 peer-checked:pl-5 peer-checked:[&>div]:bg-white peer-checked:[&>div]:drop-shadow-[0_0_.4rem_rgba(255,255,255,.9)]
        peer-disabled:bg-slate-900 peer-disabled:peer-checked:bg-slate-800 peer-disabled:[&>div]:bg-white/15 peer-disabled:[&>div]:drop-shadow-[0_0_.4rem_rgba(255,255,255,.1)]">
        <div class="h-full border border-slate-400 bg-slate-400 ease-in-out duration-100 rounded-full" style="width: calc(1.25rem - 2px)"></div>
    </label>
    <div class="peer-checked:[&>label]:text-slate-200 transition-all peer-disabled:[&>label]:cursor-auto">
        <label class="cursor-pointer" for="{{$id}}">{{$label}}</label>
        <div class="text-sm">{{$description}}</div>
    </div>
</div>
