@props(['post'])

<article {{ $attributes->merge(['class' => 'bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700']) }}>
    <div class="relative">
        <img class="max-h-52 object-top object-cover rounded-t-lg w-full" src="{{ asset('storage/' . $post->thumbnail_path) }}" alt="">
        <div class="absolute bg-orange-500 block h-16 mr-4 right-0 text-center text-lg text-white top-0 w-16">
            <p class="text-3xl font-extrabold">{{ $post->created_at->format('d') }}</p>
            <p class="text-sm">{{ $post->created_at->format('M') }}</p>
        </div>
    </div>
    <div class="p-5">
        <div class="mb-4">
            <a href="/posts/?category={{ $post->category->slug }}" class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium text-white bg-orange-500 hover:bg-orange-600 dark:bg-orange-500 dark:hover:bg-white dark:hover:text-orange-500 focus:ring-orange-500 dark:focus:ring-orange-800">
                {{ $post->category->name }}
            </a>
        </div>

        <div class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white w-5/6">
            <a href="{{ route('post.show', $post->slug) }}">
                {{ $post->title }}
            </a>
        </div>
        <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            {!! $post->excerpt !!}
        </div>
        <footer class="pb-4 pr-4 flex items-center ">
            <div class="text-xs text-gray-500">
                <i class="fa-regular fa-clock mr-2"></i>{{ $post->created_at->format('d F Y') }}
            </div>
            <div class="hidden sm:block text-xs text-gray-500 py-4">
                <i class="fa-regular fa-user ml-4 mr-2"></i>{{ $post->author->username }}
            </div>
            <div class="text-xs text-gray-500 py-4">
                <i class="fa-regular fa-eye ml-4 mr-2"></i>{{ $post->views }}
            </div>
            <div class="text-xs text-gray-500 py-4">
                <i class="fa-solid fa-comments ml-4 mr-2"></i>{{ $post->comments->count() }}
            </div>
        </footer>
    </div>
</article>
