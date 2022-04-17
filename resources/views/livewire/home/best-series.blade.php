<div x-data>
    <div class="flex justify-between mt-10 mb-5">
        <div class="font-bold text-lg text-gray-500">
            <span>Best Series</span>
        </div>
        <div>
            <x-ui.icon-button icon="fa-solid fa-angle-left" class="w-8 h-8 text-xl" @click="$refs.slider.scrollLeft -= 2*$refs.slider.firstElementChild.offsetWidth" />
            <x-ui.icon-button icon="fa-solid fa-angle-right" class="w-8 h-8 text-xl" @click="$refs.slider.scrollLeft += 2*$refs.slider.firstElementChild.offsetWidth" />
        </div>
    </div>

    <div class="flex overflow-x-hidden overflow-y-hidden flex-nowrap" x-ref="slider">
        @forelse ($series as $series)
            <div x-ref="slide_item" class="mr-5">
                {{-- <livewire:ui.series :episode="$series->seasons->first()->episodes->first()->id" :wire:key="$series->id" /> --}}
            </div>
        @empty
            <div class="text-center text-gray-500">
                <span class="text-xl">No Series</span>
            </div>
        @endforelse
    </div>
</div>
