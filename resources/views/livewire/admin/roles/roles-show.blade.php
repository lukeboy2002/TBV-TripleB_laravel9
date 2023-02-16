<div>
    <x-main.loading />

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg px-4 py-2">
        <div class="flex justify-between items-center space-x-4 pb-4 max-w-7xl">
            <div class="flex items-center">
                <div class="border-l-4 border-orange-500 pl-4 flex justify-between items-center">
                    <x-links.header href="#">{{ $role->name }} with permissions</x-links.header>
                </div>
            </div>
        </div>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <x-cards.default class="p-8">
                @forelse ($role->permissions as $permission)
                    <p class="inline-block text-gray-700 dark:text-white"><i class="fa-solid fa-ellipsis-vertical text-green-600 px-2"></i>{{ $permission->name }}</p>
                @empty
                    <div class="mt-2 p-4 mb-4 flex items-center text-sm text-red-700 bg-red-100 rounded-lg">
                        <x-icons.icon name="error" class="mr-1"/>
                        no permissions
                    </div>
                @endforelse

            </x-cards.default>
        </div>
    </div>
</div>

