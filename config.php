<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [
        'posts' => [
            'path' => 'blog/{-title}',
            'sort' => '-date',
        ],
    ],
    'active' => function ($page, $section) {
        return str_contains($page->getPath(), $section) ? 'text-pink' : 'text-purple';
    },
    'github_repo_post' => 'https://github.com/Elhebert/dieterstinglhamber.me/blob/master/source/_posts',
    'github_profile' => 'https://github.com/Elhebert',
    'twitter_profile' => 'https://twitter.com/elhebert',
];
