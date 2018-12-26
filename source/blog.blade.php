@extends('_layouts.master')

@section('meta')
    <meta name="description" content="The list of blog posts for {{ $page->siteName }}" />

    <meta property="og:title" content="{{ $page->siteName }} Blog" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="The list of blog posts for {{ $page->siteName }}" />
@endsection

@section('body')
<main class="flex-grow | container mx-auto | pt-16">
    <div class="mx-4 lg:mx-auto max-w-lg">
        <h2 class="text-5xl font-normal | mb-16">Latests posts ✍</h2>

        <ul class="list-reset">
            @foreach ($posts as $post)
                @include('_components.post-preview-inline')
            @endforeach
        </ul>
    </div>
</main>
@endsection
