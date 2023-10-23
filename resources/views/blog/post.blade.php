@php use App\Services\Util; @endphp
@extends('layouts.site')

@section('content')
<div class="max-w-6xl p-6 mx-auto">
    <h1 class="text-6xl font-black pb-2">{{ $post->title }}</h1>
    <p class="pb-10">
        <img class="rounded-full w-4 h-4 inline align-middle" src="{{ Util::getGravatarURL($post->author_email) }}">
        <span class="align-middle">{{ $post->author_email }} • <time datetime="{{ $post->created_at }}">{{ $post->created_at->toDateString() }}</time></span>
    </p>
    <x-markdown class="prose">
        {{ $post->content }}
    </x-markdown>
</div>
@endsection
