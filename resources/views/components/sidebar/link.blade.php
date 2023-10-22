<a class="p-2 rounded hover:backdrop-brightness-95 flex flex-row items-center gap-2 cursor-pointer" href="{{ route($route) }}" wire:navigate.hover x-data>
    @svg($iconName(), 'w-6 h-6')
    <span x-show="sidebarOpen" x-transition>{{ $text }}</span>
</a>
