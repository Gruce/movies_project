@section('disable-search', true)
@section('title', $episode->season->series->name . ' - ' . $episode->season->name . ' - ' . $episode->name . ' ( ' .
    $episode->number . ' ) ')

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
                                <span class="text-gray-500">{{ $episode->season->name }} - {{ $episode->name }}
                                    ({{ $episode->number }})</span>
                            </div>
                            <div class="flex gap-5 items-center flex-col">
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                    <span class="text-sm">{{ $episode->likes_count }}</span>
                                    <i class="fa-solid fa-thumbs-down"></i>
                                    <span class="text-sm">{{ $episode->dislikes_count }}</span>
                                </div>
                                @auth
                                    <div class="flex justify-between w-full">
                                        @if (!$episode->queued())
                                            <x-ui.icon-button wire:click="watch_later(true)" icon="fa-solid fa-clock"
                                                color="dark" class="text-2xl hover:text-yellow-300" />
                                        @else
                                            <x-ui.icon-button wire:click="watch_later(false)" icon="fa-solid fa-clock"
                                                color="warning" class="text-2xl" />
                                        @endif
                                        @if (!$episode->favourited())
                                            <x-ui.icon-button wire:click="favourite(true)" icon="fa-solid fa-heart" color="dark"
                                                class="text-2xl hover:text-red-500" />
                                        @else
                                            <x-ui.icon-button wire:click="favourite(false)" icon="fa-solid fa-heart"
                                                color="error" class="text-2xl hover:bg-tr" />
                                        @endif
                                    </div>
                                @endauth
                            </div>
                        </div>

                        <div class="flex-row justify-around text-left ">
                            {{ implode(', ', $episode->season->series->genres->pluck('name')->toArray()) }}
                            <div class="mt-2 flex items-center gap-1">
                                <span
                                    class="bg-yellow-300 text-red-600  cursor-pointer text-gray-800 text-base font-semibold mr-1 px-1 py-0.25 rounded">IMDB</span>
                                <i class="fa-solid text-yellow-300 fa-star text-lg"></i>
                                <p class="text-lg">{{ $episode->season->series->rating }}</p>
                            </div>
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
            @auth
            <form  wire:submit.prevent="comment">
                <label for="message" class="block mb-4 mt-4 text-left text-xs font-medium text-gray-900 dark:text-gray-400">Your
                    Comment</label>
                <textarea wire:model.lazy="comment" id="message" rows="2" cols="6"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Leave a comment..."></textarea>
                <button type="submit"
                    class="focus:outline-none flex justify-items-start mt-4 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">comment</button>
            </form>
            @endauth
        </div>

        <div>
            {{-- @livewire('movies.similar') --}}
        </div>
    </div>
