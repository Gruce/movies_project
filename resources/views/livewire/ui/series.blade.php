<div wire:loading.class="opacity-50" class="w-52 h-80 bg-cover flex items-end justify-center rounded-lg relative group transition ease-in-out duration-300"
    style="background-image: url('{{ $episode->cover->url }}')">
    <div
        class="w-full h-full absolute bg-gradient-to-b  to-gray-800 from-transparent rounded-lg group-hover:to-gray-900 group-hover:duration-300">
    </div>
    <div class="z-10 -mb-3 text-center group-hover:mb-5 group-hover:duration-300">
        <h1 class="text-white text-x1 font-semibold tracking-tight">{{ $episode->season->series->name }}</h1>
        <div class="flex items-center flex-col mt-1 mb-2">
            <livewire:ui.rating :rating="$episode->season->series->rating" wire:key="{{ now() }}" />
            <div
                class="flex gap-1 mt-3 invisible opacity-0 group-hover:opacity-100 group-hover:visible group-hover:duration-300">
                <x-ui.button href="{{ route('series-show', ['episode' => $episode->id]) }}" color="error">
                    Watch Now!
                </x-ui.button>
            </div>
        </div>
    </div>
    <div class="top-2 right-2 absolute flex flex-col gap-2">
        @auth
            @if (!$episode->queued())
                <x-ui.icon-button wire:click="watch_later(true)" icon="fa-solid fa-clock" color="light2"
                    class="text-2xl invisible opacity-0 hover:text-yellow-300 group-hover:opacity-100 group-hover:visible group-hover:duration-300" />
            @else
                <x-ui.icon-button wire:click="watch_later(false)" icon="fa-solid fa-clock" color="warning"
                    class="text-2xl invisible opacity-0 group-hover:opacity-100 group-hover:visible group-hover:duration-300" />
            @endif
            @if (!$episode->favourited())
                <x-ui.icon-button wire:click="favourite(true)" icon="fa-solid fa-heart" color="light2"
                    class="text-2xl invisible opacity-0 hover:text-red-500 group-hover:opacity-100 group-hover:visible group-hover:duration-300" />
            @else
                <x-ui.icon-button wire:click="favourite(false)" icon="fa-solid fa-heart" color="error"
                    class="text-2xl invisible opacity-0 group-hover:opacity-100 hover:bg-tr group-hover:visible group-hover:duration-300" />
            @endif
        @endauth
    </div>
    <div
        class="top-0 left-0 absolute text-white bg-gradient-to-tl to-red-500 from-red-700  px-5 py-0.5 rounded-tl-[8px] rounded-br-[15px]">
        <button data-tooltip-target="tooltip-default" type="button" class="fa-solid fa-tv"></button>
        <div id="tooltip-default" role="tooltip"
            class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
            Series
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

    </div>
</div>
