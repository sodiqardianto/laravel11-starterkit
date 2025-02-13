@props([
    'type' => 'button',
    'variant' => 'primary', // primary, neutral, secondary, accent, ghost, link, info, success, warning, error
    'size' => 'md', // xs, sm, md, lg
    'outline' => false,
    'wide' => false,
    'loading' => false,
    'disabled' => false
])

<button 
    {{ $attributes->merge([
        'type' => $type,
        'class' => 'btn
            btn-' . $variant . 
            ($outline ? ' btn-outline' : '') .
            ($size !== 'md' ? ' btn-' . $size : '') .
            ($wide ? ' btn-wide' : '') .
            ($loading ? ' loading' : '') .
            ($disabled ? ' btn-disabled' : '')
    ]) }}
>
    {{ $slot }}
</button>