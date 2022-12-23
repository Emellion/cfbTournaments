@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-light text-sm text-gray-100']) }}>
    {{ $value ?? $slot }}
</label>
