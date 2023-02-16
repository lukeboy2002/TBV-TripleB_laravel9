{{--<div>--}}
{{--    <x-main.loading />--}}

{{--    <div class="overflow-x-auto relative shadow-md sm:rounded-lg px-4 py-2">--}}
{{--        <div class="flex justify-between items-center space-x-4 pb-4 max-w-7xl">--}}
{{--            <div class="flex items-center">--}}
{{--                <div class="border-l-4 border-orange-500 pl-4 flex justify-between items-center">--}}
{{--                    <x-links.header href="#">All Roles</x-links.header>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="flex justify-end items-center space-x-4 pb-4">--}}
{{--            <x-links.btn-edit-small href="{{route('admin.roles.create')}}" class="rounded-lg">New Role</x-links.btn-edit-small>--}}
{{--        </div>--}}

{{--        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">--}}
{{--            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">--}}
{{--                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">--}}
{{--                <tr>--}}
{{--                    <th scope="col" class="px-6 py-3">--}}
{{--                        <div class="flex items-center">--}}
{{--                            <button wire:click="sortBy('name')" class="text-left text-xs leading-4 font-medium text-gray-700 dark:text-white uppercase tracking-wider">Name</button>--}}
{{--                            <x-icons.sort-icon--}}
{{--                                field="name"--}}
{{--                                :sortField="$sortField"--}}
{{--                                :sortAsc="$sortAsc"--}}
{{--                            />--}}
{{--                        </div>--}}
{{--                    </th>--}}
{{--                    <th scope="col" class="flex justify-end px-6 py-3">actions--}}
{{--                    </th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @forelse($roles as $role)--}}
{{--                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">--}}
{{--                        <td class="px-6 py-4 text-gray-700 dark:text-white">--}}
{{--                            {{ $role->name }}--}}
{{--                        </td>--}}
{{--                        <td class="flex items-center justify-end px-6 py-4 space-x-4">--}}
{{--                            <x-links.btn-edit-small href="{{ route('admin.roles.edit', $role) }}"><i class="fa-solid fa-pen-to-square"></i></x-links.btn-edit-small>--}}
{{--                            <x-buttons.danger-small type="button" wire:click="deleteId({{ $role->id }})" class="rounded-lg"><i class="fa-solid fa-trash-can"></i></x-buttons.danger-small>--}}


{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @empty--}}
{{--                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">--}}
{{--                        <td colspan="2" class="px-6 py-4">--}}
{{--                            There are no roles--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforelse--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}

{{--        <div class="px-4 py-4">--}}
{{--            {{ $roles->links() }}--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- Modal -->--}}
{{--    <div class="hidden" @if ($showModal) style="display:block" @endif aria-labelledby="modal-title" role="dialog" aria-modal="true">--}}
{{--        <x-modals.default>--}}
{{--            <div class="sm:flex sm:items-start">--}}
{{--                <div class="sm:flex sm:items-start">--}}
{{--                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-gray-200 dark:bg-white sm:mx-0 sm:h-10 sm:w-10">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg"--}}
{{--                             class="h-6 w-6 text-gray-700"--}}
{{--                             fill="none"--}}
{{--                             viewBox="0 0 24 24"--}}
{{--                             stroke="currentColor"--}}
{{--                             stroke-width="2"--}}
{{--                        >--}}
{{--                            <path stroke-linecap="round"--}}
{{--                                  stroke-linejoin="round"--}}
{{--                                  d="m19 7-.867 12.142A2 2 0 0 1 16.138 21H7.862a2 2 0 0 1-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v3M4 7h16"--}}
{{--                            />--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">--}}
{{--                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white" id="modal-title">Delete User</h3>--}}
{{--                        <div class="mt-2">--}}
{{--                            <p class="text-sm text-gray-500 dark:text-gray-200 mb-3">--}}
{{--                                Make sure you want to do this.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="w-full mt-5 sm:mt-4 flex justify-end space-x-2">--}}
{{--                <x-buttons.default wire:click="close" class="rounded-lg" data-dismiss="modal">Close</x-buttons.default>--}}
{{--                <x-buttons.danger wire:click.prevent="delete()" class="rounded-lg">Delete</x-buttons.danger>--}}
{{--            </div>--}}
{{--        </x-modals.default>--}}
{{--    </div>--}}
{{--</div>--}}
<div>
    <x-main.loading />

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg px-4 py-2">
        <div class="flex justify-between items-center space-x-4 pb-4 max-w-7xl">
            <div class="flex items-center">
                <div class="border-l-4 border-orange-500 pl-4 flex justify-between items-center">
                    <x-links.header href="#">All Roles</x-links.header>
                </div>
            </div>
        </div>
        <div class="flex justify-end items-center space-x-4 pb-4">
            <div>
                <x-links.btn-edit-small href="{{ route('admin.roles.create') }}" class="rounded-lg">New role</x-links.btn-edit-small>
            </div>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            <button wire:click="sortBy('name')" class="uppercase">Name</button>
                            <x-icons.sort-icon
                                field="name"
                                :sortField="$sortField"
                                :sortAsc="$sortAsc"
                            />
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 flex justify-end space-x-4">
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                @forelse($roles as $role )
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $role->name }}
                        </th>
                        <td class="px-6 py-4 flex justify-end space-x-4">
{{--                            <x-buttons.succes-small type="button" wire:click="show({{ $role->id }})" class="rounded-lg"><i class="fa-solid fa-eye"></i></x-buttons.succes-small>--}}
                            <x-links.btn-succes-small href="{{ route('admin.roles.show', $role) }}" class="rounded-lg"><i class="fa-solid fa-eye"></i></x-links.btn-succes-small>
                            <x-links.btn-edit-small href="{{ route('admin.roles.edit', $role) }}" class="rounded-lg"><i class="fa-solid fa-pen-to-square"></i></x-links.btn-edit-small>
                            <x-buttons.danger-small type="button" wire:click="deleteId({{ $role->id }})" class="rounded-lg"><i class="fa-solid fa-trash-can"></i></x-buttons.danger-small>
                        </td>
                    </tr>
                @empty
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            There are no roles
                        </th>
                        <td class="px-6 py-4">
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
                        <i class="fa-solid fa-trash-can"></i>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white" id="modal-title">Delete Role</h3>
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
