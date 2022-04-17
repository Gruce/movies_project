<div>
    <div class="sticky mx-3 top-0 z-30">
        <x-navbar />
    </div>
    <div class="flex flex-col">
        <div id="animation-carousel" class="relative" data-carousel="static">
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
            <div class="flex flex-col gap-2">
                <div class=" absolute top-9 left-6 bottom-0 z-30 text-white font-bold">
                    <span class="text-xl" >Name</span>
                </div>
                <div class="absolute top-16 left-6 bottom-0 z-30 text-white font-bold">
                    <span>
                        description
                    </span>
                </div>
                <div class="flex absolute top-1/4 right-6 z-30 justify-center items-center px-4 h-full cursor-pointer group rounded-lg">
                    <x-ui.button color="error">Watch Now!</x-ui.button>
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
        </div>
        
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
