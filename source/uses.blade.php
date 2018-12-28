@extends('_layouts.master')

@section('meta')
    <meta name="description" content="{{ $page->siteDescription }}" />

    <meta property="og:title" content="{{ $page->siteName }} uses" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->siteDescription }}" />
@endsection

@section('body')
<main class="flex-grow | container mx-auto | leading-loose text-lg">
    <div class="mx-4 max-w-md lg:mx-auto">
        <h2 class="text-5xl font-normal font-title | mb-16 mt-16">
            My setup 💻️
        </h2>

        <h3 class="text-4xl font-normal font-title | mb-6">
            Hardware
        </h3>

        @include('_components.hardware')

        <h3 class="text-4xl font-normal font-title | mb-6">
            Software
        </h3>

        <p class="mb-16">
            You can find more detailled information by browsing my <a href="https://github.com/Elhebert/dotfiles" class="text-accent">dotfiles</a>.
        </p>

        @include('_components.software')
    </div>
</main>
@endsection
