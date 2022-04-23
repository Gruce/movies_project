@section('title', 'Favourites')

<div>
    <div class="grid grid-cols-5 gap-4 mt-8">
        @foreach ($movies  as $movie)
            <livewire:ui.movie :movie="$movie->id" :wire:key="$movie->id" />
        @endforeach

        @foreach ($episodes  as $item)
            <livewire:ui.series :episode="$item->id" :wire:key="$item->id" />
        @endforeach
    </div>
</div>
