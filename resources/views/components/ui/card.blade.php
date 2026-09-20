<div
    {{ $attributes->merge([
        'class' => '
            rounded-xl
            border
            border-secondary-50
            bg-secondary-10
            p-5
            shadow-card
        '
    ]) }}
>
    {{ $slot }}
</div>