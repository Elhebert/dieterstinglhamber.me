<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts._partials.meta')

        @include('layouts._partials.og')
        @include('layouts._partials.twitter')

        @if (app()->env === 'production')
            @include('feed::links')
        @endif

        <link rel="stylesheet" href="{{ mix('css/font.css') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/hljs.css') }}">

        <script src="{{ mix('js/app.js') }}" defer></script>

        {{ \Analytics::javascript() }}
    </head>
    <body class="font-serif">
        @include('_partials.nav')

        @yield('content')
    </body>
</html>
