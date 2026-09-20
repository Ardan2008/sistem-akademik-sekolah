@props([
    'label' => null,
    'error' => null,
])

<div class="space-y-1.5">

    @if ($label)
        <label
            for="{{ $attributes->get('id') }}"
            class="block font-body text-sm font-medium text-secondary-100"
        >
            {{ $label }}
        </label>
    @endif

    <input
        {{ $attributes->merge([
            'class' => '
                w-full
                rounded-lg
                border
                border-secondary-50
                bg-secondary-10
                px-4
                py-2.5
                font-body
                text-sm
                text-secondary-100
                placeholder:text-secondary-80
                outline-none
                transition
                duration-200
                focus:border-primary-60
                focus:ring-2
                focus:ring-primary-10
                disabled:cursor-not-allowed
                disabled:bg-secondary-50
            '
        ]) }}
    >

    @if ($error)
        <p class="font-body text-xs text-red-500">
            {{ $error }}
        </p>
    @endif

</div>