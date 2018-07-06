<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutController
{
    public function index(): View
    {
        \Analytics::pageView('about');

        return view('about');
    }
}
