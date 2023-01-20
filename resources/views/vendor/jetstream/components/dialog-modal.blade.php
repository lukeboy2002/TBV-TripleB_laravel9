@props(['id' => null, 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4">
        <div class="text-lg font-medium text-gray-700 dark:text-white">
            {{ $title }}
        </div>

        <div class="mt-4 text-sm text-gray-700 dark:text-white">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-white dark:bg-gray-800">
        {{ $footer }}
    </div>
</x-jet-modal>
