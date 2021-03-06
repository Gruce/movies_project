@section('header-actions')
    <x-navbar />
@endsection

@section('title', 'Home')

<div>
    <div class="flex flex-col">
        <div id="animation-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative h-48 rounded-lg sm:h-64 xl:h-80 2xl:h-96">

                @if ($type == 'movies')
                    @forelse ($last_movies as $item)
                        <div class="snap-start group w-full h-full flex items-center  justify-center  text-white  font-bold flex-shrink-0 bg-black"
                            data-carousel-item>
                            <div
                                class="w-full h-full  z-20 opacity-100 absolute bg-gradient-to-bl  to-gray-800 from-transparent rounded-lg group-hover:to-gray-900 group-hover:duration-300">
                            </div>
                            <img src="{{ $item->slider_url }}"
                                class="h-full w-full object-cover relative inset-0 z-10 opacity-80 transition duration-300 group-hover:opacity-100">

                            <x-ui.button class="absolute z-20 bottom-10 right-20"
                                href="{{ route('movie-show', ['movie' => $item->id]) }}" color="error">Watch Now!
                            </x-ui.button>
                            <div class="absolute text-left z-20 max-w-sm bottom-10 left-20">
                                <div class="text-3xl">
                                    {{ $item->name }}
                                    <span class="bg-yellow-300 h-full rounded-lg ml-5 text-black px-2 py-1 text-sm"><i
                                            class="fa-solid fa-star text-xs mr-1 "></i>{{ $item->rating }}</span>
                                </div>

                                <span class="font-normal text-xs">{{ $item->description }}</span>
                            </div>

                        </div>
                    @empty
                        No movies
                    @endforelse
                @else
                    @forelse ($last_series as $item)
                        <div class="snap-start group w-full h-full flex items-center  justify-center  text-white  font-bold flex-shrink-0 bg-black"
                            data-carousel-item>
                            <div
                                class="w-full h-full  z-20 opacity-100 absolute bg-gradient-to-bl  to-gray-800 from-transparent rounded-lg group-hover:to-gray-900 group-hover:duration-300">
                            </div>
                            <img src="{{ $item->last_season->first_episode->slider_url }}"
                                class="h-full w-full object-cover object-top relative inset-0 z-10 opacity-80 transition duration-300 group-hover:opacity-100">

                            <x-ui.button class="absolute z-20 bottom-10 right-20"
                                href="{{ route('series-show', ['episode' => $item->last_season->first_episode->id]) }}"
                                color="error">Watch Now!
                            </x-ui.button>
                            <div class="absolute text-left z-20 max-w-sm bottom-10 left-20">
                                <div class="text-3xl">
                                    {{ $item->name }}
                                    <span class="bg-yellow-300 h-full rounded-lg ml-5 text-black px-2 py-1 text-sm"><i
                                            class="fa-solid fa-star text-xs mr-1 "></i>{{ $item->rating }}</span>
                                </div>

                                <span class="font-normal text-xs">{{ $item->description }}</span>
                            </div>

                        </div>
                    @empty
                        No movies
                    @endforelse
                @endif
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button type="button"
                class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div>





        {{-- <div id="animation-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative h-48 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-200 ease-linear" data-carousel-item>
                    <img class="h-full" src="https://cnth2.shabakaty.com/cover-images/5EB2C14F-B5BC-7855-1D82-C665128E6811_cover.jpg"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-200 ease-linear" data-carousel-item>
                    <img class="h-full" src="https://cnth2.shabakaty.com/cover-images/710BA908-B35F-F422-9324-CF9628A10739_cover.jpg"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                    <img class="h-full" src="https://cnth2.shabakaty.com/cover-images/FD6F3C97-03B6-7D5B-50CA-9ADDA1A79E15_cover.jpg"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
            </div>


            <!-- Slider controls -->
            <button type="button"
                        class="flex absolute top-4 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        </button>
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button type="button"
                class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div> --}}

        @if ($type == 'movies')
            <div>
                @livewire('home.best-movies')
            </div>
        @else
            <div>
                @livewire('home.best-series')
            </div>
        @endif
    </div>

</div>
