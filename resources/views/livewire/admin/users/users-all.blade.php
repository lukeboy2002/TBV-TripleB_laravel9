<div>
    <x-main.loading />

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg px-4 py-2">
        <div class="flex justify-between items-center space-x-4 pb-4">
            <div>
                <input wire:model="search" type="text" name="search" id="search" class="rounded-lg" placeholder="Search user">
            </div>
            <div>
                <label for="active" class="text-gray-700 dark:text-white font-medium mr-2">Online?</label>
                <input wire:model="active"
                       id="active"
                       type="checkbox"
                       class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 rounded focus:ring-orange-500 dark:focus:ring-orange-500 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>
        </div>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            <button wire:click="sortBy('username')" class="text-left text-xs leading-4 font-medium text-gray-700 dark:text-white uppercase tracking-wider">Name</button>
                            <x-icons.sort-icon
                                field="username"
                                :sortField="$sortField"
                                :sortAsc="$sortAsc"
                            />
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            <button wire:click="sortBy('email')" class="text-left text-xs leading-4 font-medium text-gray-700 dark:text-white uppercase tracking-wider">Email</button>
                            <x-icons.sort-icon
                                field="email"
                                :sortField="$sortField"
                                :sortAsc="$sortAsc"
                            />
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">Role</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Last Login</th>

                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                @forelse($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            <img class="rounded-full" src="{{asset('storage'.$user->profile_photo_path)}}" alt="avatar">
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->username }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4">
                            @foreach ($user->roles as $role)
                                @if($role->id == 2)
                                    <x-pills.red>
                                        {{ $role->name }}
                                    </x-pills.red>
                                @elseif ($role->id == 3)
                                    <x-pills.pink>
                                    {{ $role->name }}
                                    </x-pills.pink>
                                @elseif ($role->id == 4)
                                    <x-pills.indigo>
                                        {{ $role->name }}
                                    </x-pills.indigo>
                                @elseif ($role->id == 5)
                                    <x-pills.purple>
                                        {{ $role->name }}
                                    </x-pills.purple>
                                @elseif ($role->id == 6)
                                    <x-pills.green>
                                        {{ $role->name }}
                                    </x-pills.green>
                                @else
                                    <x-pills.yellow>
                                        {{ $role->name }}
                                    </x-pills.yellow>
                                @endif
                            @endforeach
                        </td>
                        <td class="px-6 py-4">
                            @if ($user->active)
                                <x-pills.green>
                                    Active
                                </x-pills.green>
                            </span>
                            @else
                                <x-pills.red class="">
                                    Inactive
                                </x-pills.red>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            {{ \Carbon\Carbon::parse($user->last_login_time)->diffForHumans() }}
                        </td>
                        <td class="px-6 py-4 text-right space-x-4 flex">
                            @if ($user->trashed())
                                @role('super-admin')
                                <x-links.btn-edit-small class="rounded-lg" href="{{ route('admin.users.trashed.restore' , $user->id) }}"><i class="fa-solid fa-recycle"></i></x-links.btn-edit-small>
                                <x-links.btn-danger-small class="rounded-lg" href="{{ route('admin.users.trashed.destroy' , $user->id) }}"><i class="fa-solid fa-trash-can"></i></x-links.btn-danger-small>
                                @endrole
                                @role('Member')
                                <span class="px-5 py-2.5 text-center text-sm font-medium w-full sm:w-auto rounded-lg focus:ring-4 text-white bg-red-700 dark:bg-red-600">Deleted</span>
                                @endrole
                            @else
                                <x-links.btn-edit-small class="rounded-lg" href="{{ route('admin.users.edit' , $user->id) }}"><i class="fa-solid fa-pen-to-square"></i></x-links.btn-edit-small>
                                <x-buttons.danger-small type="button" class="rounded-lg" wire:click="deleteId({{ $user->id }})"><i class="fa-solid fa-trash-can-arrow-up"></i></x-buttons.danger-small>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td colspan="8" class="px-6 py-4">
                            There are no users online
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="px-4 py-4">
            {{ $users->links() }}
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
