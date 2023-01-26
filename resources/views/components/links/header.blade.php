@props(['active' => false])

@php
    $classes = 'text-orange-500 hover:text-orange-600 font-black uppercase focus:outline-none focus:text-orange-600 ';
    if ($active) $classes .= 'text-orange-600 dark:text-orange-600';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
