<div wire:loading.class="opacity-50">
    <div class="p-3 bg-gray-100 rounded-lg">
        <div class="flex flex-row">
            <div class="basis-1/4 flex flex-col justify-center items-center w-1/4 ">
                <img class="rounded-lg h-45 basis-1/3" src="{{$episode->cover->url}}" />
                <div class="flex items-center mt-3 justify-between w-full gap-6">
                    <x-ui.button color="error" class="text-white block grow" href="#">
                        WATCH NOW
                    </x-ui.button>
                    {{-- @auth
                        <div class="flex justify-center">
                            <x-ui.icon-button wire:click="like(true)" icon="fa-solid fa-thumbs-up" :color="$episode->season->series->liked(true) ? 'error' : 'secondary'"
                                class="w-8 h-8 text-xl" />

                            <x-ui.icon-button wire:click="like(false)" icon="fa-solid fa-thumbs-down" :color="$episode->season->series->liked(false) ? 'error' : 'secondary'"
                                class="w-8 h-8 text-xl" />
                        </div>
                    @endauth --}}
                </div>
            </div>
            <div class="basis-3/4 w-3/4">
                <div class="flex flex-col gap-2 p-5">
                    <div class="mt-5 text-left font-semibold flex justify-between ">
                        <div>
                            <span class="text-xl">{{ $episode->season->series->name }}</span>
                        </div>
                        <div class="flex gap-5 items-center">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-thumbs-up"></i>
                                <span class="text-sm">{{ $episode->season->series->likes_count }}</span>
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="text-sm">{{ $episode->season->series->dislikes_count }}</span>
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
    <div>
        {{-- @livewire('movies.similar') --}}
        aaa
    </div>
</div>
