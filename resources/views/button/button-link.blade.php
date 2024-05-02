@if(!$disabled)
    <a href="{{$href}}" {{ $attributes->merge(['class' => $componentClasses]) }}>{{$slot}}</a>
@else
    <span href="{{$href}}" {{ $attributes->merge(['class' => $componentClasses]) }}>{{$slot}}</span>
@endif
