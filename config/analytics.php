<?php

return  [
    'enabled' => env('ANALYTICS_ENABLED', config('app.env') === 'production'),

    'class' => App\Services\Analytics\PiwikTracker::class,

    'credentials' => [
        'api_key' => env('MATOMO_API_KEY'),
        'site_id' => env('MATOMO_SITE_ID'),
        'url' => env('MATOMO_URL'),
    ],

    'use_cookies' => false,
    'use_javascript' => false,
    'use_backend' => true,
];
