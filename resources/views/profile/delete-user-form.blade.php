<x-jet-action-section>
    <x-slot name="title">
        Delete Account
    </x-slot>

    <x-slot name="description">
        Permanently delete your account.
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-700 dark:text-white">
            Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
        </div>

        <div class="mt-5">
            <x-buttons.danger wire:click="confirmUserDeletion" wire:loading.attr="disabled" class="rounded-lg">Delete Account</x-buttons.danger>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                Delete Account
            </x-slot>

            <x-slot name="content">
                {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Password') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2 w-3/4" />
                </div>

            </x-slot>

            <x-slot name="footer">
                <x-buttons.secundary class="rounded-lg" wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">Cancel</x-buttons.secundary>

                <x-buttons.danger class="rounded-lg" wire:click="deleteUser" wire:loading.attr="disabled">Delete Account</x-buttons.danger>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
