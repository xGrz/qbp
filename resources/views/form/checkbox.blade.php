<div class="flex items-center me-4 mb-2">
    <input id="{{$id}}" type="checkbox"
           class="shrink-0 w-5 h-5 mt-1 rounded-md cursor-pointer @if($description) self-start @endif">
    <label for="{{$id}}" class="ms-2 font-medium select-none cursor-pointer text-slate-300">
        <span>{{$label}}</span>
        @if($description)
            <div class="text-sm text-slate-500">{{$description}}</div>
        @endif
    </label>
</div>
