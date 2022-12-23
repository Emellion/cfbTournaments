@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-sm font-light leading-5 tracking-wider text-gray-100 focus:outline-none'
            : 'inline-flex items-center px-1 pt-1 text-sm font-light leading-5 tracking-wider text-gray-300 hover:text-gray-100 focus:outline-none focus:text-gray-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
