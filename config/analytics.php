<?php

return  [
    'enabled' => env('ANALYTICS_ENABLED', config('app.env') === 'production'),

    'class' => App\Services\Analytics\PiwikTracker::class,

    'credentials' => [
        'api_key' => env('MATOMO_API_KEY'),
        'site_id' => env('MATOMO_SITE_ID'),
        'url' => env('MATOMO_URL'),
    ],

    'use_cookies' => env('ANALYTICS_COOKIES', false),
    'use_javascript' => env('ANALYTICS_JS', false),
    'use_backend' => env('ANALYTICS_BACK_END', true),
];
