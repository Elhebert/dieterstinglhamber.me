<?php

namespace App\Facades;

class Analytics extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Analytics';
    }
}
