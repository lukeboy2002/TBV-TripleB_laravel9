@props(['active' => false])

@php
    $classes = 'py-4 px-3 text-xs font-medium uppercase bg-orange-500 text-white dark:text-white hover:bg-orange-600 hover:text-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600 transition ease-in-out duration-150 ';
        if ($active) $classes .= 'text-gray-50 bg-orange-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
