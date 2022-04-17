<div x-data>
    <div class="flex justify-between mt-10 mb-5">
        <div class="font-bold text-lg text-gray-500">
            <span>Favourites</span>
        </div>
    </div>

    <div class="flex overflow-x-hidden overflow-y-hidden flex-nowrap" x-ref="slider">
        @for ($i = 0; $i < 4; $i++)
            <div x-ref="slide_item" class="mr-5">
                <livewire:ui.movie movie="2" />
            </div>
        @endfor
    </div>
</div>
