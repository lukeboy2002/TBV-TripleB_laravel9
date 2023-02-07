<div>
    <x-main.loading />

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg px-4 py-2">
        <div class="flex justify-between items-center space-x-4 pb-4">
            <div>
                <input wire:model="search" type="text" name="search" id="search" class="rounded-lg" placeholder="Search member">
            </div>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            <button wire:click="sortBy('name')" class="text-left text-xs leading-4 font-medium text-gray-700 dark:text-white uppercase tracking-wider">Name</button>
                            <x-icons.sort-icon
                                field="name"
                                :sortField="$sortField"
                                :sortAsc="$sortAsc"
                            />
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">Permissions</th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                @forelse($roles as $role)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 block w-48">
                        @if($role->id == 1)
                            <x-pills.yellow>
                                {{ $role->name }}
                            </x-pills.yellow>
                        @elseif ($role->id == 2)
                            <x-pills.red>
                                {{ $role->name }}
                            </x-pills.red>
                        @elseif ($role->id == 3)
                            <x-pills.indigo>
                                {{ $role->name }}
                            </x-pills.indigo>
                        @elseif ($role->id == 4)
                            <x-pills.purple>
                                {{ $role->name }}
                            </x-pills.purple>
                        @elseif ($role->id == 5)
                            <x-pills.pink>
                                {{ $role->name }}
                            </x-pills.pink>
                        @endif
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                            @foreach( $role->permissions as $permission )
                                <x-pills.green>{{ $permission->name }}</x-pills.green>
                            @endforeach
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right space-x-4 flex">
                            <x-links.btn-edit-small class="rounded-lg" href="{{ route('admin.roles.edit' , $role->id) }}"><i class="fa-solid fa-pen-to-square"></i></x-links.btn-edit-small>
                            <x-buttons.danger-small type="button" class="rounded-lg" wire:click="deleteId({{ $role->id }})"><i class="fa-solid fa-trash-can-arrow-up"></i></x-buttons.danger-small>
                        </td>
                    </tr>
                @empty
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td colspan="5" class="px-6 py-4">
                            There are no members online
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="px-4 py-4">
            {{ $roles->links() }}
        </div>
    </div>

    <!-- Modal -->
    <div class="hidden" @if ($showModal) style="display:block" @endif aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <x-modals.default>
            <div class="sm:flex sm:items-start">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-gray-200 dark:bg-white sm:mx-0 sm:h-10 sm:w-10">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6 text-gray-700"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="2"
                        >
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="m19 7-.867 12.142A2 2 0 0 1 16.138 21H7.862a2 2 0 0 1-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v3M4 7h16"
                            />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white" id="modal-title">Delete User</h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500 dark:text-gray-200 mb-3">
                                Make sure you want to do this.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full mt-5 sm:mt-4 flex justify-end space-x-2">
                <x-buttons.default wire:click="close" class="rounded-lg" data-dismiss="modal">Close</x-buttons.default>
                <x-buttons.danger wire:click.prevent="delete()" class="rounded-lg">Delete</x-buttons.danger>
            </div>
        </x-modals.default>
    </div>
</div>
