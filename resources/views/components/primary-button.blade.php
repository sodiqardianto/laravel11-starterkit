<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex tracking-widest transition ease-in-out duration-150 btn btn-primary']) }}>
    {{ $slot }}
</button>