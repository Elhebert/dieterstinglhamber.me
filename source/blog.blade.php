@extends('_layouts.master')

@section('body')
<main class="flex-grow | max-w-lg mx-auto">
    <h2 class="text-5xl font-normal text-purple | mb-16 mt-16">Latests posts ✍</h2>

    <ul class="list-reset | text-white">
        @foreach ($posts as $post)
            <li class="mb-24">
                <span class="text-sm | block">
                    Written in <span class="text-pink">#{{ $post->tag }}</span> <time>{{ date('M d, Y', $post->date) }}</time>
                </span>

                <h3 class="text-3xl font-normal">{{ $post->title }}</h3>

                <p class="mt-6 text-lg leading-normal">{{ $post->summary }}</p>

                <a
                    href="{{ $post->getUrl() }}"
                    class="text-sm text-pink no-underline hover:underline | block | mt-6"
                >
                    read more...
                </a>
            </li>
        @endforeach
    </ul>
</main>
@endsection
