@php
    $classes = 'text-orange-500 hover:text-white ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
