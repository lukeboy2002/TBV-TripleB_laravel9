<div>
    <x-main.loading />

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg px-4 py-2">
        <div class="flex justify-between items-center space-x-4 pb-4 max-w-7xl">
            <div class="flex items-center">
                <div class="border-l-4 border-orange-500 pl-4 flex justify-between items-center">
                    <x-links.header href="#">{{ $editing ? 'Edit ' . $role->name : 'Create Role' }}</x-links.header>
                </div>
            </div>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <x-cards.default class="p-8">
                <form wire:submit.prevent="submit" class="pt-3">
                    @csrf
                    <div>
                        <x-jet-label for="name" value="Name" />
                        <x-jet-input wire:model.defer="role.name" type="text" name="name" id="name" :value="old('name')" required autofocus />
                        <x-jet-input-error for="role.name" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="permissions" value="Permissions" />
                        <x-select2 class="mt-1" id="permissions" name="permissions" :options="$this->listsForFields['permissions']" wire:model="permissions" multiple />
                        <x-jet-input-error for="permissions" class="mt-2" />
                    </div>

                    <div class="flex justify-end items-center space-x-2 mt-5">
                        <x-buttons.default class="rounded-lg" type="submit">
                            save
                        </x-buttons.default>
                        <x-links.btn-secundary href="{{ route('admin.roles.index') }}" class="rounded-lg">
                            cancel
                        </x-links.btn-secundary>
                    </div>
                </form>
            </x-cards.default>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(".js-example-theme-multiple").select2({
            theme: "classic"
        });
    </script>
@endpush
