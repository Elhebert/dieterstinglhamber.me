<header class="flex justify-between items-center | my-4 mx-4 lg:mx-24 | font-serif">
    <h1 class="text-4xl">
        <a
            href="{{ $page->baseUrl }}/"
            class="no-underline text-default hover:text-accent"
        >
            D.
        </a>
    </h1>

    <nav>
        <ul class="list-reset | font-semibold text-xl | flex">
            <li>
                <a
                    href="{{ $page->baseUrl }}/about"
                    class="mr-6 {{ $page->active('about') }} hover:text-accent no-underline"
                >
                    about
                </a>
            </li>
            <li>
                <a
                    href="{{ $page->baseUrl }}/blog"
                    class="mx-6 {{ $page->active('blog') }} hover:text-accent no-underline"
                >
                    blog
                </a>
            </li>
        </ul>
    </nav>
</header>
