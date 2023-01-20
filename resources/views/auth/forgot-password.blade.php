<x-app-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-application-logo />
        </x-slot>
        <div class="mb-4 text-sm text-gray-700 dark:text-white">
            Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
        </div>
        <x-main.messages />
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="block">
                <x-jet-label for="email" value="Email" />
                <x-jet-input type="email" name="email" id="email" :value="old('email')" required autofocus />
                <x-jet-input-error for="email" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-buttons.default class="rounded-lg">Email Password Reset Link</x-buttons.default>
            </div>
        </form>
    </x-jet-authentication-card>
</x-app-layout>
