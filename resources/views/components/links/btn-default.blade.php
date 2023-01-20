@props(['active' => false])

@php
$classes = 'py-2 px-3 text-xs font-medium text-gray-900 dark:text-white hover:bg-orange-600 hover:text-white focus:ring-2 focus:outline-none focus:ring-orange-600 ';
    if ($active) $classes .= 'text-gray-50 bg-orange-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
