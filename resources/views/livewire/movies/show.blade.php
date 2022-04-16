<div>
    <div class="p-3 bg-gray-100 rounded-lg">
        <div class="flex flex-row">
            <div class="basis-1/4 flex flex-col justify-center items-center w-1/4 ">
                <img class="rounded-lg h-45 basis-1/3" src="/img/inv.jpg" />
                <div class="flex items-center mt-3 justify-between w-full">
                    <x-ui.button color="error" class="text-white block " href="#">
                        WATCH NOW
                    </x-ui.button>
                    <div class="flex justify-center">
                        <x-ui.icon-button wire:click="like()" icon="fa-solid fa-thumbs-up" color="secondary" class="w-8 h-8 text-xl" />

                        <x-ui.icon-button wire:click="dislike()" icon="fa-solid fa-thumbs-down" color="secondary" class="w-8 h-8 text-xl" />
                    </div>
                </div>
            </div>
            <div class="basis-3/4 w-3/4">
                <div class="flex flex-col gap-2 p-5">
                    <div class="mt-5 text-left font-semibold flex justify-between ">
                        <div>
                            <span class="text-xl">{{$movie->name}}</span>
                        </div>
                        <div class="flex gap-5 items-center">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-thumbs-up"></i>
                                <span class="text-sm">{{$movie->likes}}</span>
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="text-sm">{{$movie->dislikes}}</span>
                            </div>
                            <x-ui.rating :rating="$movie->rating" />
                        </div>

                    </div>

                    <div class="flex-row justify-around text-left ">
                        @foreach ($movie->genres as $item)

                        <span  class="text-gray-500 text-sm   border-gray-400   mr-2">
                            {{$item->name}}
                        </span>
                        @endforeach

                    </div>
                    <div class="text-left mt-5">
                        <span>
                            {{$movie->description}}
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
