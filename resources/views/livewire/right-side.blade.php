<aside class="sticky top-0 w-2/12 border-l basis-2/12">
    <div class="p-10">
        <h1 class="flex items-center text-lg font-bold text-left text-gray-500">
            Live Collaboration
            <span class="relative flex w-3 h-3 ml-3">
                <span class="absolute inline-flex w-full h-full bg-red-400 rounded-full opacity-75 animate-ping"></span>
                <span class="relative inline-flex w-3 h-3 bg-red-500 rounded-full"></span>
            </span>
        </h1>
        <div class="w-full mt-3">
            @forelse ($collaborations as $collaboration)
                <livewire:ui.collaboration :collaboration="$collaboration->id" />
            @empty
                No current collaborations.
            @endforelse
        </div>
    </div>
    <div class="h-screen px-10 overflow-y-auto">
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
