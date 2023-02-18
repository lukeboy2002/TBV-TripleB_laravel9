<div id="containerSidebar">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
            TBV-TripleB
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <x-links.btn-default class="block" href="{{ route('admin.settings') }}" :active="request()->routeIs('admin.settings')">
                    <i class="fa-solid fa-house mr-4"></i>Dashboard
                </x-links.btn-default>
            </li>
            <hr class="h-px m-4 bg-gray-200 border-0 dark:bg-gray-700">

            <li class="relative px-6 py-3">
                <x-dropdowns.sidemenu>
                    <x-slot name="trigger">
                        <x-buttons.dropdown :active="request()->routeIs('admin.roles*', 'admin.permissions*')">
                            <i class="fa-solid fa-gears mr-4"></i>Access Management
                        </x-buttons.dropdown>
                    </x-slot>
                    <x-links.default class="block" href="{{ route('admin.roles.index') }}" :active="request()->routeIs('admin.roles*')">
                        <i class="fa-solid fa-user-gear mr-4"></i>Roles
                    </x-links.default>
                    <x-links.default class="block" href="{{ route('admin.permissions.index') }}" :active="request()->routeIs('admin.permissions*')">
                        <i class="fa-solid fa-list-check mr-4"></i>Permissions
                    </x-links.default>
                </x-dropdowns.sidemenu>
            </li>

            <li class="relative px-6 py-3">
                <x-dropdowns.sidemenu>
                    <x-slot name="trigger">
                        <x-buttons.dropdown :active="request()->routeIs('admin.members*')">
                            <i class="fa-solid fa-people-roof mr-4"></i>Members Management
                        </x-buttons.dropdown>
                    </x-slot>
                    <x-links.default class="block" href="{{ route('admin.members.index') }}" :active="request()->routeIs('admin.members*')">
                        <i class="fa-solid fa-people-group mr-4"></i>All members
                    </x-links.default>
                    <x-links.default class="block" href="{{ route('admin.members.create') }}" :active="request()->routeIs('admin.members*')">
                        <i class="fa-solid fa-person-circle-plus mr-4"></i>New member
                    </x-links.default>
                </x-dropdowns.sidemenu>
            </li>

            <li class="relative px-6 py-3">
                <x-dropdowns.sidemenu>
                    <x-slot name="trigger">
                        <x-buttons.dropdown :active="request()->routeIs('admin.users*')">
                            <i class="fa-solid fa-users-gear mr-4"></i>User Management
                        </x-buttons.dropdown>
                    </x-slot>
                    <x-links.default class="block" href="{{ route('admin.users.index') }}" :active="request()->routeIs('admin.users*')">
                        <i class="fa-solid fa-users mr-4"></i>Users
                    </x-links.default>
                </x-dropdowns.sidemenu>
            </li>

            <li class="relative px-6 py-3">
                <x-links.btn-default class="block" href="{{ route('admin.posts.index') }}" :active="request()->routeIs('admin.posts*')">
                    <i class="fa-solid fa-blog mr-4"></i>BlogPost
                </x-links.btn-default>
            </li>
            <li class="relative px-6 py-3">
                <x-links.btn-default class="block">
                    <i class="fa-solid fa-chart-pie mr-4"></i>Charts
                </x-links.btn-default>
            </li>
            <li class="relative px-6 py-3">
                <x-links.btn-default class="block" href="/">
                    <i class="fa-solid fa-toggle-on mr-4"></i>Buttons
                </x-links.btn-default>
            </li>
            <li class="relative px-6 py-3">
                <x-links.btn-default class="block" href="/">
                    <i class="fa-solid fa-copy mr-4"></i>Modals
                </x-links.btn-default>
            </li>
            <li class="relative px-6 py-3">
                <x-links.btn-default class="block" href="/">
                    <i class="fa-solid fa-table-cells mr-4"></i>Tables
                </x-links.btn-default>
            </li>
        </ul>
    </div>
</div>
