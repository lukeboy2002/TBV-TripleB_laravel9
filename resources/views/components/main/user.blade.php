<div class="flex items-center space-x-4">
    @if (Route::has('login'))
        @auth
            <!-- Profile dropdown -->
            <div class="ml-3 text-gray-900 dark:text-white text-base font-bold md:block hidden">
                <span class="sr-only">Open user menu for </span>
                {{ current_user()->username }}
            </div>
            <x-dropdowns.user>
                <x-slot name="trigger">
                    <button type="button" class="mr-2 bg-white rounded-full flex text-md focus:outline-none focus:ring-2 focus:ring-orange-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        <img class="h-10 w-10 rounded-full" src="{{ current_user()->profile_photo_url }}" alt="Avatar">
                    </button>
                </x-slot>
                <div class="px-3 py-2 font-bold text-xs text-orange-500">
                    Manage Account
                </div>
                @unlessrole('User')
{{--                <x-links.button class="block" href="#">Settings</x-links.button>--}}
{{--                <x-links.square class="block" href="{{ route('admin.settings') }}">Settings</x-links.square>--}}
                @endunlessrole
                <x-links.btn-default class="block" href="{{ route('profile.show', current_user()->username) }}">Your Profile</x-links.btn-default>
                <x-links.btn-default class="block" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</x-links.btn-default>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </x-dropdowns.user>
        @else
        <div class="px-2 flex space-x-4">
            <x-links.default class="text-xs" href="{{ route('login') }}" :active="request()->routeIs('login')">
                <i class="text-orange-500 fa-solid fa-arrow-right-to-bracket mr-2 fa-lg"></i>Login
            </x-links.default>
            @if (Route::has('register'))
                <x-links.default href="{{ route('register') }}" :active="request()->routeIs('register')">
                    <i class="text-orange-500 fa-solid fa-arrow-right-to-bracket mr-2 fa-lg"></i>Register
                </x-links.default>
            @endif
        </div>
        @endauth
    @endif
</div>
