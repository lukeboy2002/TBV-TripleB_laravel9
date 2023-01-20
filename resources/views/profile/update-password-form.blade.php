<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        Update Password
    </x-slot>

    <x-slot name="description">
        Ensure your account is using a long, random password to stay secure.
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="Current Password" />
            <x-jet-input type="password" id="current_password" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('New Password') }}" />
            <x-jet-input type="password" id="password" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input type="password" id="password_confirmation" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3 flex items-center" on="saved"><x-icons.icon name="check" class="mr-1"/>Saved.</x-jet-action-message>

        <x-buttons.default class="rounded-lg">Save</x-buttons.default>
    </x-slot>
</x-jet-form-section>
