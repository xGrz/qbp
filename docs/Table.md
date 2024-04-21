# Table

## Code example:
``` 
<x-p::table>
    <x-p::table.head>
        <x-p::table.row>
            <x-p::table.th>Column Name 1</x-p::table.th>
            // ...
            <x-p::table.th>Column Name N</x-p::table.th>
        </x-p::table.row>
    </x-p::table.head>
    <x-p::table.body>
        @foreach($items as $iem)
            <x-p::table.row>
                <x-p::table.cell>Data value 1</x-p::table.cell>
                // ...
                <x-p::table.cell>Data value N</x-p::table.cell>
            </x-p::table.row>
        @endforeach
    </x-p::table.body>
</x-p::table.tbody>
```
