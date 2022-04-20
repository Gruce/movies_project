<div wire:loading.class="opacity-50">
    <div class="p-3 bg-gray-100 rounded-lg">
        <div class="flex flex-row">
            <div class="basis-1/4 flex flex-col justify-center items-center w-1/4 ">
                <img class="rounded-lg h-45 basis-1/3" src="{{ $episode->cover->url }}" />
                <div class="flex items-center mt-3 justify-between w-full gap-6">
                    <x-ui.button color="error" class="text-white block grow" href="#">
                        WATCH NOW
                    </x-ui.button>
                    @auth
                        <div class="flex justify-center">
                            <x-ui.icon-button wire:click="like(true)" icon="fa-solid fa-thumbs-up" :color="$episode->liked(true) ? 'error' : 'secondary'"
                                class="w-8 h-8 text-xl" />

                            <x-ui.icon-button wire:click="like(false)" icon="fa-solid fa-thumbs-down" :color="$episode->liked(false) ? 'error' : 'secondary'"
                                class="w-8 h-8 text-xl" />
                        </div>
                    @endauth
                </div>
            </div>
            <div class="basis-3/4 w-3/4">
                <div class="flex flex-col gap-2 p-5">
                    <div class="mt-5 text-left font-semibold flex justify-between ">
                        <div class="flex flex-col">
                            <span class="text-xl">{{ $episode->season->series->name }}</span>
                            <span class="text-gray-500">{{$episode->season->name}} - {{$episode->name}} ({{ $episode->number }})</span>
                        </div>
                        <div class="flex gap-5 items-center">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-thumbs-up"></i>
                                <span class="text-sm">{{ $episode->likes_count }}</span>
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="text-sm">{{ $episode->dislikes_count }}</span>
                            </div>
                            <livewire:ui.rating :rating="$episode->season->series->rating" />
                        </div>
                    </div>
                    <div class="flex-row justify-around text-left ">
                        {{ implode(', ', $episode->season->series->genres->pluck('name')->toArray()) }}
                    </div>
                    <div class="text-left mt-5">
                        <span>
                            {{ $episode->season->series->description }}
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>






    <div class="mb-4 border-b border-gray-200">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#episodeContent"
            role="tablist">
            <div class="flex overflow-y-hidden flex-nowrap pb-2 rounded-lg">
                @forelse ($seasons as $season)
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg border-b-2 border-red-600 text-red-600 hover:text-red-700 "
                            id="season-{{ $season->id }}-tab" data-tabs-target="#season-{{ $season->id }}"
                            type="button" role="tab" aria-controls="season-{{ $season->id }}"
                            aria-selected="true">{{ $season->name }}</button>
                    </li>
                @empty
                    <div class="text-center text-gray-500">
                        <span class="text-xl">No Seasons</span>
                    </div>
                @endforelse
            </div>
        </ul>
    </div>


    <div id="episodeContent">
        @forelse ($seasons as $season)
            <div class="@if ($season->id !== $season_id) hidden @else flex @endif overflow-y-hidden flex-nowrap pb-2 p-4 bg-gray-50 rounded-lg dark:bg-gray-800 gap-2"
                id="season-{{ $season->id }}" role="tabpanel" aria-labelledby="season-{{ $season->id }}-tab">
                @forelse ($season->episodes as $episode)
                    <livewire:series.episode :episode="$episode->id" :wire:key="'episode' . $episode->id" />
                @empty
                    <div class="text-center text-gray-500">
                        <span class="text-xl">No Episodes</span>
                    </div>
                @endforelse
            </div>
        @empty
            <div class="text-center text-gray-500">
                <span class="text-xl">No Seasons</span>
            </div>
        @endforelse
    </div>





    <div>
        {{-- @livewire('movies.similar') --}}
    </div>
</div>
