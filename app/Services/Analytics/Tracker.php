<?php

namespace App\Services\Analytics;

interface Tracker
{
    public function pageView(string $title);
}
