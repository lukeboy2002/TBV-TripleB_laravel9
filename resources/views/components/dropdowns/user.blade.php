<x-dropdowns.default>
    <x-slot name="trigger">
        <button type="button" class="mr-2 bg-white rounded-full flex text-md focus:outline-none focus:ring-2 focus:ring-orange-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
            <img class="h-10 w-10 rounded-full" src="/{{ current_user()->profile_photo_path }}" alt="Avatar">
        </button>
    </x-slot>
    <div class="px-3 py-2 font-bold text-xs text-orange-500">
        Manage Account
    </div>
    @unlessrole('user')
{{--        <x-links.btn-default class="block" href="/admin">Settings</x-links.btn-default>--}}
        <x-links.btn-default class="block" href="{{ route('admin.settings') }}">Settings</x-links.btn-default>
    @endunlessrole
    <x-links.btn-default class="block" href="{{ route('profile.show', current_user()->username) }}">Your Profile</x-links.btn-default>
    <x-links.btn-default class="block" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</x-links.btn-default>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</x-dropdowns.default>
