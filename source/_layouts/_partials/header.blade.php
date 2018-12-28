<header class="flex justify-between items-center | my-4 mx-4 lg:mx-24">
    <h1 class="text-4xl font-bold">
        <a
            title="Home"
            href="{{ $page->baseUrl }}/"
            class="no-underline text-invers hover:text-accent"
        >
            D.
        </a>
    </h1>

    <nav>
        <ul class="list-reset | font-bold text-xl | flex">
            <li>
                <a
                    href="{{ $page->baseUrl }}/about/"
                    class="mr-6 {{ $page->active('about') }} hover:text-accent no-underline"
                >
                    about
                </a>
            </li>
            <li>
                <a
                    href="{{ $page->baseUrl }}/blog/"
                    class="mx-6 {{ $page->active('blog') }} hover:text-accent no-underline"
                >
                    blog
                </a>
            </li>
            <li>
                <a
                    href="{{ $page->baseUrl }}/uses/"
                    class="mx-6 {{ $page->active('uses') }} hover:text-accent no-underline"
                >
                    uses
                </a>
            </li>
        </ul>
    </nav>
</header>
