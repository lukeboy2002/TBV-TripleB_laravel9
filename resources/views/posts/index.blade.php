<x-app-layout>

    <div class="relative w-full bg-white dark:bg-gray-800 overflow-hidden">
        <div class="border-t border-gray-200 dark:border-gray-600">
            <div class="max-w-7xl mx-auto py-4 px-0 lg:px-4">
                <div class="flex text-white font-black">
                    @include('components.menus.breadcrumb',['model'=> $posts])
                </div>
            </div>
        </div>
        <div class="relative float-left w-full">
            <img
                src="{{ asset('storage/images/backgrounds/blog.jpeg') }}"
                class="block w-full h-64 sm:h-64 md:h-64 object-center object-cover"
                alt="$slide->title"
            />
            <div class="absolute inset-0 h-full text-center">
                <div class="flex flex-col h-full items-center justify-center">
                    <h5 class="text-3xl font-black text-orange-500 uppercase">Blog post</h5>
                </div>
            </div>
        </div>
    </div>

    <main class="max-w-7xl px-4 py-6 mx-auto">

        <div class="border-l-4 w-full border-orange-500 pl-4 flex justify-between items-center">
            <x-links.header class="w-full" href="#">Laatste nieuws</x-links.header>
            @include('posts._header')
        </div>
        <div class="pt-2 border-b border-gray-200 dark:border-gray-600"></div>
        @if ($posts->count())
            <div class="mt-4 md:grid md:grid-cols-6 md:gap-4">
                @foreach ($posts as $post)
                    <x-cards.post
                        :post="$post"
                        class="md:col-span-3 lg:col-span-2 mt-4 lg:mt-0"
                    />
                @endforeach
            </div>
            <div class="py-6">
                {{ $posts->links() }}
            </div>

        @else
            <x-errors.404>
                <x-links.btn-default href="/posts" class="uppercase border border-orange-500 rounded-lg">
                    Back to news
                </x-links.btn-default>
            </x-errors.404>
        @endif
    </main>
</x-app-layout>
