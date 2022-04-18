<div>
    <h1 class="text-left py-2 pr-4 pl-3 text-gray-700 text-lg font-bold ">Movies</h1>
    <div class="flex gap-2">
        <!-- Dropdown menu -->
        <div class="block p-2 mb-10  rounded-lg border border-gray-200  px-4">
            <select wire:model="genre_id" class="py-1 text-sm text-gray-900 dark:text-gray-200"
                aria-labelledby="dropdownDefault">
                <option value="{{ null }}" selected class="block py-2 px-4 hover:bg-gray-200" x-show="expanded" x-collapse>
                    All
                </option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}" class="block py-2 px-4 hover:bg-gray-200">
                        {{ $genre->name }}
                    </option>
                @endforeach
            </select>

            <button id="dropdownSmallButton" data-dropdown-toggle="dropdownSmall" class="inline-flex items-center py-2 px-3 mr-3 mb-3 text-sm font-medium text-center text-black bg-gray-100 rounded-lg md:mb-0 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:text-red-500" type="button">Genres<svg class="ml-2 w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

<!-- Dropdown menu -->
<div id="dropdownSmall" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
    
    <div class="py-1">
      <a href="#" value="{{ null }}" selected class="block py-2 px-4 hover:bg-gray-200" x-show="expanded" x-collapse>A</a>
    </div>
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSmallButton">
      <li>
        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
      </li>
    </ul>
    
</div>

        </div>
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
