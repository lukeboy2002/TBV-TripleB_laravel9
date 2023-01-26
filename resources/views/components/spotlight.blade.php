<div class="max-w-7xl mx-auto px-4 py-6">
    <div class="border-l-4 border-orange-500 pl-4 flex justify-between items-center">
        <x-links.header href="#">Laatste nieuws</x-links.header>
    </div>

    <div class="pt-2 border-b border-gray-200 dark:border-gray-600"></div>

    <div class="mt-6 lg:grid lg:grid-cols-12 lg:gap-4">
        <div class="lg:col-span-9">
            <div class="w-full bg-white border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <x-posts.featured :post="$posts[0]" />
            </div>
        </div>
        <div class="hidden lg:block lg:col-span-3">
            <div class="w-full bg-white dark:bg-gray-800 border border-gray-700 dark:border-gray-700">
                @foreach ($posts->skip(1) as $post)
                    <div class="{{ $loop->last ? '': 'border-b border-gray-700' }}">
                        <x-posts.side :post="$post" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
