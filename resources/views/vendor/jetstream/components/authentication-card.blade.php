<div class="my-10 flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-neutral-900">
    <div class="pb-8">
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
        {{ $slot }}
    </div>
</div>
