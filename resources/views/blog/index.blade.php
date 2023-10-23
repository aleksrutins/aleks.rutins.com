@php use App\Services\Util; @endphp
@extends('layouts.site')

@section('content')
<div class="max-w-6xl p-6 mx-auto">
    <h1 class="text-6xl font-black pb-10">Blog</h1>
    <div class="flex flex-row flex-wrap">
        @foreach ($posts as $post)
            <a class="block border shadow-md hover:shadow-lg transition cursor-pointer p-6 rounded-lg max-w-md" href="{{ route('post', $post->slug) }}">
                <h2 class="text-2xl font-black">{{ $post->title }}</h2>
                <p class="py-2">
                    <img class="rounded-full w-4 h-4 inline align-middle" src="{{ Util::getGravatarURL($post->author_email) }}">
                    <span class="align-middle">{{ $post->author_email }} • <time datetime="{{ $post->created_at }}">{{ $post->created_at->toDateString() }}</time></span>
                </p>
                <p class="prose">
                    {{ $post->snippet }}
                </p>
            </a>
        @endforeach
    </div>
</div>
@endsection
