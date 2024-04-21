# Full view with papier, table and pagination

```bladehtml
@extends('p::app')

@section('content')
    <x-p::pagination.info :source="$items"/>
    <x-p::paper class="bg-slate-800">
        <x-p::paper-title title="Item list"/>
        @if($items)
            <x-p::table>
                <x-p::table.head>
                    <x-p::table.row>
                        <x-p::table.th>...</x-p::table.th>
                    </x-p::table.row>
                </x-p::table.head>
                <x-p::table.body>
                    @foreach($items as $item)
                        <x-p::table.row>
                            <x-p::table.cell>...</x-p::table.cell>
                        </x-p::table.row>
                    @endforeach
                </x-p::table.body>
            </x-p::table.tbody>

            <div class="py-3">
                <x-p::pagination :source="$items"/>
            </div>
        @else
            <x-p::not-found message="Items not found."/>
        @endif

    </x-p::paper>
    <x-p::pagination.info :source="$items"/>
@endsection
```
