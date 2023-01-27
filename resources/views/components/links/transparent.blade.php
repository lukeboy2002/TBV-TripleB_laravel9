@props(['active' => false])

@php
    $classes = 'py-2 px-3 font-bold text-xs text-center focus:ring-4 focus:outline-none uppercase';
    if ($active) $classes .= 'bg-orange-500 dark:bg-orange-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
