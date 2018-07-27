<img
    srcset="
        {{ asset('media/me_2296_1530.jpg') }} 2296w,
        {{ asset('media/me_1920_1279.jpg') }} 1920w,
        {{ asset('media/me_1607_1071.jpg') }} 1607w,
        {{ asset('media/me_1344_895.jpg') }} 1344w,
        {{ asset('media/me_1125_749.jpg') }} 1125w,
        {{ asset('media/me_941_627.jpg') }} 941w,
        {{ asset('media/me_787_524.jpg') }} 787w,
        {{ asset('media/me_658_438.jpg') }} 658w,
        {{ asset('media/me_551_367.jpg') }} 551w,
        {{ asset('media/me_461_307.jpg') }} 461w,
        {{ asset('media/me_385_256.jpg') }} 385w,
        {{ asset('media/me_322_214.jpg') }} 322w"
    sizes="
    @if (request()->routeIs('home') || request()->routeIs('about'))
        (min-width: 4592px) 2296px,
        (min-width: 3840px) 1920px,
        (min-width: 3214px) 1607px,
        (min-width: 2688px) 1344px,
        (min-width: 2250px) 1125px,
        (min-width: 1882px) 941px,
        (min-width: 1102px) 551px,
        (min-width: 922px) 461px,
        (min-width: 770px) 385px,
        322px
    @else
        (min-width: 4592px) 1148px,
        (min-width: 3840px) 760px,
        (min-width: 3214px) 803px,
        (min-width: 2688px) 672px,
        (min-width: 2250px) 562px,
        (min-width: 1882px) 470px,
        (min-width: 1102px) 275px,
        (min-width: 922px) 230px,
        (min-width: 770px) 192px,
        322px
    @endif
    "
    src="{{ asset('media/me_322_214.jpg') }}"
    width="3280"
    alt="{{ config('about.name') }}"
    @if (request()->routeIs('home') || request()->routeIs('post'))
        class="hidden xl:block"
    @endif
>

<div class="text-center | mt-2 mb-4 xl:mb-8">
    <h1
        @if (request()->routeIs('post'))
            class="text-blue-dark font-bold text-4xl"
        @else
            class="text-blue-dark font-bold text-3xl md:text-4xl lg:text-5xl xl:text-6xl"
        @endif
    >
        {{ config('about.name') }}
    </h1>
    <h2
        @if (request()->routeIs('post'))
            class="text-blue-dark font-normal text-3xl"
        @else
            class="text-blue-dark font-normal text-2xl md:text-3xl lg:text-4xl xl:text-4xl"
        @endif
    >
        {{ config('about.job') }}
    </h2>

    @include('_partials.social')
</div>

<p
    @if (request()->routeIs('home') || request()->routeIs('post'))
        class="text-blue text-2xl | pb-8 | hidden xl:block"
    @else
        class="text-blue text-2xl xl:text-3xl | mb-8"
    @endif
>
    {{ config('about.short_description') }}
</p>

<p
    @if (request()->routeIs('home') || request()->routeIs('post'))
        class="text-blue text-2xl | hidden xl:block"
    @else
        class="text-blue text-2xl xl:text-3xl | mb-24"
    @endif
>
    {{ config('about.short_skills') }}
</p>
