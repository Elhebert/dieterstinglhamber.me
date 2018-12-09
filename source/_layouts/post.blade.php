@extends('_layouts.master')

@section('body')
<main class="flex-grow | max-w-lg mx-auto">
    <article>
        <header class="mb-32">
            <h2 class="text-5xl font-normal text-center text-purple | mb-4 mt-16">
                {{ $page->title }}
            </h2>
            <div class="flex justify-around | text-purple text-sm">
                <span>{{ date('d F Y', $page->date) }}</span>
                <span class="text-pink">#{{ $page->tag }}</span>
                <span>
                    <a
                        href="{{ $page->github_repo_post }}/{{ $page->getFilename() }}.{{$page->getExtension() }}"
                        class="flex justify-center text-purple hover:text-pink no-underline"
                    >
                        <span class="inline-block | w-6">
                            @include('_partials.github-svg')
                        </span>
                        Edit this post
                    </a>
                </span>
            </div>
        </header>

        <main class="text-white text-xl leading-normal">
            @yield('content')
        </main>
    </article>
</main>
@endsection
