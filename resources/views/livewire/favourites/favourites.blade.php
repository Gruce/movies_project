<div x-data>
    <div class="flex justify-between mt-10 mb-5">
        <div class="font-bold text-lg text-gray-500">
            <span>Favourites</span>
        </div>
    </div>

    <div class="flex overflow-x-hidden overflow-y-hidden flex-nowrap" x-ref="slider">
        @for ($i = 0; $i < 10; $i++)
            <div x-ref="slide_item" class="mr-5">
                <livewire:ui.movie name="Avengers {{ $i+1 }}" rating="6.8" imgUrl="/img/inv.jpg" url="#" />
            </div>
        @endfor
    </div>
</div>
