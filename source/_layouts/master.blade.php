<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/fonts.css', 'assets/build') }}">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <title>Dieter Stinglhamber</title>

        <link rel="me" href="https://dieterstinglhamber.me" type="text/html">
    </head>
    <body class="font-sans min-h-screen | flex flex-col">
        <header class="flex justify-between items-center | my-4 mx-4 lg:mx-24 | font-serif">
            <h1 class="text-purple text-4xl">D.</h1>

            <nav>
                <ul class="list-reset | font-semibold text-xl | flex">
                    <li><a href="" class="mr-6 text-purple hover:text-pink no-underline">about</a></li>
                    <li><a href="" class="mx-6 text-purple hover:text-pink no-underline">blog</a></li>
                    <li><a href="" class="ml-6 text-purple hover:text-pink no-underline">uses</a></li>
                </ul>
            </nav>
        </header>

        <main class="flex-grow | flex flex-col justify-center | container mx-auto">
            @yield('body')
        </main>

        <footer class="flex flex-col items-end | container mx-auto my-12 | text-white">
            <p class="text-white">
                You can find me there 👇
            </p>

            <div class="mt-2">
                @include('_partials.github-svg')
                @include('_partials.twitter-svg')
            </div>
        </footer>
    </body>
</html>
