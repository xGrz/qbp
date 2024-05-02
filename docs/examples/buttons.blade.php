@extends('p::app')

@section('content')
    <x-p-paper>
        <?php $colorNames = ['primary', 'success', 'info', 'warning', 'danger', 'gray', 'disabled'] ?>
        <?php $sizes = ['small', 'normal', 'large'] ?>

        <x-slot:title>Buttons / Link buttons</x-slot:title>
        <table class="border-separate border-spacing-x-3 w-full">
            <thead>
            <tr>
                <th>Color name</th>
                <th>Small</th>
                <th>Normal</th>
                <th>Large</th>
            </tr>
            </thead>
            <tbody>
            @foreach($colorNames as $colorName)
                <tr>
                    <td class="text-left">{{$colorName}}</td>
                    @foreach($sizes as $size)
                        <td class="text-center">
                            <x-p-button :$size :color="$colorName">Button</x-p-button>
                            <x-p-button href="#" :$size :color="$colorName">Link</x-p-button>
                        </td>
                    @endforeach
                    @endforeach
                </tr>
            </tbody>
        </table>
    </x-p-paper>
@endsection
