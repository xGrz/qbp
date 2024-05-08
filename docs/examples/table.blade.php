@extends('p::app')

@section('content')
    <x-p-paper class="mb-4">
        <x-p-table size="large">
            <x-p-thead left>
                <x-p-tr>
                    <x-p-th>Column 1</x-p-th>
                    <x-p-th>Column 2</x-p-th>
                    <x-p-th>Column 3</x-p-th>
                    <x-p-th>Column 4</x-p-th>
                    <x-p-th right>Column 5</x-p-th>
                </x-p-tr>
            </x-p-thead>
            <x-p-tbody>
                <x-p-tr>
                    <x-p-td>Data 1 </x-p-td>
                    <x-p-td>Data 2</x-p-td>
                    <x-p-td>Data 3</x-p-td>
                    <x-p-td>Data 4</x-p-td>
                    <x-p-td>Data 5</x-p-td>
                </x-p-tr>
                <x-p-tr>
                    <x-p-td>Data 1</x-p-td>
                    <x-p-td>Data 2</x-p-td>
                    <x-p-td center>Data 3</x-p-td>
                    <x-p-td>Data 4</x-p-td>
                    <x-p-td>Data 5</x-p-td>
                </x-p-tr>
                <x-p-tr>
                    <x-p-td>Data 1</x-p-td>
                    <x-p-td>Data 2</x-p-td>
                    <x-p-td>Data 3</x-p-td>
                    <x-p-td>Data 4</x-p-td>
                    <x-p-td>Data 5</x-p-td>
                </x-p-tr>
                <x-p-tr right>
                    <x-p-td>Data 1</x-p-td>
                    <x-p-td>Data 2</x-p-td>
                    <x-p-td>Data 3</x-p-td>
                    <x-p-td>Data 4</x-p-td>
                    <x-p-td>Data 5</x-p-td>
                </x-p-tr>
            </x-p-tbody>
            <x-p-tfoot>
                <x-p-tr>
                    <x-p-td>Footer 1</x-p-td>
                    <x-p-td>Footer 2</x-p-td>
                    <x-p-td>Footer 3</x-p-td>
                    <x-p-td>Footer 4</x-p-td>
                    <x-p-td>Footer 5</x-p-td>
                </x-p-tr>
            </x-p-tfoot>
        </x-p-table>
    </x-p-paper>
@endsection
