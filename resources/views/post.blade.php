@extends('layouts.master')

@section('meta')
    <title>{{ $post->title }} - {{ config('about.name') }}</title>
    <meta name="description" content="{{ $post->summary }}">

    <meta property="og:url" content="{{ route('post', [$post->slug]) }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:image" content="{{ asset('media/me.jpg') }}">
    <meta property="og:description" content="{{ $post->summary }}">
    <meta property="og:site_name" content="{{ config('about.name') }}">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="{{ config('about.name') }}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elhebert">
    <meta name="twitter:creator" content="@elhebert">
    <meta name="twitter:url" content="{{ route('post', [$post->slug]) }}">
    <meta name="twitter:title" content="{{ $post->title }}">
    <meta name="twitter:description" content="{{ $post->summary }}">
    <meta name="twitter:image" content="{{ asset('media/me.jpg') }}">
@endsection

@section('content')
    @include('_partials.nav')

    <div class="xl:flex xl:flex-row xl:h-screen w-full| bg-blue-light">
        <div class="w-full xl:w-1/4 px-12 py-12 | bg-blue-light">
            @include('_partials.sidebar')
        </div>

        <main class="xl:relative | w-full xl:w-3/4 xl:px-24 py-12 h-full | xl:overflow-auto | bg-white | article">
            <div class="my-6 mx-24 | text-blue text-2xl">
                <span class="text-blue-dark text-lg font-semibold | block">
                    Written on <time>{{ $post->date->format('M d, Y') }}</time>
                </span>

                <h3 class="article-title | relative | text-blue-dark text-4xl font-bold | mb-12">
                    {{ $post->title }}
                </h3>

                {!! $post->contents !!}

                <div class="text-sm | text-center">
                    <hr class="bg-blue-light w-2/3 mx-auto mt-16 mb-6 h-2px">

                    Spotted a mistake? Noticed something to improve? Feel free to
                    <a
                        class="text-blue-dark font-bold"
                        href="https://github.com/Elhebert/dieterstinglhamber.me/blob/master/posts/{{ $post->date->format('Y-m-d') }}.{{ $post->slug }}.md">
                        edit this post on GitHub.
                    </a>
                </div>
            </div>
        </main>
    </div>
@endsection
