<div wire:loading.class="opacity-50">
    <h1 class="text-left py-2 pr-4 pl-3 text-gray-700 text-lg font-bold ">Movies</h1>
    <div class="flex gap-2">
        <!-- Dropdown menu -->

        <select wire:model="genre_id" class="py-1 text-sm text-gray-900 dark:text-gray-200"
            aria-labelledby="dropdownDefault">
            <option value="{{ null }}" selected class="block py-2 px-4 hover:bg-gray-200">
                All
            </option>
            @foreach ($genres as $genre)
                <option value="{{ $genre->id }}" class="block py-2 px-4 hover:bg-gray-200">
                    {{ $genre->name }}
                </option>
            @endforeach
        </select>

        <div class="relative pt-1">
            <label for="customRange3" class="form-label">
                <x-ui.rating :rating="$rating*2" />    
            </label>
            <input wire:model="rating" type="range"
                class="form-range w-full h-6 p-0 bg-transparent focus:outline-none focus:ring-3 focus:shadow-none"
                min="1" max="5" step="1" id="customRange3" />
        </div>
    </div>
    <div class="grid grid-cols-4 gap-4 mt-8">
        @forelse ($movies as $movie)
            <div class="mr-5">
                <livewire:ui.movie :movie="$movie->id" :wire:key="$movie->id" />
            </div>
        @empty
            <div class="text-center">
                <h1 class="text-gray-500 text-xl">No movies found</h1>
            </div>
        @endforelse
    </div>
</div>
