@extends('layouts.master', [
    'title' => "{$post->title} - " . config('about.name'),
    'ogTitle' => $post->title,
    'description' => $post->summary
])

@section('content')
    <div class="xl:flex xl:flex-row xl:h-screen w-full| bg-blue-light">
        <div class="w-full xl:w-1/4 px-12 py-12 | bg-blue-light">
            @include('_partials.sidebar')
        </div>

        <main class="xl:relative | w-full xl:w-3/4 xl:px-24 py-12 h-full | xl:overflow-auto | bg-white | article">
            <div class="my-6 mx-24 | text-blue text-2xl">
                <span class="text-blue-dark text-lg font-semibold | block">
                    Written on <time>{{ $post->date->format('M d, Y') }}</time>
                </span>

                <h3 class="article-title | relative | text-blue-dark text-4xl font-bold | mb-12">
                    {{ $post->title }}
                </h3>

                {!! $post->contents !!}

                <div class="text-sm | text-center">
                    <hr class="bg-blue-light w-2/3 mx-auto mt-16 mb-6 h-2px">

                    Spotted a mistake? Noticed something to improve? Feel free to
                    <a
                        class="text-blue-dark font-bold"
                        href="https://github.com/Elhebert/dieterstinglhamber.me/blob/master/posts/{{ $post->date->format('Y-m-d') }}.{{ $post->slug }}.md">
                        edit this post on GitHub.
                    </a>
                </div>
            </div>
        </main>
    </div>
@endsection
