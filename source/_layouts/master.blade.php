<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/assets/build/css/hljs.css">
        <link rel="stylesheet" href="{{ mix('css/fonts.css', 'assets/build') }}">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <link rel="apple-touch-icon" sizes="180x180" href="/webmanifest/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/webmanifest/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/webmanifest/favicon-16x16.png">
        <link rel="manifest" href="/webmanifest/site.webmanifest">
        <link rel="mask-icon" href="/webmanifest/safari-pinned-tab.svg" color="#2d0968">
        <meta name="msapplication-TileColor" content="#2d0968">
        <meta name="theme-color" content="#2d0968">

        @section('meta')
            <meta name="description" content="{{ $page->siteDescription }}" />

            <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}" />
            <meta property="og:type" content="website" />
            <meta property="og:url" content="{{ $page->getUrl() }}" />
            <meta property="og:description" content="{{ $page->siteDescription }}" />
        @show

        <meta name="twitter:creator" content="@elhebert">
        <meta name="twitter:site" content="@elhebert">
        <meta name="twitter:dnt" content="on">

        <meta property="og:site_name" content="{{ $page->siteName }}">

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        <script>
            if ('serviceWorker' in navigator) {
                navigator.serviceWorker.register('/service-worker.js')
            }
        </script>

        <link rel="me" href="https://dieterstinglhamber.me" type="text/html">
    </head>
    <body class="font-text min-h-screen | flex flex-col | bg-screen text-default">
        @include('_layouts._partials.header')

        @yield('body')

        @include('_layouts._partials.footer')
    </body>
</html>
