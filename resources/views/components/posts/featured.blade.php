@props(['post'])

<div class="p-5">
    <div class="flex items-center space-x-4">
        <a href="/posts/?category={{ $post->category->slug }}" class="inline-flex items-center px-3 py-1 rounded-lg text-xs text-white bg-orange-500 hover:bg-orange-600 dark:bg-orange-500 dark:hover:bg-white dark:hover:text-orange-500 focus:ring-orange-500 dark:focus:ring-orange-800 uppercase">
            {{ $post->category->name }}
        </a>
        <div class="text-xs text-gray-500">
            <i class="fa-regular fa-clock mr-2"></i>{{ $post->created_at->format('d F Y') }}
        </div>
        <div class="hidden sm:block text-xs text-gray-500 py-4">
            <i class="fa-regular fa-user mr-2"></i>{{ $post->author->username }}
        </div>
        <div class="text-xs text-gray-500 py-4">
            <i class="fa-regular fa-eye mr-2"></i>{{ $post->views }}
        </div>
    </div>
    <a href="{{ route('post.show', $post->slug) }}">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
    </a>
    <div class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400">
        {!! $post->excerpt !!}
    </div>
</div>
<a href="{{ route('post.show', $post->slug) }}">
    <img class="mx-auto max-h-96 w-full object-cover" src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}">
</a>
<div class="p-5 text-sm md:flex md:justify-between md:items-center">
    <p class="text-gray-500"><i class="fa-solid fa-comments mr-2"></i>{{ $post->comments->count() }} comment(s)</p>
    <div class="flex items-center space-x-5 pt-4 lg:pt-0">
        <p class="text-orange-500">Share</p> <x-menus.social />
    </div>
</div>
