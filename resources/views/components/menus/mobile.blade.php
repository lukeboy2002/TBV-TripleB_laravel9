<x-links.btn-default class="block uppercase" href="/" :active="request()->routeIs('home')">Home</x-links.btn-default>
<x-links.btn-default class="block uppercase" href="/team" :active="request()->routeIs('team')">Team</x-links.btn-default>
<x-links.btn-default class="block uppercase" href="/posts" :active="request()->routeIs('post*')">Blog</x-links.btn-default>
<x-links.btn-default class="block uppercase" href="/fotos" :active="request()->routeIs('foto*')">Album</x-links.btn-default>
<x-links.btn-default class="block uppercase" href="/calender" :active="request()->routeIs('calender*')">Calender</x-links.btn-default>
