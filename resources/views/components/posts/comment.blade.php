@props(['comment'])

<div class="mb-2 flex bg-white rounded-lg border shadow-md md:flex-row dark:border-gray-700 dark:bg-gray-800">
    <img class="object-cover h-20 w-20 rounded-lg md:w-20 md:rounded-none md:rounded-l-lg" src="{{ asset('storage/' .$comment->author->profile_photo_path) }}" alt="">
    <div class="px-2 leading-normal w-full">
        <div class="flex justify-between text-orange-500 text-xs py-1">
            <p>{{ $comment->author->username }}</p>
            <p>{{ $comment->created_at->diffForHumans()}}</p>

        </div>
        <p class="font-normal text-gray-700 dark:text-gray-400 text-sm">{{ $comment->body }}</p>
    </div>
</div>
