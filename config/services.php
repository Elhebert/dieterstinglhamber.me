<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'matomo' => [
        'api_key' => env('MATOMO_API_KEY'),
        'site_id' => env('MATOMO_SITE_ID'),
        'url' => env('MATOMO_URL'),
    ],

];
