<div class="pt-6 pb-3">
    <div class="border-l-4 border-orange-500 pl-4 flex justify-between items-center">
        <p class="text-orange-500 font-black uppercase">Categorie&euml;n</p>
    </div>
</div>

<x-cards.default>
    <div class="p-4">
        <div class="flex flex-wrap w-full justify-start space-x-2">
            @foreach ($categories as $category)
                <x-links.transparent href="/posts/?category={{ $category->slug }}" class="text-gray-900 dark:text-white hover:text-white hover:dark:text-white border border-orange-500 hover:bg-orange-500 focus:ring-orange-500">{{ $category->name }}</x-links.transparent>
            @endforeach
        </div>
    </div>
</x-cards.default>
