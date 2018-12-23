@extends('_layouts.master')

@section('body')
<main class="flex-grow | pt-16 lg:flex lg:flex-col lg:justify-center | container mx-auto">
    <div class="mx-4 lg:mx-auto max-w-lg">
        <h2 class="waving | text-5xl text-default mb-16 font-normal font-title">
            Hey there, <span class="inline-block | hand">👋</span><br>
            I'm Dieter, developer, human, nerd.
        </h2>

        <p class="text-invers text-2xl leading-normal lg:leading-loose | my-8">
            26 years old nerd, passionate by web development, RPG's, fantasy books, Belgian beers and computers.
        </p>

        <p class="text-invers text-2xl leading-normal lg:leading-loose | my-8">
            I write in JavaScript, PHP, HTML and CSS. I can talk to databases and make servers do stuff.
        </p>
    </div>
</main>
@endsection
