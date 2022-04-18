<div>
    <a href="{{route('series-show', ['episode' => $episode->id])}}" class="flex relative w-40 rounded-lg">
        <div class="flex">
            <div class="absolute items-end text-sm">
                <h3 class="text-xl text-white font-semibold">E:1</h3>
                <p class="text-lg text-gray-300">24:50</p>
            </div>
            <img class="hover:opacity-25 rounded-lg overflow-hidden object-fill h-52 w-40"
                src="{{ $episode->cover->url }}" alt="Cover" />
        </div>
        <div class="absolute bottom-0 w-full flex justify-between mb-1">
            <span class="ml-1 bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded-lg dark:bg-red-200 dark:text-red-800">S:{{ $episode->season->number }}</span>

            <span class="mr-1 bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded-lg dark:bg-red-200 dark:text-red-800">E:<span>{{ $episode->number }}</span>
        </div>
    </a>
</div>
{{-- <livewire:series.episode/> --}}
