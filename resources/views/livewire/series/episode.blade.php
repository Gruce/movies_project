<div class="mr-2 bg-black rounded-lg h-44 w-32 hover:scale-105 duration-300">
    <a href="{{route('series-show', ['episode' => $episode->id])}}" class="flex relative w-32 rounded-lg">
        <div class="border-2 border-gray-600 hover:border-red-600 rounded-lg">
            <img class="opacity-90 shadow-md hover:shadow-2xl hover:opacity-100 rounded-lg overflow-hidden object-fill h-44 w-32"
                src="{{ $episode->cover->url }}" alt="Cover"/>
        </div>
        <div class="absolute bottom-0 w-32 flex justify-between mb-1">
            <span class="ml-1 opacity-80 bg-red-100 text-slate-800 text-xs font-semibold px-2.5 py-0.5 rounded-lg">S:{{ $episode->season->number }}</span>

            <span class="mr-1 opacity-75 bg-red-100 text-slate-600 text-xs font-semibold px-2.5 py-0.5 rounded-lg">E:<span>{{ $episode->number }}</span>
        </div>
    </a>
</div>
{{-- add space between  --}}
