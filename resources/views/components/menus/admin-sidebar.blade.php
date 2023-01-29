<div id="containerSidebar">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
            TBV-TripleB
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <x-links.btn-default class="block" href="/" :active="request()->routeIs('admin.dashboard')">
                    <i class="fa-solid fa-house mr-4"></i>Dashboard
                </x-links.btn-default>
            </li>
            <li class="relative px-6 py-3">
                <x-links.btn-default class="block" href="/">
                    <i class="fa-brands fa-wpforms mr-4"></i>Forms
                </x-links.btn-default>
            </li>
            <li class="relative px-6 py-3">
                <x-links.btn-default class="block" href="/">
                    <i class="fa-regular fa-address-card mr-4"></i>Cards
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
