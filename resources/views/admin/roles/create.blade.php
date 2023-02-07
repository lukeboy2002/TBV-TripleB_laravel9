<x-admin-layout>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg px-4 py-2">
        <div class="flex items-center space-x-4 pb-4 font-black text-gray-700 dark:text-white">
            All ROLES
        </div>

        <x-cards.default class="p-6">
            <form action="{{ route('admin.roles.store') }}" method="POST">
            @csrf
                <div>
                    <x-jet-label for="name" value="Role" />
                    <x-jet-input type="text" name="name" id="name" :value="old('name')" required autofocus />
                    <x-jet-input-error for="name" class="mt-2" />
                </div>

                <h2 class="my-4 font-bold text-gray-700 dark:text-white">Choose Permission:</h2>
                <div class="block">
                    @foreach($permissions as $permission)
                        <div class="flex space-x-2">
                        <input id="{{ $permission->id }}"
                               name="permissions[]"
                               value="{{ $permission->id }}"
                               @isset($role)
                                   @if(in_array($permissions->id, $role->permissions()->pluck('id')->toArray())) checked @endif
                               @endisset
                               aria-describedby="permissions"
                               type="checkbox"
                               class="w-4 h-4 mb-2 text-orange-500 bg-gray-100 border-gray-300 rounded focus:ring-orange-500 dark:focus:ring-orange-500 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        >
                        <x-jet-label for="{{ $permission->name }}" class="mx-4 whitespace-nowrap">{{ $permission->name }}</x-jet-label>
                        </div>
                    @endforeach
                </div>
                <div class="w-full flex justify-end">
                    <x-buttons.default class="rounded-lg">Submit</x-buttons.default>
                </div>
            </form>
        </x-cards.default>
    </div>
</x-admin-layout>
