<div class="flex flex-col gap-3 z-10 bg-stone-100/75 backdrop-blur border p-5 h-[calc(100vh-0.5rem)] fixed transition-all shadow-sm rounded-lg mt-1 ml-1" :class="{'shadow-lg mt-2 ml-2 h-[calc(100vh-1.35rem)]': sidebarOpen}" x-on:mouseenter="sidebarOpen = true" x-on:mouseleave="sidebarOpen = false" x-data>
    <a class="cursor-pointer font-black text-lg block text-center self-center" href="{{ route('home') }}">
        A<span x-show="sidebarOpen" x-transition>LEKS</span><span x-show="sidebarOpen"> </span>R<span x-show="sidebarOpen" x-transition>ŪTIŅŠ</span>
    </a>
    @foreach ($links as $link)
        <x-sidebar.link :text="$link['text']" :route="$link['route']" :icon="$link['icon']"></x-sidebar.link>
    @endforeach
</div>
