@props(['active' => false])

@php
    $classes = 'inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-orange-500 dark:hover:text-orange-500 dark:text-gray-100 ';
    if ($active) $classes .= 'text-orange-500 dark:text-orange-500';
@endphp

{{--<a {{ $attributes->merge(['class' => $classes]) }}>--}}
{{--    {{ $slot }}--}}
{{--</a>--}}




<li class="relative px-6 py-3">
    <span class="active:absolute active:inset-y-0 active:left-0 active:w-1 active:bg-orange-500 active:rounded-tr-lg active:rounded-br-lg" aria-hidden="true"></span>
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
