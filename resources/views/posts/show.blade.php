<x-app-layout>
    <div class="relative w-full bg-white dark:bg-gray-800 overflow-hidden">
        <div class="border-t bg-gray-900 border-gray-200 dark:border-gray-600">
            <div class="max-w-7xl mx-auto py-4 px-0 lg:px-4">
                <div class="flex text-white font-black">
                    @include('components.menus.breadcrumb',['model'=> $posts])
                </div>
            </div>
        </div>
        <div class="relative float-left w-full">
            <img
                src="{{ asset('storage/'.$post->thumbnail_path) }}"
                class="block w-full h-96 object-center object-cover"
                alt="$slide->title"
            />
            <div class="absolute inset-0 h-full text-center">
                <div class="flex flex-col h-full items-center justify-center">
                    <h5 class="text-2xl font-black text-orange-500 uppercase">Blog post</h5>
                    <p class="font-bold text-black">{{ $post->title }}</p>
                </div>
            </div>
        </div>
    </div>


    <div class="max-w-7xl mx-auto py-4 px-0 lg:px-4">
        <div class="lg:grid lg:grid-cols-12 lg:gap-4">
            <div class="lg:col-span-9">
                <x-cards.default class="p-4 sm:p-6 md:p-8">
                    <div class="mb-4">
                        <a href="/posts/?category={{ $post->category->slug }}"
                           class="inline-flex items-center px-3 py-1 rounded-lg text-xs text-white bg-orange-500 hover:bg-orange-600 dark:bg-orange-500 dark:hover:bg-white dark:hover:text-orange-500 focus:ring-orange-500 dark:focus:ring-orange-800 uppercase">
                            {{ $post->category->name }}
                        </a>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $post->title }}
                    </h2>
                    <div class="sm:flex items-center sm:space-x-6 sm:mb-4">
                        <div class="font-normal text-gray-700 dark:text-gray-400">
                            <div class="flex items-center">
                                <img src="{{ asset('storage/' . $post->author->profile_photo_path) }}"
                                     class="h-15 w-15 mr-2 rounded-full border dark:border-gray-700" alt="avatar">
{{--                                <x-links.default href="{{ route('explore.show', $post->author->username) }}"--}}
                                <x-links.default href="#"
                                                 class="text-gray-900 dark:text-white hover:text-orange-500 dark:hover:text-orange-500 focus:text-orange-500 focus:dark:text-orange-500 focus:underline">{{ $post->author->username }}</x-links.default>
                            </div>
                        </div>
                        <div class="sm:h-4 flex items-center space-x-6 sm:border-l sm:border-orange-500">
                            <div class="ml-0 sm:ml-3 text-xs text-gray-500">
                                <i class="fa-regular fa-clock mr-2"></i>{{ $post->created_at->format('d F Y') }}
                            </div>
                            <div class="text-xs text-gray-500 py-4">
                                <i class="fa-solid fa-comments mr-2"></i>{{ $post->comments->count() }}
                            </div>
                            <div class="text-xs text-gray-500 py-4">
                                <i class="fa-regular fa-eye mr-2"></i>{{ $post->views }}
                            </div>
                        </div>
                    </div>
                    <div class="border-l-4 border-orange-500 pl-4 text-sm text-gray-500 dark:text-gray-400">
                        {!! $post->excerpt !!}
                    </div>

                    <x-cards.default class="my-6 p-4 sm:p-6">
                        <div class="text-xs sm:flex sm:justify-between sm:items-center">
                            <p class="text-gray-900 dark:text-white mb-3 sm:mb-0 uppercase">Share this post</p>
                            <div class="space-x-5">
                                <x-menus.social/>
                            </div>
                        </div>
                    </x-cards.default>

                    <div class="text-gray-900 dark:text-white">
                        {!! $post->body !!}
                    </div>
                </x-cards.default>
                @include('posts._comments')
            </div>
            <div class="hidden lg:block lg:col-span-3">
                <div class="pb-3">
                    <div class="border-l-4 border-orange-500 pl-4 flex justify-between items-center">
                        <p class="text-orange-500 font-black uppercase">Meest gelezen</p>
                    </div>
                </div>
                <x-cards.default>
                    @foreach ($posts->skip(1) as $post)
                        <div class="{{ $loop->last ? '': 'border-b border-gray-700' }}">
                            <x-posts.side :post="$post" />
                        </div>
                    @endforeach
                </x-cards.default>

                <x-categories />

            </div>
        </div>
    </div>
</x-app-layout>
