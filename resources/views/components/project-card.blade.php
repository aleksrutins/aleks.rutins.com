<x-card :title="$title" class="flex flex-col" {{ $attributes }}>
    <x-slot:after-title>
        <div class="flex flex-row gap-3 pl-3">
            @if(isset($url)) <a href={{ $url }}>@svg('heroicon-o-globe-alt', 'h-5 w-5')</a> @endif
            @if(isset($githubRepo)) <a href='{{ "https://github.com/$githubRepo" }}'>@svg('feathericon-github', 'h-5 w-5')</a> @endif
        </div>
    </x-slot>
    <div class="flex flex-1 flex-col justify-between">
        <p>
            {{ $slot }}
        </p>
        <div class="flex flex-row gap-3 mt-2">
            @foreach ($languages as $language)
                <x-language-indicator :language="$language"/>
            @endforeach
        </div>
    </div>
</x-card>
