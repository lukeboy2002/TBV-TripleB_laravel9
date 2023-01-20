<x-jet-action-section>
    <x-slot name="title">
        Two Factor Authentication
    </x-slot>

    <x-slot name="description">
        Add additional security to your account using two factor authentication.
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-700 dark:text-white flex items-center">
            @if ($this->enabled)
                @if ($showingConfirmation)
                    Finish enabling two factor authentication.
                @else
                    <x-icons.icon name="check" class="mr-2 text-green-500"/>You have enabled two factor authentication.
                @endif
            @else
                <x-icons.icon name="error" class="mr-2 text-red-500"/>You have not enabled two factor authentication.
            @endif
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-700 dark:text-white">
            When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone's Google Authenticator application.
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 max-w-xl text-sm text-gray-700 dark:text-white">
                    <p class="font-semibold">
                        @if ($showingConfirmation)
                            To finish enabling two factor authentication, scan the following QR code using your phone's authenticator application or enter the setup key and provide the generated OTP code.
                        @else
                            Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application or enter the setup key.
                        @endif
                    </p>
                </div>

                <div class="mt-4">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>

                <div class="mt-4 max-w-xl text-sm font-semibold text-gray-700 dark:text-white">Setup Key: <span class="text-green-500">{{ decrypt($this->user->two_factor_secret) }}</span>
                </div>

                @if ($showingConfirmation)
                    <div class="mt-4">
                        <x-jet-label for="code" value="{{ __('Code') }}" />

                        <x-jet-input id="code" type="text" name="code" class="block mt-1 w-1/2" inputmode="numeric" autofocus autocomplete="one-time-code"
                            wire:model.defer="code"
                            wire:keydown.enter="confirmTwoFactorAuthentication" />

                        <x-jet-input-error for="code" class="mt-2" />
                    </div>
                @endif
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4 max-w-xl text-sm font-semibold text-gray-700 dark:text-white">
                    Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.
                </div>
                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono bg-white text-gray-700 border border-gray-200 shadow-md dark:bg-gray-800 dark:text-white dark:border-gray-700 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-buttons.default class="rounded-lg" wire:loading.attr="disabled">Enable</x-buttons.default>
                </x-jet-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-buttons.secundary class="mr-3 rounded-lg">Regenerate Recovery Codes</x-buttons.secundary>
                    </x-jet-confirms-password>
                @elseif ($showingConfirmation)
                    <x-jet-confirms-password wire:then="confirmTwoFactorAuthentication">
                        <x-buttons.default class="mr-3 rounded-lg" wire:loading.attr="disabled">Confirm</x-buttons.default>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="showRecoveryCodes">
                        <x-buttons.secundary class="mr-3 rounded-lg">
                            {{ __('Show Recovery Codes') }}
                        </x-buttons.secundary>
                    </x-jet-confirms-password>
                @endif

                @if ($showingConfirmation)
                    <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-buttons.secundary class="rounded-lg" wire:loading.attr="disabled">Cancel</x-buttons.secundary>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-buttons.danger class="rounded-lg" wire:loading.attr="disabled">Disable</x-buttons.danger>
                    </x-jet-confirms-password>
                @endif
            @endif
        </div>
    </x-slot>
</x-jet-action-section>
