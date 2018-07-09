@extends('layouts.master')

@section('meta')
    <title>{{ config('about.name') }}</title>
    <meta name="description" content="{{ config('about.short_description', ['age' => $age]) }}">

    <meta property="og:url" content="https://dieterstinglhamber.me/">

    <meta property="og:title" content="{{ config('about.name') }}">
    <meta property="og:image" content="{{ asset('media/me.jpg') }}">
    <meta property="og:description" content="{{ config('about.short_description', ['age' => $age]) }}">
    <meta property="og:site_name" content="{{ config('about.name') }}">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="{{ config('about.name') }}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elhebert">
    <meta name="twitter:creator" content="@elhebert">
    <meta name="twitter:url" content="https://dieterstinglhamber.me/">
    <meta name="twitter:title" content="{{ config('about.name') }}">
    <meta name="twitter:description" content="{{ config('about.short_description', ['age' => $age]) }}">
    <meta name="twitter:image" content="{{ asset('media/me.jpg') }}">
@endsection

@section('content')
    @include('_partials.nav')

    <div class="xl:flex xl:flex-row xl:h-screen w-full| bg-blue-light">
        <div class="w-full xl:w-1/2 xl:px-24 py-8 xl:py-12">
            @include('_partials.sidebar')
        </div>

        <main class="xl:relative flex flex-col justify-center | h-full w-full xl:w-1/2 px-12 xl:px-24 py-12 | bg-white">
            <div class="flex-grow | flex flex-col justify-center">
                @foreach($posts as $post)
                    {{ $post }}
                @endforeach
            </div>

            @include('_partials.pagination', ['elements' => $posts])
        </main>
    </div>
@endsection
