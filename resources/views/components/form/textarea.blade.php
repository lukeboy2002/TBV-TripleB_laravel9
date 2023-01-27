{{--@props(['name'])--}}
{{--@php--}}
{{--    $classes = '';--}}
{{--@endphp--}}

{{--<x-form.field>--}}

{{--    <x-form.label name="{{ $name }}" />--}}

{{--    <div class="mt-1">--}}
{{--        <textarea {{ $attributes->merge(['class' => $classes]) }}--}}
{{--            name="{{ $name }}"--}}
{{--            id="{{ $name }}"--}}
{{--            {{ $attributes }}--}}
{{--        >--}}
{{--            {{ $slot ?? old($name) }}--}}
{{--        </textarea>--}}
{{--    </div>--}}

{{--    <x-form.error name="{{ $name }}" />--}}

{{--</x-form.field>--}}

@props(['disabled' => false])

<textarea {!! $attributes->merge(['class' => 'block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500']) !!}>
            {{ $slot ?? old($body) }}
</textarea>
