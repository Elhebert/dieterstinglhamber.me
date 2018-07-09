<?php

namespace App\Services\Analytics;

class PiwikTracker implements Tracker
{
    /** @var \PiwikTracker */
    private $piwik;

    public function __construct()
    {
        $this->piwik = new \PiwikTracker(
            config('services.matomo.site_id'),
            config('services.matomo.url')
        );

        if (!config('analytics.use_cookies')) {
            $this->piwik->disableCookieSupport();
        }

        $this->piwik->setTokenAuth(config('services.matomo.api_key'));
    }

    public function pageView(string $title)
    {
        if (config('analytics.enabled') && config('analytics.use_backend')) {
            $this->piwik->doTrackPageView($title);
        }
    }

    public function javascript(): string
    {
        if (config('analytics.enabled') && config('analytics.javascript')) {
            return view('_partials.analytics')->render();
        }

        return '';
    }
}
