<x-admin-layout>
    <div class="flex flex-col">
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg px-4 py-2">
            <div class="flex justify-between items-center space-x-4 pb-4 max-w-7xl">
                <div class="flex items-center">
                    <div class="border-l-4 border-orange-500 pl-4 flex justify-between items-center">
                        <x-links.header href="#">New Member</x-links.header>
                    </div>
                </div>
            </div>


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <x-cards.default class="p-8">
                    <form action="{{ route('admin.members.store') }}" enctype="multipart/form-data" method="POST" class="pt-3 space-y-6">
                        @csrf
                        <div>
                            <x-jet-label for="username" value="Username" />
                            <x-jet-input type="text" name="username" id="username" :value="old('username')" required autofocus />
                            <x-jet-input-error for="username" class="mt-2" />
                        </div>
                        <div>
                            <x-jet-label for="nickname" value="Nickname" />
                            <x-jet-input type="text" name="nickname" id="nickname" :value="old('nickname')" required />
                            <x-jet-input-error for="nickname" class="mt-2" />
                        </div>
                        <div>
                            <x-jet-label for="email" value="Email" />
                            <x-jet-input type="email" name="email" id="email" :value="old('email')" required />
                            <x-jet-input-error for="email" class="mt-2" />
                        </div>

                        <div>
                            <x-jet-label for="profile_picture_path" value="Profile Image" />
                            <x-jet-input type="file" name="profile_picture_path" id="profile_picture_path" :value="old('profile_picture_path')" required />
                            <x-jet-input-error for="profile_picture_path" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password" value="Password" />
                            <x-jet-input type="password" name="password" id="password" autocomplete="new-password" required/>
                            <x-jet-input-error for="password" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password_confirmation" value="Confirm Password" />
                            <x-jet-input type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password" required/>
                            <x-jet-input-error for="password_confirmation" class="mt-2" />
                        </div>

                        <div class="flex justify-end items-center space-x-2 mt-5">
                            <x-buttons.default class="rounded-lg" type="submit">
                                save
                            </x-buttons.default>
                            <x-links.btn-secundary href="{{ route('admin.members.index') }}" class="rounded-lg">
                                cancel
                            </x-links.btn-secundary>
                        </div>
                    </form>
                </x-cards.default>
            </div>
        </div>

    </div>
</x-admin-layout>
