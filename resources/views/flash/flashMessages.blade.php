@if(session()->has('success'))
    <x-p-toast severity="success" message="{{session()->get('success')}}"/>
@elseif(session()->has('warning'))
    <x-p-toast severity="warning" message="{{session()->get('warning')}}"/>
@elseif(session()->has('danger'))
    <x-p-toast severity="danger" message="{{session()->get('danger')}}"/>
@elseif(session()->has('info'))
    <x-p-toast severity="info" message="{{session()->get('info')}}"/>
@endif
