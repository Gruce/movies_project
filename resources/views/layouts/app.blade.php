<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" />


        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    </head>
    <body class="font-sans antialiased ">

        <div class=" bg-black">
            @include('includes.navbar')
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="">
                @include('includes.sidebar')
            </div>
            <div class="w-full bg-gray-800">
                <div class="container mx-auto px-5 py-5">
                    @yield('content')
                    @isset($slot)
                    {{ $slot }}
                    @endisset
                </div>
            </div>

        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
