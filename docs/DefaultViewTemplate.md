# Default view template

## Typical view example

```
@extends('p::app')

@section('content')
    // Main view content goes here.
@endsection

```

## Full view example

``` 
@extends('p::app')

@section('css')
    // Optional
    // Put custom styles here
@endsection

@section('breadcrumbs')
    // Optional
    // Put breadcrumbs here
@endsection

@section('content')
    // Main view content goes here.
@endsection

```
