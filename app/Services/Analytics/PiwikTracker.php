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
        $this->piwik->disableCookieSupport();
        $this->piwik->setTokenAuth(config('services.matomo.api_key'));
    }

    public function pageView(string $title)
    {
        $this->piwik->doTrackPageView($title);
    }
}
