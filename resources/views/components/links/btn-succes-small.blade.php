@props(['active' => false])

@php
    $classes = 'px-3 py-2 text-sm font-medium bg-green-500 text-white dark:text-white hover:bg-green-600 hover:text-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600 transition ease-in-out duration-150 ';
        if ($active) $classes .= 'text-gray-50 bg-green-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
