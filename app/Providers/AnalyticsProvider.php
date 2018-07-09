<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AnalyticsProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot()
    {
    }

    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind('Analytics', function ($app) {
            return new $app['config']['analytics']['class']();
        });
    }
}
