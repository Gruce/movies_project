@section('disable-search', true)
@section('title', $movie->name)
@if ($collaboration)
    @section('header-actions')
        <livewire:collaborations.action :collaboration="$collaboration->id" />
    @endsection
@endif

<div wire:loading.class="opacity-50">
    <div class="flex">
        <div class="w-3/4 basis-3/4">
            <livewire:ui.video :file="$movie->files->first()" />
            @auth
            @if ($collaboration)
            <livewire:ui.comment :commentable="$movie" :room="$collaboration->room" />
            @else
            <livewire:ui.comment :commentable="$movie" />
            @endif
            @endauth
        </div>

        @if ($collaboration)
        <div class="w-1/4 basis-1/4">
            <livewire:movies.collaboration :collaboration="$collaboration" />
        </div>
        @else
        <div class="w-1/4 basis-1/4">
            <div class="flex flex-col p-3 mx-3 bg-gray-100 rounded-lg">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-full h-full rounded-lg h-45 basis-1/3" src="{{ $movie->cover_url }}" />
                    <div class="mt-3 text-xl font-bold">
                        <span>
                            {{ $movie->name }}
                        </span>
                    </div>
                    <div class="flex mb-3">
                        @foreach ($movie->genres as $item)
                        <span class="mr-2 text-sm text-gray-500 border-gray-400">
                            {{ $item->name }}
                        </span>
                        @endforeach
                    </div>
                    <div class="flex items-center justify-between w-full gap-4 mt-3">
                        <div class="flex justify-between w-full gap-2">
                            <div class="flex flex-col items-center w-3/6 gap-2 basis-3/6 grow">
                                @auth
                                <x-ui.button wire:click="like(true)" :color="$movie->liked(true) ? 'success' : 'secondary'" class="flex items-center justify-between w-full h-10 px-1 text-white text-2xs">
                                    <i class="fa-solid fa-2x fa-thumbs-up"></i>
                                    <span class="text-lg">{{ $movie->likes_count }}</span>
                                </x-ui.button>
                                @else
                                <x-ui.button :color="$movie->liked(true) ? 'error' : 'secondary'" class="flex items-center justify-between w-full h-10 px-1 text-white text-2xs" href="{{ route('login') }}">
                                    <i class="fa-solid fa-2x fa-thumbs-up"></i>
                                    <span class="text-lg">{{ $movie->likes_count }}</span>
                                </x-ui.button>
                                @endauth
                                @auth
                                <x-ui.button wire:click="like(false)" :color="$movie->liked(false) ? 'error' : 'secondary'" class="flex items-center justify-between w-full h-10 px-1 text-white text-2xs">
                                    <i class="fa-solid fa-2x fa-thumbs-down"></i>
                                    <span class="text-lg">{{ $movie->dislikes_count }}</span>
                                </x-ui.button>
                                @else
                                <x-ui.button :color="$movie->liked(false) ? 'error' : 'secondary'" class="flex items-center justify-between w-full h-10 px-1 text-white text-2xs" href="{{ route('login') }}">
                                    <i class="fa-solid fa-2x fa-thumbs-down"></i>
                                    <span class="text-lg">{{ $movie->dislikes_count }}</span>
                                </x-ui.button>
                                @endauth
                            </div>
                            @auth
                            <div class="flex flex-col items-center w-3/6 gap-2 basis-3/6">
                                @if (!$movie->queued())
                                <x-ui.button wire:click="watch_later(true)" color="secondary" class="flex items-center justify-center w-full h-10 px-1 text-white text-2xs">
                                    <i class="fa-solid fa-2x fa-clock"></i>
                                </x-ui.button>
                                @else
                                <x-ui.button wire:click="watch_later(false)" color="warning" class="flex items-center justify-center w-full h-10 px-1 text-white text-2xs">
                                    <i class="fa-solid fa-2x fa-clock"></i>
                                </x-ui.button>
                                @endif
                                @if (!$movie->favourited())
                                <x-ui.button wire:click="favourite(true)" color="secondary" class="flex items-center justify-center w-full h-10 px-1 text-white text-2xs">
                                    <i class="fa-solid fa-2x fa-heart"></i>
                                </x-ui.button>
                                @else
                                <x-ui.button wire:click="favourite(false)" color="error" class="flex items-center justify-center w-full h-10 px-1 text-white text-2xs">
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
                                <x-ui.button color="warning" class="flex items-center justify-between w-full h-10 px-1 mt-2 text-sm text-white" href="{{ $movie->imdb_url }}" target="_blank">
                                    <span>IMDB</span>
                                    <span class="text-lg">{{ $movie->rating }}</span>
                                </x-ui.button>
                            </div>
                            @auth
                            <div class="flex flex-col items-center w-3/6 gap-2 basis-3/6 grow">
                                <x-ui.button wire:click="collaborate" color="secondary" class="flex items-center justify-center w-full h-10 px-1 mt-2 text-sm text-white">
                                    <i class="text-2xl fa-solid fa-share-from-square"></i>
                                </x-ui.button>
                            </div>
                            @endauth
                        </div>
                    </div>

                    <div class="pt-1 pb-4 pl-2 mt-5 text-sm text-left text-gray-500 border-l-8 border-gray-200">
                        <span>{{ $movie->description }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>

    <div>
        @livewire('movies.similar', ['movie_id'=> $movie->id])
    </div>
</div>
