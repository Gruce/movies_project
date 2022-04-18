<div href="#" class="bg-white rounded-lg p-2 flex mt-3 hover:bg-gray-100 group transition ease-in-out duration-300">
    <img class="rounded-lg h-28 basis-1/3 w-1/3" src="{{ $episode->cover->url }}" />

    <div class="px-2 flex flex-col items-start justify-between basis-2/3 w-2/3">
        <div class="flex flex-col items-start">
            <h1 class="font-semibold text-left text-sm">{{ $episode->season->series->name }}</h1>
            <p class="text-2xs text-gray-500 text-left">
                {{ implode(', ', $episode->season->series->genres->pluck('name')->toArray()) }}</p>
            <div class="flex mt-1">
                <span class="bg-yellow-300 text-gray-800 text-2xs mr-1 px-1 py-0.25 rounded ">IMDB</span>
                <p class="text-xs"> {{ $episode->season->series->rating }} </p>
            </div>
        </div>
        {{-- <div class="flex mt-1">
            <span class="bg-gray-100 text-gray-700 text-2xs mr-1 px-1 py-0.25 rounded ">Season</span>
            <p class="text-xs"> {{ $episode->season->number }} </p>
        </div> --}}
        <div
            class="flex justify-between gap-1 invisible opacity-0 group-hover:opacity-100 group-hover:visible group-hover:duration-300">
            <x-ui.button color="error" class="text-2xs py-0.5 px-1 text-white"
                href="{{ route('series-show', ['episode' => $episode->id]) }}">
                Watch
            </x-ui.button>
            <x-ui.button color="secondary" class="text-2xs py-0.5 px-1 text-white" href="#">
                <i class="fa-solid fa-clock"></i>
            </x-ui.button>
        </div>
    </div>
</div>
