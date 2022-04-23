<div wire:loading.class="opacity-50">
    @if ($showDarkScreen)
    <div class="w-screen h-screen fixed top-0 left-0 bg-gray-900 opacity-50 z-0">
        <x-ui.icon-button wire:click="$set('showDarkScreen', {{false}})" class="absolute top-10 right-10 p-3" icon="fas fa-times fa-3x" color="secondary" />
    </div>
    @endif

    <div class="p-10 z-20 bg-gray-100 rounded-lg mb-10">
        <livewire:ui.video :file="$movie->files->first()"/>
    </div>
    <div class="p-3 bg-gray-100 rounded-lg">
        <div class="flex flex-row">
            <div class="basis-1/4 flex flex-col justify-center items-start w-1/4 ">
                <img class="h-full w-full rounded-lg h-45 basis-1/3" src="{{ $movie->cover_url }}" />
                <div class="flex items-center mt-3 justify-between w-full gap-6">
                    <x-ui.button color="error" class="text-white block grow" href="#">
                        WATCH NOW
                    </x-ui.button>
                    @auth
                        <div class="flex justify-center">
                            <x-ui.icon-button wire:click="like(true)" icon="fa-solid fa-thumbs-up" :color="$movie->liked(true) ? 'error' : 'secondary'"
                                class="w-8 h-8 text-xl" />

                            <x-ui.icon-button wire:click="like(false)" icon="fa-solid fa-thumbs-down" :color="$movie->liked(false) ? 'error' : 'secondary'"
                                class="w-8 h-8 text-xl" />
                        </div>
                    @endauth
                </div>
            </div>
            <div class="basis-3/4 w-3/4">
                <div class="flex flex-col gap-2 p-5">
                    <div class="mt-5 text-left font-semibold flex justify-between ">
                        <div>
                            <span class="text-xl">{{ $movie->name }}</span>
                        </div>
                        <div class="flex gap-5 items-center flex-col">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-thumbs-up"></i>
                                <span class="text-sm">{{ $movie->likes_count }}</span>
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="text-sm">{{ $movie->dislikes_count }}</span>
                            </div>
                            @auth
                                <div class="flex justify-between w-full">
                                    @if (!$movie->queued())
                                        <x-ui.icon-button wire:click="watch_later(true)" icon="fa-solid fa-clock"
                                            color="dark" class="text-2xl hover:text-yellow-300" />
                                    @else
                                        <x-ui.icon-button wire:click="watch_later(false)" icon="fa-solid fa-clock"
                                            color="warning" class="text-2xl" />
                                    @endif
                                    @if (!$movie->favourited())
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
                        @foreach ($movie->genres as $item)
                            <span class="text-gray-500 text-sm border-gray-400 mr-2">
                                {{ $item->name }}
                            </span>
                        @endforeach
                        <div class=" mt-2 flex items-center gap-1">
                            <span
                                class="bg-yellow-300 text-red-600  cursor-pointer text-gray-800 text-base font-semibold mr-1 px-1 py-0.25 rounded">IMDB</span>
                            <i class="fa-solid text-yellow-300 fa-star text-lg"></i>
                            <p class="text-lg">{{ $movie->rating }}</p>
                        </div>
                    </div>
                    <div class="text-left mt-5">
                        <span>
                            {{ $movie->description }}
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div>
        @livewire('movies.similar', ['movie_id' => $movie->id])
    </div>
</div>
