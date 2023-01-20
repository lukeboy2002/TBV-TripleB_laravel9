<x-links.btn-default href="/" :active="request()->routeIs('home')" class="rounded-lg uppercase">Home</x-links.btn-default>
<x-links.btn-default href="/team" :active="request()->routeIs('team')" class="rounded-lg uppercase">Team</x-links.btn-default>
<x-links.btn-default href="/posts" :active="request()->routeIs('post*')" class="rounded-lg uppercase">Blog</x-links.btn-default>
<x-links.btn-default href="/fotos" :active="request()->routeIs('foto*')" class="rounded-lg uppercase">Album</x-links.btn-default>
<x-links.btn-default href="/calender" :active="request()->routeIs('calender*')" class="rounded-lg uppercase">Calender</x-links.btn-default>
