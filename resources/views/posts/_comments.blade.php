<div class="max-w-7xl mx-auto px-4 pt-6 pb-3">
    <div class="border-l-4 border-orange-500 pl-4 flex justify-between items-center">
        <p class="text-orange-500 font-black uppercase">{{ $post->comments->count() }} COMMENTS</p>
    </div>
</div>
<x-cards.default class="p-4 sm:p-6 md:p-8">
    @forelse ($post->comments->reverse() as $comment)
        <x-posts.comment :comment="$comment" />
    @empty
        <p class="text-gray-900 dark:text-white">
            <i class="fa-solid fa-ban text-orange-500 mr-2"></i>
            There are no comments on this blog post
        </p>
    @endforelse
    <div class="text-xl text-orange-500 font-bold py-4">Leave a comment</div>
    @auth
        <form method="post" action="/posts/{{ $post->slug }}/comments" class="space-y-4 pb-5">
            @csrf
            <header class="flex items-center">
                <img class="h-10 w-10 rounded-full" src="{{ asset('storage/' . current_user()->profile_photo_path) }}" alt="Avatar">
                <h2 class="ml-3 text-gray-900 dark:text-white">Want to participate</h2>
            </header>
            <div>
                <x-jet-label for="body" value="Comment" />
                <x-form.textarea name="body" id="body" rows="3" placeholder="Write your comment" required />
                <x-jet-input-error for="body" class="mt-2" />
            </div>

            <div class="flex justify-end">
                <x-buttons.default class="rounded-lg">Post</x-buttons.default>
            </div>
        </form>
    @else
        <x-links.default href="/login" class="pb-10 text-gray-900 dark:text-white hover:text-orange-500 dark:hover:text-orange-500">Login to leave a comment</x-links.default>
    @endauth
</x-cards.default>
