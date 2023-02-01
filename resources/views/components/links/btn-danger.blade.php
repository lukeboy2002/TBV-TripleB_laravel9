@props(['active' => false])

@php
$classes = 'py-4 px-3 text-xs font-medium uppercase bg-red-600 text-white dark:text-white hover:bg-red-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition ease-in-out duration-150 ';
if ($active) $classes .= 'text-gray-50 bg-red-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
