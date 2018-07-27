<meta property="og:url" content="{{ Request::url() }}">

<meta property="og:title" content="{{ $ogtitle ?? $title ?? config('about.name') }}">
<meta property="og:image" content="{{ asset('media/me.jpg') }}">
<meta property="og:description" content="{{ $ogDescirption ?? $title ?? config('about.short_description') }}">
<meta property="og:site_name" content="{{ config('about.name') }}">
<meta property="og:locale" content="en_US">
<meta property="article:author" content="{{ config('about.name') }}">
