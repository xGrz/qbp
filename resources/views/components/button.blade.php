@props([
    'class' => '',
    'disabled' => false,
    'type' => 'button',
    'form' => null,
    'size'=> 'normal',
    'color' => 'primary'
])

<?php
$px = match ($size) {
    'small' => 'px-[.5rem]',
    'large' => 'px-[.7rem]',
    default => 'px-2',
};
$py = match ($size) {
    'small' => 'py-[.05rem]',
    'large' => 'py-[.5rem]',
    default => 'py-[.2rem]',
};
$colorDefinition = match ($color) {
    'danger' => 'bg-red-700 hover:bg-red-800 active:bg-red-900 text-white',
    'gray' => 'bg-gray-400 hover:bg-gray-500 active:bg-grey-700 text-white',
    'info' => 'bg-sky-500 hover:bg-sky-600 active:bg-sky-800 text-white',
    'success' => 'bg-green-700 hover:bg-green-800 active:bg-green-900 text-white',
    'warning' => 'bg-amber-600 hover:bg-amber-700 active:bg-amber-800 text-white',
    default => 'bg-sky-700 hover:bg-sky-800 active:bg-sky-900 text-white',
};

if ($disabled) $colorDefinition = 'bg-gray-400 hover:bg-gray-500 bg-gray-600 text-white';

?>


<button
    {{ $attributes->merge([
        'class' => join(' ', [$px, $py, $colorDefinition, 'inline-block mr-[.2rem] rounded shadow leading-normal']),
        'form' => $form,
        'type' => $type,

    ])}}
    @if($disabled) disabled="disabled" @endif
>
    {{ $slot }}
</button>
