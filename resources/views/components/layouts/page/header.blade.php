@props([
'mt' => 'mt-20',
])

<header class="bg-white">
    <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
        {{--<h1 class="text-3xl font-bold leading-tight text-gray-900">
            Dashboard
        </h1>--}}

        <a href="/">
            <img class="h-24 w-28 mx-auto md:ml-0 {{ $mt }}" src="{{ asset('media/running_plumber.png') }}" alt="Running Plumber">
        </a>
    </div>
</header>
