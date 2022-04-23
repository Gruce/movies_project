<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/style.css') }}">

    @livewireStyles

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" />


    <!-- Scripts -->

    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</head>

<body class="font-sans antialiased bg-gray-200">
    <div class="p-6 mx-auto">
        <div class="gap-4">
            <div class="text-center bg-white rounded-lg">
                <div class="flex flex-row" x-data="{ sidebar_extended: false }">
                    {{-- Left Sidebar --}}
                    <x-sidebar />

                    {{-- Content --}}
                    <div class="basis-8/12 w-8/12 grow">
                        <div class="h-36 flex items-center p-10 border-b justify-between mb-10">
                            <span class="text-2xl text-gray-600 font-semibold">@yield('title')</span>
                            @yield('header-actions')
                            @hasSection ('disable-search')
                            @else
                                <livewire:ui.search />
                            @endif
                        </div>
                        <div class="px-10">
                            @isset($slot)
                                {{ $slot }}
                            @endisset
                        </div>
                    </div>

                    {{-- Right Sidebar --}}
                    @if (Route::is('home*') || Route::is('movies-all') || Route::is('series-all'))
                        @livewire('right-side')
                    @endif
                </div>
            </div>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
    {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

</body>

</html>
