@props(['active' => false])

@php
    $classes = 'py-4 px-3 text-xs font-medium bg-orange-500 text-gray-900 dark:text-white hover:bg-orange-600 hover:text-white focus:ring-2 focus:outline-none focus:ring-orange-600 ';
        if ($active) $classes .= 'text-gray-50 bg-orange-500';
@endphp

<button type="submit" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
