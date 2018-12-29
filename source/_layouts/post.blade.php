@extends('_layouts.master')

@section('meta')
    <meta name="description" content="{{ $page->excerpt() }}" />
    <meta property="og:description" content="{{ $page->excerpt() }}" />
@endsection

@section('body')
<main class="flex-grow | container mx-auto">
    <article class="mx-4 lg:mx-auto max-w-lg">
        <header class="mb-32">
            <h2 class="font-title text-5xl font-normal text-center text-default | mb-4 mt-16">
                {{ $page->title }}
            </h2>
            <div class="flex justify-around | text-invers text-lg">
                <span>{{ date('d F Y', $page->date) }}</span>
                <span>#{{ $page->tag }}</span>
                <span class="hidden md:inline-block">
                    <a
                        href="{{ $page->github_repo_post }}/{{ $page->getFilename() }}.{{$page->getExtension() }}"
                        class="flex justify-center text-invers hover:text-accent no-underline"
                    >
                        <span class="inline-block | w-6">
                            @include('_partials.github-svg')
                        </span>
                        Edit this post
                    </a>
                </span>
            </div>
        </header>

        <main class="text-xl lg:text-2xl leading-loose max-w-md mx-auto">
            @yield('content')
        </main>
    </article>
</main>
@endsection
