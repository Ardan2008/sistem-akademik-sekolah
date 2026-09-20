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
        'sm' => 'px-3 py-1.5 text-xs',
        'md' => 'px-4 py-2 text-sm',
        'lg' => 'px-5 py-2.5 text-base',
    ];
@endphp

<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => '
            inline-flex
            items-center
            justify-center
            gap-2
            rounded-lg
            font-body
            font-medium
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