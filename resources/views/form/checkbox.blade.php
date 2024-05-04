<div class="flex select-none mt-1 gap-2">
    <div class="shrink-0 flex">
        <input id="{{$id}}" type="checkbox" {{ $attributes->class('peer sr-only') }}/>
        {{-- Checked --}}
        <label for="{{$id}}" class="hidden peer-checked:inline-block peer-focus:ring-4 peer-focus:ring-blue-800 drop-shadow-[0_0_.4rem_rgba(255,255,255,.4)] text-white bg-slate-600 {{ $checkboxClasses }} !border-slate-500">
            <svg class="w-5 h-5 relative top-[-1px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                 fill="currentColor">
                <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path>
            </svg>
        </label>

        {{-- unChecked --}}
        <label for="{{$id}}"
               class="inline-block peer-checked:hidden peer-focus:ring-4 peer-focus:ring-blue-800 bg-slate-800 {{$checkboxClasses}}">
        </label>
    </div>
    <div>
        <label for="{{$id}}">{{$label}}</label>
        <div class="{{$descriptionClasses}}">{{$description}}</div>
    </div>
</div>
