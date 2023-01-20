<x-app-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-application-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-700 dark:text-white">
            This is a secure area of the application. Please confirm your password before continuing.
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <div>
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input type="password" name="password" id="password" required autocomplete="current-password" autofocus />
                <x-jet-input-error for="password" class="mt-2" />
            </div>

            <div class="flex justify-end mt-4">
                <x-buttons.default class="rounded-lg">Confirm</x-buttons.default>
            </div>
        </form>
    </x-jet-authentication-card>
</x-app-layout>
