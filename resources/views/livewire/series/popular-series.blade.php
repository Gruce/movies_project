<div>
    <h1 class="text-left text-gray-500 text-lg font-bold"> Popular Series</h1>
    <div class="flex flex-col">
        @foreach ($series as $item)
            <livewire:ui.small-series :episode="$item->first_season->first_episode->id" />
        @endforeach
    </div>
    <x-ui.button color="error" class="mt-3 text-white block" href="#">
        SEE MORE
    </x-ui.button>
</div>