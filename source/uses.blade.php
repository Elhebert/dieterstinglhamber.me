@extends('_layouts.master')

@section('meta')
    <meta name="description" content="My home setup and the software and apps I use" />

    <meta property="og:title" content="My setup" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="My home setup and the software and apps I use" />
    <meta property="og:image" content="https://res.cloudinary.com/elhebert/image/upload/c_scale,dpr_auto,f_auto,w_auto,q_auto/v1546076005/dieterstinglhamber.me/setup/setup.jpg">
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

        <figure class="w-3/4 mx-auto mb-8">
            <img src="https://res.cloudinary.com/elhebert/image/upload/c_scale,dpr_auto,f_auto,w_auto,q_auto/v1546076005/dieterstinglhamber.me/setup/setup.jpg" alt="iTerm2">
            <figcaption class="text-center text-sm text-invers -mt-2">My (messy) home setup</figcaption>
        </figure>

        @include('_components.hardware')

        <h3 class="text-4xl font-normal font-title | mb-6">
            Software
        </h3>

        <p class="mb-16">
            You can find more information by browsing my <a href="https://github.com/Elhebert/dotfiles" class="text-accent">dotfiles</a>.
        </p>

        @include('_components.software')
    </div>
</main>
@endsection
