<div class="sticky top-0">
    <div class="py-4">
        <label for="search" class="sr-only">Search</label>
        <div class="relative mt-1">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input type="text" id="table-search"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                placeholder="Search" />
        </div>
    </div>

    @if (Request::is('series*'))
        <div class="flex flex-col">
            <div>
                <h1 class="text-left text-gray-500 text-lg font-bold"> Popular Series</h1>
                <div class="flex flex-col">
                    <x-ui.small-cover name="Avengers" rating="10" imgUrl="/img/inv.jpg" category="Action , Drama" url="#"></x-ui.small-cover>
                </div>

                <x-ui.button color="error" class="mt-3 text-white block" href="#">
                    SEE MORE
                </x-ui.button>
            </div>
            @auth
               @livewire('series.favourites')
            @endauth
        </div>
        @else
        <div class="flex flex-col">
            <div>
                <h1 class="text-left text-gray-500 text-lg font-bold"> Popular Movies</h1>
                <div class="flex flex-col">
                    <x-ui.small-cover name="Avengers" rating="10" imgUrl="/img/inv.jpg" category="Action , Drama" url="#"></x-ui.small-cover>
                </div>

                <x-ui.button color="error" class="mt-3 text-white block" href="#">
                    SEE MORE
                </x-ui.button>
            </div>
            @auth
                @livewire('movies.favourites')
            @endauth
        </div>
    @endif

</div>
