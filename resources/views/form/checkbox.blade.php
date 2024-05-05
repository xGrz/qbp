<div class="flex select-none mt-1 gap-2">
    <input id="{{$id}}" type="checkbox" {{ $attributes->class('peer sr-only') }}/>
    <label
        for="{{$id}}"
        class="shrink-0 inline-flex items-center peer-checked:drop-shadow-[0_0_.4rem_rgba(255,255,255,.4)] text-white bg-slate-800 {{ $checkboxClasses }} border-slate-500 peer-checked:bg-slate-700"
    >
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
             fill="currentColor">
            <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path>
        </svg>
    </label>
    <div class="mt-1 peer-checked:[&>label]:text-slate-200">
        <label class="cursor-pointer" for="{{$id}}">{{$label}}</label>
        <div class="{{$descriptionClasses}}">{{$description}}</div>
    </div>
</div>
