@extends('layouts.master', [
    'title' => config('about.name'),
    'description' => config('about.short_description')
])

@section('content')
    <div class="xl:flex xl:flex-row xl:h-screen w-full| bg-blue-light">
        <div class="w-full xl:w-1/2 xl:px-24 py-8 xl:py-12">
            @include('_partials.sidebar')
        </div>

        <main class="xl:relative flex flex-col justify-center | h-full w-full xl:w-1/2 px-12 xl:px-24 py-12 | bg-white">
            <div class="flex-grow | flex flex-col justify-center">
                @foreach($posts as $post)
                    {{ $post }}
                @endforeach
            </div>

            @include('_partials.pagination', ['elements' => $posts])
        </main>
    </div>
@endsection
