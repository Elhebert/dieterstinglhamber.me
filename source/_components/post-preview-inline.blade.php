<li class="mb-16">
    <span class="text-sm text-invers | block">
        Written in #{{ $post->tag }} <time>{{ $post->getDate()->format('M d, Y') }}</time>
    </span>

    <h3 class="text-2xl font-normal">{{ $post->title }}</h3>

    <p class="mt-6 text-lg leading-normal">{{ $post->excerpt() }}</p>

    <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="text-sm text-accent no-underline hover:underline | block | mt-6"
    >
        read more...
    </a>
</li>
