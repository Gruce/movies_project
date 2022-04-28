@section('disable-search', true)
@section('title', $episode->season->series->name . ' - ' . $episode->season->name . ' - ' . $episode->name . ' ( ' .
    $episode->number . ' ) ')
@if ($collaboration && $collaboration->user_id == auth()->id())
@section('header-actions')
    <livewire:collaborations.action :collaboration="$collaboration->id" />
@endsection
@endif


    <div wire:loading.class="opacity-50">
        <div wire:loading.class="opacity-50">
            <div class="flex">
                <div class="w-3/4 basis-3/4">
                    <livewire:ui.video :file="$episode->files->first()" />
                    @auth
                    @if ($collaboration)
                    <livewire:ui.comment :commentable="$episode" :room="$collaboration->room" />
                    @else
                    <livewire:ui.comment :commentable="$episode" />
                    @endif
                    @endauth
                </div>
                @if ($collaboration)
                <div class="w-1/4 basis-1/4">
                    <livewire:series.collaboration :collaboration="$collaboration" />
                </div>
                @else

                <div class="basis-1/4 w-1/4">
                    <div class="flex flex-col mx-3 p-3 bg-gray-100 rounded-lg">
                        <div class="flex flex-col justify-center items-center">
                            <img class="h-full w-full rounded-lg h-45 basis-1/3" src="{{ $episode->cover_url }}" />
                            <div class="mt-3 flex flex-col">
                                <span class="text-xl font-bold">{{ $episode->season->series->name }}</span>
                                <span class="text-lg font-semibold">
                                    {{ $episode->season->name }} - {{ $episode->name }} ( {{ $episode->number }} )
                                </span>
                            </div>
                            <div class="flex mb-3">
                                @foreach ($episode->season->series->genres as $item)
                                    <span class="text-gray-500 text-sm border-gray-400 mr-2">
                                        {{ $item->name }}
                                    </span>
                                @endforeach
                            </div>
                            <div class="flex items-center mt-3 justify-between w-full gap-4 border">
                                <div class="flex w-full justify-between gap-2">
                                    <div class="basis-3/6 w-3/6 flex flex-col items-center gap-2 grow">
                                        @auth
                                            <x-ui.button wire:click="like(true)" :color="$episode->liked(true) ? 'success' : 'secondary'"
                                                class="flex w-full justify-between items-center text-2xs h-10 px-1 text-white">
                                                <i class="fa-solid fa-2x fa-2x fa-thumbs-up"></i>
                                                <span class="text-lg">{{ $episode->likes_count }}</span>
                                            </x-ui.button>
                                        @else
                                            <x-ui.button :color="$episode->liked(true) ? 'error' : 'secondary'"
                                                class="flex w-full justify-between items-center text-2xs h-10 px-1 text-white"
                                                href="{{ route('login') }}">
                                                <i class="fa-solid fa-2x fa-thumbs-up"></i>
                                                <span class="text-lg">{{ $episode->likes_count }}</span>
                                            </x-ui.button>
                                        @endauth
                                        @auth
                                            <x-ui.button wire:click="like(false)" :color="$episode->liked(false) ? 'error' : 'secondary'"
                                                class="flex w-full justify-between items-center text-2xs h-10 px-1 text-white">
                                                <i class="fa-solid fa-2x fa-thumbs-down"></i>
                                                <span class="text-lg">{{ $episode->dislikes_count }}</span>
                                            </x-ui.button>
                                        @else
                                            <x-ui.button :color="$episode->liked(false) ? 'error' : 'secondary'"
                                                class="flex w-full justify-between items-center text-2xs h-10 px-1 text-white"
                                                href="{{ route('login') }}">
                                                <i class="fa-solid fa-2x fa-thumbs-down"></i>
                                                <span class="text-lg">{{ $episode->dislikes_count }}</span>
                                            </x-ui.button>
                                        @endauth
                                    </div>
                                    @auth
                                        <div class="basis-3/6 w-3/6 flex flex-col items-center gap-2">
                                            @if (!$episode->queued())
                                                <x-ui.button wire:click="watch_later(true)" color="secondary"
                                                    class="flex w-full justify-center items-center text-2xs h-10 px-1 text-white">
                                                    <i class="fa-solid fa-2x fa-clock"></i>
                                                </x-ui.button>
                                            @else
                                                <x-ui.button wire:click="watch_later(false)" color="warning"
                                                    class="flex w-full justify-center items-center text-2xs h-10 px-1 text-white">
                                                    <i class="fa-solid fa-2x fa-clock"></i>
                                                </x-ui.button>
                                            @endif
                                            @if (!$episode->favourited())
                                                <x-ui.button wire:click="favourite(true)" color="secondary"
                                                    class="flex w-full justify-center items-center text-2xs h-10 px-1 text-white">
                                                    <i class="fa-solid fa-2x fa-heart"></i>
                                                </x-ui.button>
                                            @else
                                                <x-ui.button wire:click="favourite(false)" color="error"
                                                    class="flex w-full justify-center items-center text-2xs h-10 px-1 text-white">
                                                    <i class="fa-solid fa-2x fa-heart"></i>
                                                </x-ui.button>
                                            @endif
                                        </div>
                                    @endauth
                                </div>
                            </div>

                            <div class="flex items-center justify-between w-full gap-4 mt-3">
                                <div class="flex justify-between w-full gap-2">
                                    <div class="flex flex-col items-center w-3/6 gap-2 basis-3/6 grow">
                                        <x-ui.button data-tooltip-target="5" data-tooltip-trigger="hover" type="button" color="warning" class="flex items-center justify-between w-full h-10 px-1 mt-2 text-sm text-white" href="{{ $episode->season->series->imdb_url }}" target="_blank">
                                            <span>IMDB</span>
                                            <span class="text-lg">{{ $episode->rating }}</span>
                                            <div id="5" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-black rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip">
                                                More Details
                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                            </div>
                                        </x-ui.button>
                                    </div>
                                    @auth
                                    <div class="flex flex-col items-center w-3/6 gap-2 basis-3/6 grow">
                                        <x-ui.button data-tooltip-target="6" data-tooltip-trigger="hover" type="button" wire:click="collaborate" color="secondary" class="flex items-center justify-center w-full h-10 px-1 mt-2 text-sm text-white">
                                            <i class="text-2xl fa-solid fa-share-from-square"></i>
                                            <div id="6" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-black rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip">
                                                Watch Together
                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                            </div>
                                        </x-ui.button>
                                    </div>
                                    @endauth
                                </div>
                            </div>


                            <div class="text-left text-gray-500 text-sm mt-5 border-l-8 border-gray-200 pl-2 pt-1 pb-4">
                                {{ $episode->season->series->description }}
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <div class="mb-4 border-b border-gray-200">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#episodeContent" role="tablist">
                    <div class="flex overflow-y-hidden flex-nowrap pb-2 rounded-lg">
                        @forelse ($seasons as $season)
                            <li class="mr-2" role="presentation">
                                <button style="border-color: red;
                                        color: red;" class="inline-block p-4 rounded-t-lg border-b-2 border-red-600"
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
                {{-- @livewire('episodes.similar') --}}
            </div>
        </div>
