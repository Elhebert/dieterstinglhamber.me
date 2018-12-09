<footer class="flex flex-col items-end | container mx-auto my-12 | text-white">
    <p class="text-white">
        You can find me there 👇
    </p>

    <div class="mt-2">
        <a
            href="{{ $page->github_profile }}"
            title="Github"
            class="text-white no-underline | inline-block w-8"
        >
            @include('_partials.github-svg')
        </a>
        <a
            href="{{ $page->twitter_profile }}"
            title="Twitter"
            class="text-twitter no-underline | inline-block w-8"
        >
            @include('_partials.twitter-svg')
        </a>
    </div>
</footer>
