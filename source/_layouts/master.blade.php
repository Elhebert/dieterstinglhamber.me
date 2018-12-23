<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/assets/build/css/hljs.css">
        <link rel="stylesheet" href="{{ mix('css/fonts.css', 'assets/build') }}">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        @section('meta')
            <meta property="description" content="{{ $page->siteDescription }}" />

            <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}" />
            <meta property="og:type" content="website" />
            <meta property="og:url" content="{{ $page->getUrl() }}" />
            <meta property="og:description" content="{{ $page->siteDescription }}" />
        @show

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        <link rel="me" href="https://dieterstinglhamber.me" type="text/html">
    </head>
    <body class="font-text min-h-screen | flex flex-col | bg-screen text-default">
        @include('_layouts._partials.header')

        @yield('body')

        @include('_layouts._partials.footer')
    </body>
</html>
