<div class="flex flex-col gap-3 z-10 bg-stone-100/50 backdrop-blur border-r p-5 h-screen transition" :class="{'absolute shadow-lg': sidebarOpen}" x-on:mouseenter="sidebarOpen = true" x-on:mouseleave="sidebarOpen = false" x-data>
    <a class="cursor-pointer font-black text-lg block px-2" href="{{ route('home') }}">
        A<span x-show="sidebarOpen" x-transition>LEKS</span><span x-show="sidebarOpen"> </span>R<span x-show="sidebarOpen" x-transition>ŪTIŅŠ</span>
    </a>
    @foreach ($links as $link)
        <x-sidebar.link :text="$link['text']" :route="$link['route']" :icon="$link['icon']"></x-sidebar.link>
    @endforeach
</div>
