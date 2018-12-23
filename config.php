<?php

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Dieter Stinglhamber',
    'siteDescription' => "I'm 26 years old nerd, passionate by web development, RPG's, fantasy books, Belgian beers and computers.",
    'siteAuthor' => 'Dieter Stinglhamber',

    'collections' => [
        'posts' => [
            'path' => 'blog/{filename}',
            'sort' => '-date',
        ],
    ],

    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'excerpt' => function ($page, $length = 255) {
        $cleaned = strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $page->getContent()),
            '<code>'
        );
        $truncated = substr($cleaned, 0, $length);
        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'active' => function ($page, $section) {
        return str_contains($page->getPath(), $section) ? 'text-accent' : 'text-default';
    },

    'github_repo_post' => 'https://github.com/Elhebert/dieterstinglhamber.me/blob/master/source/_posts',
    'github_profile' => 'https://github.com/Elhebert',
    'twitter_profile' => 'https://twitter.com/elhebert',
];
