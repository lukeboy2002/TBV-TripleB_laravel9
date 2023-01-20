<x-app-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-application-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-700 dark:text-white">
            Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                A new verification link has been sent to the email address you provided in your profile settings.
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div>
                    <x-buttons.default class="rounded-lg">Resend Verification Email</x-buttons.default>
                </div>
            </form>

            <div class="space-x-6">
                <x-links.default href="{{ route('profile.show', current_user()->username) }}">Edit Profile</x-links.default>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <x-buttons.link type="submit">Log Out</x-buttons.link>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-app-layout>
