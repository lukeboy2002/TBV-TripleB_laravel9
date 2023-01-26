<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        Profile Information
    </x-slot>

    <x-slot name="description">
        Update your account's profile information and email address.
    </x-slot>

    <x-slot name="form">

        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                       wire:model="photo"
                       x-ref="photo"
                       x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="Avatar" />

                <div class="flex items-center space-x-8">
                    <div class="flex-col">
                        <!-- Current Profile Photo -->
                        <div class="my-2" x-show="! photoPreview">
                            <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->username }}" class="rounded-full h-20 w-20 object-cover">
                        </div>

                        <!-- New Profile Photo Preview -->
                        <div x-show="photoPreview" style="display: none;">
                            <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                                  x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                            </span>
                        </div>
                    </div>

                    <div class="flex h-auto space-x-2">
                        <x-buttons.default class="rounded-lg" type="button" x-on:click.prevent="$refs.photo.click()">Select A New Photo</x-buttons.default>
                        @if ($this->user->profile_photo_path)
                            <x-buttons.secundary class="rounded-lg" wire:click="deleteProfilePhoto">Remove Photo</x-buttons.secundary>
                        @endif
                    </div>
                </div>
                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <div class="col-span-6">
            <x-jet-label for="username" value="Username" />
            <x-jet-input type="text" id="username" wire:model.defer="state.username" autocomplete="username" />
            <x-jet-input-error for="username" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-3">
            <x-jet-label for="firstname" value="Firstname" />
            <x-jet-input type="text" id="firstname" wire:model.defer="state.firstname" autocomplete="firstname" />
            <x-jet-input-error for="firstname" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-3">
            <x-jet-label for="lastname" value="Lastname" />
            <x-jet-input type="text" id="lastname" wire:model.defer="state.lastname" autocomplete="lastname" />
            <x-jet-input-error for="lastname" class="mt-2" />
        </div>
        <div class="col-span-6">
            <x-jet-label for="oneliner" value="Oneliner" />
            <x-jet-input type="text" id="oneliner" wire:model.defer="state.oneliner" autocomplete="oneliner" />
            <x-jet-input-error for="oneliner" class="mt-2" />
        </div>
        <div class="col-span-6">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                <div class="mt-2 flex items-center space-x-2">
                    <p class="text-sm text-gray-700 dark:text-white flex items-center">
                        <x-icons.icon name="error" class="mr-1 text-red-500"/> Your email address is unverified.
                    </p>
                    <x-buttons.link class="text-left" type="button" wire:click.prevent="sendEmailVerification">
                        Click here to re-send the verification email.
                    </x-buttons.link>
                </div>
                @if ($this->verificationLinkSent)
                    <p v-show="verificationLinkSent" class="mt-2 flex items-center font-medium text-sm text-green-600">
                        <x-icons.icon name="check" class="mr-1"/>A new verification link has been sent to your email address.
                    </p>
                @endif

            @endif
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3 flex items-center" on="saved"><x-icons.icon name="check" class="mr-1"/>Saved.</x-jet-action-message>

        <x-buttons.default class="rounded-lg" wire:loading.attr="disabled" wire:target="photo">Save</x-buttons.default>
    </x-slot>
</x-jet-form-section>
