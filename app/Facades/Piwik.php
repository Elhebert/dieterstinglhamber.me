<?php

namespace App\Facades;

class Piwik extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Analytics';
    }
}
