<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
    <livewire:styles />

    <script src="https://kit.fontawesome.com/26b11da1dc.js" crossorigin="anonymous"></script>
</head>

<body class="antialiased relative bg-gray-100 dark:bg-neutral-900">
<div class="min-h-screen flex flex-col">

    <x-jet-banner />
    <div class="w-screen mx-auto pt-0 flex justify-center">
        <nav id="navbar" class="sticky top-0 z-40 w-full bg-white dark:bg-gray-800">
            <x-main.header />
            <x-main.menu />
        </nav>
    </div>

    <div class="lg:flex-grow">
        <div class="md:grid md:grid-cols-12">
            <div class="md:col-span-12">
                {{ $slot }}
            </div>
        </div>

        <!-- Sidebar start-->
        <x-main.mobilemenu />
    </div>

    <div class="w-screen mx-auto flex justify-center">
        <x-main.footer />
    </div>
</div>

<!-- Scripts -->
<livewire:scripts />
<script src="{{ asset('js/app.js') }}"></script>
{{--<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>--}}

@stack('scripts')

</body>
</html>
