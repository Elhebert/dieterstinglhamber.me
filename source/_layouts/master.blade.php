<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/assets/build/css/hljs.css">
        <link rel="stylesheet" href="{{ mix('css/fonts.css', 'assets/build') }}">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <title>Dieter Stinglhamber</title>

        <link rel="me" href="https://dieterstinglhamber.me" type="text/html">
    </head>
    <body class="font-sans min-h-screen | flex flex-col | bg-screen text-default {{ $page->theme === 'dark' ? 'dark-mode' : '' }}">
        @include('_layouts._partials.header')

        @yield('body')

        @include('_layouts._partials.footer')

        <script type="text/javascript">
            const urlParams = new URLSearchParams(window.location.search)
            const theme = urlParams.get('theme')

            if (
                theme === 'light'
                && document.body.classList.contains('dark-mode')
            ) {
                document.body.classList.remove('dark-mode')
            }
        </script>
    </body>
</html>
