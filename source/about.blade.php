@extends('_layouts.master')

@section('meta')
    <meta name="description" content="{{ $page->siteDescription }}" />

    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->siteDescription }}" />
@endsection

@section('body')
<main class="flex-grow | container mx-auto | leading-loose text-lg">
    <div class="mx-4 max-w-md lg:mx-auto">
        <h2 class="text-5xl font-normal font-title | mb-16 mt-16">
            About me 🧞‍♂️
        </h2>

        <h3 class="text-4xl font-normal font-title | mb-6">
            Education
        </h3>

        @include('_components.about-education')

        <h3 class="text-4xl font-normal font-title | mt-16 mb-6">
            Experience
        </h3>

        @include('_components.about-experience')

        <h3 class="text-4xl font-normal font-title | mt-16 mb-6">
            Outside of work
        </h3>

        <p class="mb-8">
            In my personal time I like to read (mostly Heroic Fantasy books), travelling, running, biking and play video games.</p>

        <p class="mb-8">
            I also enjoy table top games, my favorites so far are <em>A Ticket To Ride</em> and <em>SmallWorld</em>. I've been a Dungeon Master for <em>Le Donjon de Naheulbeuk</em> and <em>Dragon Age</em> campaigns (table top RPGs).
        </p>

        <p class="mb-8">
            In 2017 I challenged myself to run 365km during the whole year. I started seriously to run around July, and in 4 month I achieved that goal. In October 2017 I ran the <em>Brussels Half-Marathon</em> and the <em>20km des Ardennes</em>.
        </p>

        <p class="mb-8">
            In 2018 I went to walk part of the <strong class="font-semibold">Ulster Way</strong> (Nothern Ireland) for a week. I also attempted the <a class="text-default" href="{{ $page->baseUrl }}/blog/i-attempted-to-run-a-marathon">Brussels Aiport Marathon</a>.
        </p>
    </div>
</main>
@endsection
