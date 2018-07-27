<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@elhebert">
<meta name="twitter:creator" content="@elhebert">
<meta name="twitter:url" content="{{ Request::url() }}">
<meta name="twitter:title" content="{{ $ogtitle ?? $title ?? config('about.name') }}">
<meta name="twitter:description" content="{{ $ogdescription ?? $description ?? config('about.short_description') }}">
<meta name="twitter:image" content="{{ asset('media/me.jpg') }}">
