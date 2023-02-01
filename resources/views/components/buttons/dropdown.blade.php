@props(['active' => false])

@php
    $classes = 'py-2 px-3 w-full flex items-center text-xs font-medium text-white dark:text-white hover:bg-orange-600 hover:text-gray-50 focus:outline-none  transition ease-in-out duration-150 ';
        if ($active) $classes .= 'text-gray-50 bg-orange-500';
@endphp

<button type="submit" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
