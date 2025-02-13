@props(['value', 'required' => false])

<div>
    <span {{ $attributes->merge(['class' => 'font-bold label-text']) }}>
        {{ $value ?? $slot }}
        @if($required)
            <span class="text-red-500">*</span>
        @endif
    </span>
</div>
