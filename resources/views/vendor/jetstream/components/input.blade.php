@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-500 focus:border-gray-100 focus:ring-transparent text-sm text-gray-100 bg-gray-600 shadow-sm']) !!}>
