@props(['value'])

<label {{ $attributes->merge(['class' => 'text-xl font-bold']) }}>
    {{ $value ?? $slot }}
</label>
