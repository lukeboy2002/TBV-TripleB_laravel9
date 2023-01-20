<x-app-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-application-logo />
        </x-slot>

        <form method="POST" action="{{ route('password.update') }}" class="space-y-6">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="block">
                <x-jet-label for="email" value="Email" />
                <x-jet-input type="email" name="email" id="email" :value="old('email', $request->email)" required autofocus />
                <x-jet-input-error for="email" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-label for="password" value="Password" />
                <x-jet-input type="password" name="password" id="password" required autocomplete="new-password" />
                <x-jet-input-error for="password" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input type="password" name="password_confirmation" id="password_confirmation" required autocomplete="new-password" />
                <x-jet-input-error for="password_confirmation" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-buttons.default class="rounded-lg">Reset Password</x-buttons.default>
            </div>
        </form>
    </x-jet-authentication-card>
</x-app-layout>
