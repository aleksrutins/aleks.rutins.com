<a class="p-2 rounded hover:bg-stone-200 flex flex-row items-center gap-2 cursor-pointer" href="{{ route($route) }}" x-data>
    @svg($iconName(), 'w-6 h-6')
    <span x-show="sidebarOpen" x-transition>{{ $text }}</span>
</a>
