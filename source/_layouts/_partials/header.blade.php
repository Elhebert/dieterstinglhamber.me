<header class="flex justify-between items-center | my-4 mx-4 lg:mx-24 | font-serif">
    <h1 class="text-4xl">
        <a
            href="{{ $page->baseUrl }}/"
            class="no-underline text-purple hover:text-pink"
        >
            D.
        </a>
    </h1>

    <nav>
        <ul class="list-reset | font-semibold text-xl | flex">
            <li>
                <a
                    href=""
                    class="mr-6 {{ $page->active('about') }} hover:text-pink no-underline"
                >
                    about
                </a>
            </li>
            <li>
                <a
                    href="{{ $page->baseUrl }}/blog"
                    class="mx-6 {{ $page->active('blog') }} hover:text-pink no-underline"
                >
                    blog
                </a>
            </li>
            <li>
                <a
                    href=""
                    class="ml-6 {{ $page->active('uses') }} hover:text-pink no-underline"
                >
                    uses
                </a>
            </li>
        </ul>
    </nav>
</header>
