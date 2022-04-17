<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
                    <div class="basis-1/6 w-1/6">
                        <x-sidebar />
                    </div>
                    <div class="basis-4/6 w-4/6">
                        <div class="px-10">
                            <div class="container py-3">
                                @isset($slot)
                                    {{ $slot }}
                                @endisset
                            </div>
                        </div>
                    </div>
                    <div class="basis-1/6 w-1/6">
                        @livewire('right-side')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
    {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

</body>

</html>
