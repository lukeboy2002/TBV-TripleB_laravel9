<x-dropdowns.default>
    <x-slot name="trigger">

        <button type="button" class="w-32 flex justify-between text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-500 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
            <i class="fa-solid fa-caret-down"></i>
            {{--            <x-icons.icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>--}}
        </button>
    </x-slot>

    <x-links.btn-default class="block"
        href="/posts/?{{ http_build_query(request()->except('category', 'page')) }}"
{{--        :active="request()->routeIs('blog')"--}}
                :active="request()->routeIs('blog') && is_null(request()->getQueryString())"
    >
        All
    </x-links.dropdown-item>

    @foreach ($categories as $category)
        <x-links.btn-default class="block"
            href="posts/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active='request()->fullUrlIs("*?category={$category->slug}*")'
        >{{ ucwords($category->name) }}
        </x-links.btn-default>
    @endforeach
</x-dropdowns.default>
