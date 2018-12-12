@extends('_layouts.master')

@section('body')
<main class="flex-grow | container mx-auto">
    <article class="mx-4 lg:mx-auto max-w-lg">
        <header class="mb-32">
            <h2 class="text-5xl font-normal text-center text-default | mb-4 mt-16">
                {{ $page->title }}
            </h2>
            <div class="flex justify-around | text-default text-sm">
                <span>{{ date('d F Y', $page->date) }}</span>
                <span class="text-accent">#{{ $page->tag }}</span>
                <span class="hidden md:inline-block">
                    <a
                        href="{{ $page->github_repo_post }}/{{ $page->getFilename() }}.{{$page->getExtension() }}"
                        class="flex justify-center text-default hover:text-accent no-underline"
                    >
                        <span class="inline-block | w-6">
                            @include('_partials.github-svg')
                        </span>
                        Edit this post
                    </a>
                </span>
            </div>
        </header>

        <main class="text-invers text-xl leading-normal">
            @yield('content')
        </main>
    </article>
</main>
@endsection
