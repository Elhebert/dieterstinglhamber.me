<?php

namespace App\Services\Analytics;

class PiwikTracker implements Tracker
{
    /** @var \PiwikTracker */
    private $piwik;

    public function __construct()
    {
        $this->piwik = new \PiwikTracker(
            config('analytics.credentials.site_id'),
            config('analytics.credentials.url')
        );

        if (!config('analytics.use_cookies')) {
            $this->piwik->disableCookieSupport();
        }

        $this->piwik->setTokenAuth(config('analytics.credentials.api_key'));
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
