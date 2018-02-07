@extends('layouts.master')

@section('meta')
    <meta name="subject" content="Personal website">
    <meta name="description" content="I'm a 25 years old nerd, passionate by web development, RPG's, fantasy books, Belgian beers and computers.">

    <meta name="rating" content="General">
    <meta name="referrer" content="no-referrer">

    <link rel="me" href="https://dieterstinglhamber.me" type="text/html">
    <link rel="me" href="mailto:dieter.stinglhamber@gmail.com">

    @if (app()->env === 'production')
        <base href="https://dieterstinglhamber.me">
        <link rel="index" href="https://dieterstinglhamber.me">

        <meta
            http-equiv="Content-Security-Policy"
            content="
                upgrade-insecure-requests;
                default-src 'none';
                style-src 'self' https://fonts.googleapis.com;
                font-src https://fonts.gstatic.com data:;
                script-src 'sha256-AYNJOvmbj6Gny6hzhcy5B7TuB6jucnb9unR858g9M9U=' https://www.googletagmanager.com https://www.google-analytics.com;
                img-src 'self' https://www.google-analytics.com;"
        >
    @endif

    <meta name="robots" content="index,follow,noodp">
    <meta name="googlebot" content="index,follow">

    <meta name="google" content="nositelinkssearchbox">
    <meta name="google" content="notranslate">

    <meta property="og:url" content="https://dieterstinglhamber.me/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Dieter Stinglhamber">
    <meta property="og:image" content="{{ asset('media/me.jpg') }}">
    <meta property="og:description" content="I'm a 25 years old nerd, passionate by web development, RPG's, fantasy books, Belgian beers and computers.">
    <meta property="og:site_name" content="Dieter Stinglhamber">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="Dieter Stinglhamber">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elhebert">
    <meta name="twitter:creator" content="@elhebert">
    <meta name="twitter:url" content="https://dieterstinglhamber.me/">
    <meta name="twitter:title" content="Dieter Stinglhamber">
    <meta name="twitter:description" content="I'm a 25 years old nerd, passionate by web development, RPG's, fantasy books, Belgian beers and computers.">
    <meta name="twitter:image" content="{{ asset('media/me.jpg') }}">
@endsection

@section('content')
<div class="flex w-screen h-screen relative flex-row">
    <div class="relative overflow-hidden w-1/2 lg:flex justify-center hidden">
        <div class="a-very-handsome-fellow h-full w-full">
        </div>
    </div>
    <div class="relative p-8 lg:w-1/2 w-full h-full flex-col justify-around flex">
        <div class="mb-8">
            <h1 class="mb-8 block font-indie-flower text-5xl">Trust me, I'm a developer</h1>
            <p class="my-4 text-xl block font-mono">
                I'm a 25 years old nerd, passionate by web development, RPG's, fantasy books, Belgian beers and computers.
            </p>
            <p class="my-4 text-xl block font-mono">
                I write in JavaScript, PHP, Python, HTML and CSS. I can talk to databases and make servers do stuff.
            </p>
        </div>

        @if (count($recentPosts) > 0)
            <div>
                @each('_partials.cardPost', $recentPosts, 'post')
            </div>
        @endif

        @if(count($posts) > 0)
            <div class="text-center">
                Scroll down to see more
            </div>
        @endif
    </div>
</div>

@if(count($posts) > 0)
    <div class="w-full min-h-screen lg:w-1/2 mx-auto p-8">

        <h2 class="my-8 block font-indie-flower text-4xl">Recent writings...</h2>

        @each('_partials.cardPost', $posts, 'post')
    </div>
@endif
@endsection
