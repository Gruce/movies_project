<div class="sticky top-0">
    @livewire('ui.search')
    @if (Request::is('series*') || Request::query('type') == 'series')
        <div class="flex flex-col">
            <livewire:series.popular-series />
            @auth
                <livewire:series.favourites />
            @endauth
        </div>
    @else
        <div class="flex flex-col">
            <livewire:movies.popular-movies />
            @auth
                <livewire:movies.favourites />
            @endauth
        </div>
    @endif

</div>
