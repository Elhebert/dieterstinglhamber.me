<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/assets/build/css/hljs.css">
        {{-- <link rel="stylesheet" href="{{ mix('css/fonts.css', 'assets/build') }}"> --}}

        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <title>Dieter Stinglhamber</title>

        <link rel="me" href="https://dieterstinglhamber.me" type="text/html">
    </head>
    <body class="font-text min-h-screen | flex flex-col | bg-screen text-default">
        @include('_layouts._partials.header')

        @yield('body')

        @include('_layouts._partials.footer')
    </body>
</html>
