@props(['post'])
<div class="p-4 mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">
    <div class="flex justify-between items-center space-x-4">
        <div class="text-xs text-gray-500">
            <i class="fa-regular fa-clock mr-2"></i>{{ $post->created_at->diffForHumans() }}
        </div>
        <div class="text-xs text-gray-500 py-4">
            <i class="fa-regular fa-eye mr-2"></i>{{ $post->views }}
        </div>
    </div>

{{--    <a href="{{ route('post.show', $post->slug) }}" class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white"">--}}
    <a href="#" class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">
        {{ $post->title }}
    </a>
</div>
