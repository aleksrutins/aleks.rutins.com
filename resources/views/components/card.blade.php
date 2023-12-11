@props(['title', 'href'])

<{{ isset($href) ? "a href=$href" : 'div' }} {{ $attributes->merge(['class' => 'block border shadow-md hover:shadow-lg transition p-6 rounded-lg max-w-md']) }}>
    <div class="flex flex-row items-center">
        <h2 class="text-2xl font-black">{{ $title }}</h2>
        {{ isset($afterTitle) ? $afterTitle : '' }}
    </div>
    {{ $slot }}
</{{ isset($href) ? 'a' : 'div' }}>
