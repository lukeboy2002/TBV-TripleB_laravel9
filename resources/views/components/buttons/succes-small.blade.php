@props(['active' => false])

@php
    $classes = 'px-3 py-2 text-sm font-medium bg-green-700 text-white dark:text-white hover:bg-green-800 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition ease-in-out duration-150 ';
        if ($active) $classes .= 'text-gray-50 bg-green-700';
@endphp

<button type="submit" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
