<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{ $title ?? config('about.name') }}</title>

<meta name="description" content="{{ $description ?? config('about.short_description') }}">

<link rel="me" href="https://dieterstinglhamber.me" type="text/html">
<link rel="me" href="mailto:dieter.stinglhamber@gmail.com">

@if (app()->env === 'production')
    <base href="https://dieterstinglhamber.me">
    <link rel="index" href="https://dieterstinglhamber.me">

    @include('feed::links')
@endif
