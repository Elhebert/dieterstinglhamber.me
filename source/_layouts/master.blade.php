<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/assets/build/css/hljs.css">
        <link rel="stylesheet" href="{{ mix('css/fonts.css', 'assets/build') }}">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <meta name="description" content="26 years old nerd, passionate by web development, RPG's, fantasy books, Belgian beers and computers.">

        <title>Dieter Stinglhamber</title>

        <link rel="me" href="https://dieterstinglhamber.me" type="text/html">
    </head>
    <body class="font-text min-h-screen | flex flex-col | bg-screen text-default">
        @include('_layouts._partials.header')

        @yield('body')

        @include('_layouts._partials.footer')
    </body>
</html>
