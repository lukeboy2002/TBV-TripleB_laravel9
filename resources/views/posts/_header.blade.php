<div class="w-full flex justify-end items-center">
    <div class="relative lg:inline-flex bg-gray-100 rounded-xl mr-4">
        <x-category-dropdown />
    </div>

    <!-- Search -->
    <div class="relative flex lg:inline-flex items-center">
        <form method="GET" action="{{ route('post') }}" class="p-0 m-0">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            <input type="text"
                   name="search"
                   placeholder="Find something"
                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500 dark:shadow-sm-light"
                   value="{{ request('search') }}"
            >
            <div class="absolute inset-y-0 right-0 flex items-center py-1.5 pr-1.5 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5"
                     viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM2 8a6 6 0 1 1 10.89 3.476l4.817 4.817a1 1 0 0 1-1.414 1.414l-4.816-4.816A6 6 0 0 1 2 8z"
                          clip-rule="evenodd"
                    />
                </svg>
            </div>
        </form>
    </div>
</div>
