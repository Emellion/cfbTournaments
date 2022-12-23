@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-light text-indigo-600 focus:outline-none focus:text-indigo-700 transition mx-auto'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-light text-gray-100 hover:text-gray-300 focus:outline-none focus:text-gray-500 mx-auto transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
