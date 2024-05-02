@if(!$disabled)
    <a href="{{$href}}" {{ $attributes->merge(['class' => $componentClasses]) }}>{{$slot}}</a>
@else
    <span {{ $attributes->merge(['class' => $componentClasses]) }}>{{$slot}}</span>
@endif
