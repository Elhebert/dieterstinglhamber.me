<?php

use Illuminate\Support\Carbon;

$age = Carbon::now()->diffInYears(Carbon::parse('1992-10-26'));

return [
    'name' => 'Dieter Stinglhamber',
    'job' => 'Back-end Developer',
    'short_description' => "I'm a {$age} years old nerd, passionate by web development, RPG's, fantasy books, Belgian beers and computers.",
    'short_skills' => 'I write in JavaScript, PHP, HTML and CSS. I can talk to databases and make servers do stuff.',
];
