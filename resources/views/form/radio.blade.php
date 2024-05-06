<div class="flex select-none mt-1 gap-x-2">
    <input id="{{$id}}" type="radio" name="{{$name}}" value="{{$value}}" {{ $attributes->class('peer sr-only') }}/>
    <label for="{{$id}}" class="{{$radioClasses}}">
        <div></div>
    </label>
    <div class="{{$labelContainerClasses}}">
        <label for="{{$id}}">{{$label}}</label>
        <div>{{$description}}</div>
    </div>
</div>
