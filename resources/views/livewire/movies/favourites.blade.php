<div class="w-full">
    <hr class="my-5" />
    <h1 class=" text-left text-gray-500 text-lg font-bold">Favourites</h1>
    <div class="flex flex-col">
        @foreach ($movies as $movie)
            <livewire:ui.small-movie :movie="$movie->id" />
        @endforeach
    </div>
    <x-ui.button color="error" class="mt-3 text-white block" href="{{ route('favourites') }}">
        SEE MORE
    </x-ui.button>
</div>
