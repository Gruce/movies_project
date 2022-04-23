<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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

    <div class="container mx-auto">
        <div class="my-4 gap-4 ">
            <div class="p-6 text-center bg-white rounded-lg border border-gray-200">
                <div class="flex flex-row">
                    @if (!Route::is('*show*'))
                        <div class="basis-1/6 w-1/6">
                            <x-sidebar />
                        </div>
                    @else
                        <a  href="{{url()->previous()}}" class="absolute flex items-center p-2 text-base text-gray text-red-700 rounded-lg">
                            <i class="fa-solid fa-cannabis fa-2x"></i>
                            <span class="ml-3 font-bold">Watch Together</span>
                        </a>
                    @endif
                    <div class="basis-4/6 w-4/6 grow">
                        <div class="px-10">
                            <div class="container py-3">
                                @isset($slot)
                                    {{ $slot }}
                                @endisset
                            </div>
                        </div>
                    </div>
                    @if (Route::is('home*') || Route::is('movies-all') || Route::is('series-all'))
                        <div class="basis-1/6 w-1/6">
                            @livewire('right-side')
                        </div>
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
