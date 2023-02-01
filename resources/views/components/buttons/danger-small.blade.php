@props(['active' => false])

@php
    $classes = 'px-3 py-2 text-sm font-medium bg-red-600 text-white dark:text-white hover:bg-red-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition ease-in-out duration-150 ';
        if ($active) $classes .= 'text-gray-50 bg-red-700';
@endphp

<button type="submit" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
