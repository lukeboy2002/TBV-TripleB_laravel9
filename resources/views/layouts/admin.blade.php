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

    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">
    <script src="https://kit.fontawesome.com/26b11da1dc.js" crossorigin="anonymous"></script>
</head>

<body class="antialiased relative bg-gray-100 dark:bg-neutral-900">
<div class="min-h-screen flex flex-row">

    <x-jet-banner />
    <!-- Desktop sidebar -->
    <aside class="z-20 hidden w-64 overflow-y-auto md:block flex-shrink-0 bg-white dark:bg-gray-800">
        <x-menus.admin-sidebar />
    </aside>

    <div class="w-screen mx-auto pt-0 flex flex-col">
        <nav id="navbar" class="sticky top-0 z-40 w-full bg-white dark:bg-gray-800">
            <x-main.admin-menu />
        </nav>
        <div class="lg:flex-grow">
            <div class="md:grid md:grid-cols-12">
                <div class="md:col-span-12 pt-2">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    <x-main.admin-mobilemenu />
</div>


<!-- Scripts -->
<livewire:scripts />
<script src="{{ asset('js/app.js') }}"></script>
{{--<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>--}}

@stack('scripts')

</body>
</html>
