<div class="hover:bg-black rounded-lg h-48 w-36">
    <a href="{{route('series-show', ['episode' => $episode->id])}}" class="flex relative w-40 rounded-lg">
        <div>
            <img class="hover:opacity-50 rounded-lg overflow-hidden object-fill h-48 w-36"
                src="{{ $episode->cover->url }}" alt="Cover"/>
        </div>
        <div class="absolute bottom-0 w-36 flex justify-between mb-1">
            <span class="ml-1 bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded-lg">S:{{ $episode->season->number }}</span>

            <span class="mr-1 bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded-lg">E:<span>{{ $episode->number }}</span>
        </div>
    </a>
</div>
{{-- use -> <livewire:series.episode/> --}}
