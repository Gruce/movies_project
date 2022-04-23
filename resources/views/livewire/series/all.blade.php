@section('title', 'Series')


<div wire:loading.class="opacity-50">
    <div class="flex mb-10 border p-2 rounded-lg border-gray-200  px-4">
        <!-- Dropdown menu -->
        <div class="block">

            <button id="dropdownSmallButton" data-dropdown-toggle="dropdownSmall"
                class="inline-flex items-center py-2 px-3 mr-3 mb-3 text-sm font-medium text-center text-black bg-gray-100 rounded-lg md:mb-0 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:text-red-500"
                type="button">{{ $genre_name }}<svg class="ml-2 w-3 h-3" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg></button>

            <!-- Dropdown menu -->
            <div id="dropdownSmall"
                class="hidden z-30 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">

                <div class="py-1">
                    <a href="#" wire:click="select_genres()" selected
                        class="block py-1 px-4 hover:bg-gray-200 hover:text-gray-700" x-show="expanded" x-collapse>All
                        Genres</a>
                </div>
                <ul class="py-1 text-sm text-gray-500 dark:text-gray-200" aria-labelledby="dropdownSmallButton">
                    @foreach ($genres as $genre)
                        <li>
                            <a wire:click="select_genres({{ $genre->id }}, '{{ $genre->name }}')" href="#"
                                class="block py-1 px-4 @if ($genre->id == $genre_id) bg-gray-200 text-red-500 @endif hover:bg-gray-100 hover:text-gray-700">
                                {{ $genre->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>

        </div>
        <div class="pt-1 flex items-center">
            <label for="customRange3" class="form-label">
                <livewire:ui.rating :rating="$rating * 2" :listen="true" wire:key="{{ now() }}" />
            </label>

        </div>
    </div>
    <div :class="sidebar_extended ? 'grid-cols-5' : 'grid-cols-6'" class="grid gap-4 mt-8">
        @forelse ($series as $item)
            <div class="mr-5">
                <livewire:ui.series :episode="$item->seasons->first()->episodes->first()->id" :wire:key="$item->id" />
            </div>
        @empty
            <div class="text-center">
                <h1 class="text-gray-500 text-xl">No series found</h1>
            </div>
        @endforelse
    </div>
</div>
