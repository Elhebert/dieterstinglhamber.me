<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Analytics\PiwikTracker;

class PiwikProvider extends ServiceProvider
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
        $this->app->bind('Analytics', function () {
            return new PiwikTracker();
        });
    }
}
