@section('disable-search', true)
@section('title', $movie->name)
{{-- @if ($collaboration)
@section('enable-actions', true, 'collaboration', $collaboration->id)
@endif --}}

{{--
{{-- @section('header-actions') --}}
{{-- <x-ui.button
    class="text-2xs text-white">
    <i class="fa-regular fa-2x fa-2x fa-copy px-2"></i>
    <span class="text-lg">Copy room URL</span>
</x-ui.button> --}}
{{-- @endsection --}}

<div wire:loading.class="opacity-50">
    @if($collaboration)
    <livewire:collabrate.action :collaboration="$collaboration->id"/>
    @endif
    <div class="flex">
        <div class="basis-3/4 w-3/4">
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
            <div class="basis-1/4 w-1/4">
                <livewire:movies.collaboration :collaboration="$collaboration" />
            </div>
        @else
            <div class="basis-1/4 w-1/4">
                <div class="flex flex-col mx-3 p-3 bg-gray-100 rounded-lg">
                    <div class="flex flex-col justify-center items-center">
                        <img class="h-full w-full rounded-lg h-45 basis-1/3" src="{{ $movie->cover_url }}" />
                        <div class="text-xl font-bold mt-3">
                            <span>
                                {{ $movie->name }}
                            </span>
                        </div>
                        <div class="flex mb-3">
                            @foreach ($movie->genres as $item)
                                <span class="text-gray-500 text-sm border-gray-400 mr-2">
                                    {{ $item->name }}
                                </span>
                            @endforeach
                        </div>
                        <div class="flex items-center mt-3 justify-between w-full gap-4">
                            <div class="flex w-full justify-between gap-2">
                                <div class="basis-3/6 w-3/6 flex flex-col items-center gap-2 grow">
                                    @auth
                                        <x-ui.button wire:click="like(true)" :color="$movie->liked(true) ? 'success' : 'secondary'"
                                            class="flex w-full justify-between items-center text-2xs h-10 px-1 text-white">
                                            <i class="fa-solid fa-2x fa-2x fa-thumbs-up"></i>
                                            <span class="text-lg">{{ $movie->likes_count }}</span>
                                        </x-ui.button>
                                    @else
                                        <x-ui.button :color="$movie->liked(true) ? 'error' : 'secondary'"
                                            class="flex w-full justify-between items-center text-2xs h-10 px-1 text-white"
                                            href="{{ route('login') }}">
                                            <i class="fa-solid fa-2x fa-thumbs-up"></i>
                                            <span class="text-lg">{{ $movie->likes_count }}</span>
                                        </x-ui.button>
                                    @endauth
                                    @auth
                                        <x-ui.button wire:click="like(false)" :color="$movie->liked(false) ? 'error' : 'secondary'"
                                            class="flex w-full justify-between items-center text-2xs h-10 px-1 text-white">
                                            <i class="fa-solid fa-2x fa-thumbs-down"></i>
                                            <span class="text-lg">{{ $movie->dislikes_count }}</span>
                                        </x-ui.button>
                                    @else
                                        <x-ui.button :color="$movie->liked(false) ? 'error' : 'secondary'"
                                            class="flex w-full justify-between items-center text-2xs h-10 px-1 text-white"
                                            href="{{ route('login') }}">
                                            <i class="fa-solid fa-2x fa-thumbs-down"></i>
                                            <span class="text-lg">{{ $movie->dislikes_count }}</span>
                                        </x-ui.button>
                                    @endauth
                                </div>
                                @auth
                                    <div class="basis-3/6 w-3/6 flex flex-col items-center gap-2">
                                        @if (!$movie->queued())
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
                                        @if (!$movie->favourited())
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
                        <div class="flex items-center mt-3 justify-between w-full gap-4">
                            <div class="flex w-full justify-between gap-2">
                                <div class="basis-3/6 w-3/6 flex flex-col items-center gap-2 grow">
                                    <x-ui.button color="warning"
                                        class="mt-2 flex w-full justify-between items-center text-sm h-10 px-1 text-white"
                                        href="{{ $movie->imdb_url }}" target="_blank">
                                        <span>IMDB</span>
                                        <span class="text-lg">{{ $movie->rating }}</span>
                                    </x-ui.button>
                                </div>
                                @auth
                                    <div class="basis-3/6 w-3/6 flex flex-col items-center gap-2 grow">
                                        <x-ui.button wire:click="collaborate" color="secondary"
                                            class="mt-2 flex w-full justify-center items-center text-sm h-10 px-1 text-white">
                                            <i class="fa-solid text-2xl fa-share-from-square"></i>
                                        </x-ui.button>
                                    </div>
                                @endauth
                            </div>
                        </div>

                        <div class="text-left text-gray-500 text-sm mt-5 border-l-8 border-gray-200 pl-2 pt-1 pb-4">
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
