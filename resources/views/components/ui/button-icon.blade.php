@props([
    'type' => 'button',
    'variant' => 'primary',
    'size' => 'md',
])

@php
    $variants = [
        'primary' => '
            bg-primary-20
            text-primary-60
            hover:bg-primary-60
            hover:text-white
        ',

        'secondary' => '
            border
            border-secondary-50
            bg-secondary-10
            text-secondary-100
            hover:bg-secondary-50
        ',

        'outline' => '
            border
            border-primary-60
            bg-transparent
            text-primary-60
            hover:bg-primary-60
            hover:text-white
        ',
    ];

    $sizes = [
        'sm' => 'h-8 w-8',
        'md' => 'h-9 w-9',
        'lg' => 'h-10 w-10',
    ];
@endphp

<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => '
            inline-flex
            items-center
            justify-center
            rounded-lg
            transition-colors
            duration-200
            focus:outline-none
            focus:ring-2
            focus:ring-primary-10
            disabled:cursor-not-allowed
            disabled:opacity-50
            ' . $sizes[$size] . '
            ' . $variants[$variant]
    ]) }}
>
    {{ $slot }}
</button>