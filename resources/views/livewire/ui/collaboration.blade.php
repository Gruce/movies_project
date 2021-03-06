<div wire:loading.class="opacity-50" href="#" class="flex p-2 mt-3 transition duration-300 ease-in-out bg-white rounded-lg hover:bg-gray-100 group">
    <img class="w-1/3 rounded-lg h-28 basis-1/3" src="{{ $collaboration->collaborationable->cover_url }}" />

    <div class="flex flex-col items-start justify-between w-2/3 px-2 basis-2/3">
        <div class="flex flex-col items-start w-full">
            <h1 class="text-sm font-semibold text-left">{{ $collaboration->collaborationable->name }}</h1>
            <p class="text-gray-500 text-2xs">{{ implode(', ', $collaboration->collaborationable->genres->pluck('name')->toArray()) }}</p>
            <div class="flex mt-1">
                <span class="bg-yellow-300 text-gray-800 text-2xs mr-1 px-1 py-0.25 rounded ">IMDB</span>
                <p class="text-xs"> {{ $collaboration->collaborationable->rating }} </p>
            </div>
            <div class="flex mt-1">
                <p class="text-red-400 text-2xs"> {{ $collaboration->participants->count() }} Watching Now!</p>
            </div>
        </div>
        <div
            class="flex justify-between invisible w-full gap-1 opacity-0 group-hover:opacity-100 group-hover:visible group-hover:duration-300">
            <x-ui.button color="error" class="text-2xs py-0.5 px-1 grow text-white"
                href="{{ route('movie-show', ['movie' => $collaboration->collaborationable->id, 'room' => $collaboration->room]) }}">
                Watch Together
            </x-ui.button>
        </div>
    </div>
</div>
