@props(['active' => false])

@php
$classes = 'py-4 px-3 text-xs font-medium uppercase bg-white text-gray-700 border border-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 hover:text-orange-500 dark:hover:text-white dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-offset-2 focus:ring-gray-200 dark:focus:ring-gray-700 transition ease-in-out duration-150 ';
    if ($active) $classes .= 'text-gray-50 bg-orange-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
