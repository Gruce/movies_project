    <aside class="basis-2/12 w-2/12 sticky top-0 border-l">
        <div class="p-10">
            <h1 class="flex items-center text-left text-gray-500 text-lg font-bold">
                Live Collaboration
                <span class="flex h-3 w-3 ml-3 relative">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                  </span>
            </h1>
            <div class="flex flex-row gap-2 mt-3">
                <img class="w-14 h-14 p-1 rounded-full ring-2 ring-red-300" src="https://i.pinimg.com/originals/47/a9/8c/47a98cd197e9e7c8eb356715300e435b.jpg" alt="Bordered avatar">
                <img class="w-14 h-14 p-1 rounded-full ring-2 ring-red-300" src="https://i.pinimg.com/originals/47/a9/8c/47a98cd197e9e7c8eb356715300e435b.jpg" alt="Bordered avatar">
                <img class="w-14 h-14 p-1 rounded-full ring-2 ring-red-300" src="https://i.pinimg.com/originals/47/a9/8c/47a98cd197e9e7c8eb356715300e435b.jpg" alt="Bordered avatar">
                <img class="w-14 h-14 p-1 rounded-full ring-2 ring-red-300" src="https://i.pinimg.com/originals/47/a9/8c/47a98cd197e9e7c8eb356715300e435b.jpg" alt="Bordered avatar">
            </div>
        </div>
        <div class="overflow-y-auto h-screen px-10">
            <div class="flex flex-col">
                @if (Request::is('series*') || Request::query('type') == 'series')
                    <livewire:series.popular-series />
                    @auth
                        <livewire:series.favourites />
                    @endauth
                @else
                    <livewire:movies.popular-movies />
                    @auth
                        <livewire:movies.favourites />
                    @endauth
                @endif
            </div>
        </div>
    </aside>
