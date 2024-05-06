<div class="flex select-none mt-1 gap-2">
    <input id="{{$id}}" type="checkbox" class="sr-only peer" {{$attributes}}/>
    <label for="{{$id}}" class="{{$switchClasses}}">
        <div style="width: calc(1.25rem - 2px)"></div>
    </label>
    <div class="{{$labelContainerClasses}}">
        <label for="{{$id}}">{{$label}}</label>
        <div>{{$description}}</div>
    </div>
</div>
