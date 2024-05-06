<div class="flex select-none mt-1 gap-2">
    <input id="{{$id}}" type="checkbox" {{ $attributes->class('peer sr-only') }}/>
    <label for="{{$id}}" class="{{$checkboxClasses}}">
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path>
        </svg>
    </label>
    <div class="{{$labelContainerClasses}}">
        <label for="{{$id}}">{{$label}}</label>
        <div>{{$description}}</div>
    </div>
</div>
