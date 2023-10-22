@extends('layouts.site')

@section('content')
<div class="max-w-6xl p-6 mx-auto">
    <h1 class="text-6xl font-black pb-10"><span class="wave">👋</span> I'm <span class="text-green-500">Aleks Rūtiņš</span>.</h1>
    <h2 class="text-2xl font-bold">
        I'm a full-stack developer skilled with the
        <x-link href="https://tallstack.dev">
            <span x-data="{hovering: false}" @mouseover="hovering = true" @mouseout="hovering = false" :class="{'[word-spacing:-0.3em] mr-2': !hovering}">
                <span class="text-sky-500">T</span><span x-show="hovering" x-transition><span class="text-sky-500">ailwind</span>, </span>
                <span class="text-cyan-700">A</span><span x-show="hovering" x-transition><span class="text-cyan-700">lpine.js</span>, </span>
                <span class="text-red-500">L</span><span x-show="hovering" x-transition><span class="text-red-500">aravel</span> & </span>
                <span class="text-pink-500">L</span><span x-show="hovering" class="text-pink-500" x-transition>ivewire</span>
            </span>
            stack
        </x-link>,
        <x-link href="https://nextjs.org" color="hover:text-blue-500">Next.js</x-link>,
        <x-link href="https://nuxt.com">Nuxt</x-link>,
        <span class="hover:text-yellow-500 transition">JavaScript</span>,
        <span class="hover:text-orange-500 transition">HTML</span>,
        and <span class="hover:text-sky-500 transition">CSS</span>,
        as well as native & low-level programming with
        <x-link href="https://swift.org" color="hover:text-orange-500">Swift</x-link>,
        <x-link href="https://rust-lang.org" color="hover:text-red-500">Rust</x-link>,
        <x-link href="https://go.dev" color="hover:text-blue-500">Go</x-link>,
        <span class="hover:text-gray-700 transition">C</span>,
        and similar technologies.
    </h2>
</div>
@endsection
