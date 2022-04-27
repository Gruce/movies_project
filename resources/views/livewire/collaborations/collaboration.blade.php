@section('title', 'Collaboration rooms')

<div>
    {{-- <div :class="sidebar_extended ? 'grid-cols-6' : 'grid-cols-7'" class="grid gap-4 mt-8">
        @foreach ($movies  as $movie)
            <livewire:ui.movie :movie="$movie->id" :wire:key="$movie->id" />
        @endforeach

        @foreach ($episodes  as $item)
            <livewire:ui.series :episode="$item->id" :wire:key="$item->id" />
        @endforeach
    </div> --}}

    <livewire:ui.collaboration />
</div>
