<div class="flex select-none mt-1 gap-2">
    <input id="{{$id}}" type="checkbox" class="sr-only peer" {{$attributes}}/>
    <label for="{{$id}}" class="{{$switchClasses}}">
        <div class="h-full border border-slate-400 bg-slate-400 ease-in-out duration-100 rounded-full" style="width: calc(1.25rem - 2px)"></div>
    </label>
    <div class="peer-checked:[&>label]:text-slate-200 transition-all peer-disabled:[&>label]:cursor-auto">
        <label class="cursor-pointer" for="{{$id}}">{{$label}}</label>
        <div class="text-sm">{{$description}}</div>
    </div>
</div>
