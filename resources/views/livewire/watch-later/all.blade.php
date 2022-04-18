<div x-data>
    <div class="flex justify-between mt-10 mb-5">
        <div class="font-bold text-lg text-gray-500">
            <span>Watch Later</span>
        </div>
    </div>

    <div class="flex overflow-x-hidden overflow-y-hidden flex-nowrap" x-ref="slider">
        @foreach ($movies  as $movie)
            <div x-ref="slide_item" class="mr-5">
                <livewire:ui.movie :movie="$movie->id" :wire:key="$movie->id" />

            </div>
        @endforeach

        @foreach ($episodes  as $item)
            <div x-ref="slide_item" class="mr-5">
                <livewire:ui.series :episode="$item->id" :wire:key="$item->id" />

            </div>
        @endforeach
    </div>
</div>
