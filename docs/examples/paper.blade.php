@extends('p::app')

@section('content')
    <x-p-paper>
        <x-slot:title>Paper title</x-slot:title>
        <x-slot:actions class="lowercase">
            <x-p-button color="info" class="rounded-md">+ Add</x-p-button>
            <x-p-button color="danger" class="rounded-md">Delete</x-p-button>
        </x-slot:actions>
        Paper content
    </x-p-paper>
@endsection
