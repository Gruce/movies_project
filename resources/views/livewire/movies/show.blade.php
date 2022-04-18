<div wire:loading.class="opacity-50">
    <div class="p-3 bg-gray-100 rounded-lg">
        <div class="flex flex-row">
            <div class="basis-1/4 flex flex-col justify-center items-center w-1/4 ">
                <img class="rounded-lg h-45 basis-1/3" src="{{$movie->cover->url}}" />
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
                        <div class="flex gap-5 items-center">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-thumbs-up"></i>
                                <span class="text-sm">{{ $movie->likes_count }}</span>
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="text-sm">{{ $movie->dislikes_count }}</span>
                            </div>
                            <x-ui.rating :rating="$movie->rating" />
                        </div>
                    </div>
                    <div class="flex-row justify-around text-left ">
                        @foreach ($movie->genres as $item)
                            <span class="text-gray-500 text-sm   border-gray-400   mr-2">
                                {{ $item->name }}
                            </span>
                        @endforeach
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
        @livewire('movies.similar')
    </div>
</div>
