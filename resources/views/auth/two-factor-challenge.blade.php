<x-app-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-application-logo />
        </x-slot>

        <div x-data="{ recovery: false }">
            <div class="mb-4 text-sm text-gray-700 dark:text-white" x-show="! recovery">
                Please confirm access to your account by entering the authentication code provided by your authenticator application.
            </div>

            <div class="mb-4 text-sm text-gray-700 dark:text-white" x-show="recovery">
                Please confirm access to your account by entering one of your emergency recovery codes.
            </div>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('two-factor.login') }}" class="space-y-6">
                @csrf

                <div x-show="! recovery">
                    <x-jet-label for="code" value="{{ __('Code') }}" />
                    <x-jet-input type="text" inputmode="numeric" name="code" id="code" autofocus x-ref="code" autocomplete="one-time-code" />
                    <x-jet-input-error for="code" class="mt-2" />
                </div>

                <div x-show="recovery">
                    <x-jet-label for="recovery_code" value="{{ __('Recovery Code') }}" />
                    <x-jet-input type="text" name="recovery_code" id="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                    <x-jet-input-error for="recovery_code" class="mt-2" />

                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-buttons.link x-show="! recovery"
                                    x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                        Use a recovery code
                    </x-buttons.link>

                    <x-buttons.link x-show="recovery"
                                    x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                        Use an authentication code
                    </x-buttons.link>

                    <x-buttons.default class="ml-4 rounded-lg">Log in</x-buttons.default>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-app-layout>
