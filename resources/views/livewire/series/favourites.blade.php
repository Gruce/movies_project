<div class="w-full" wire:loading.class="opacity-50">
    <hr class="my-5" />
    <h1 class=" text-left text-gray-500 text-lg font-bold">Favourites</h1>
    <div class="flex flex-col">
        @foreach ($episodes as $item)
        <livewire:ui.small-series :episode="$item->id" :wire:key="'favourites-series-' . $item->id" />
        @endforeach
    </div>
    <x-ui.button color="error" class="mt-3 text-white block" href="{{ route('favourites') }}">
        SEE MORE
    </x-ui.button>
</div>

