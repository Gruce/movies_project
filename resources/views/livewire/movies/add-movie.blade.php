@section('title', 'Add Movie')
@section('disable-search', true)

<div>
    <div class="flex">
        <div class="basis-1/6 w-1/6">
            <livewire:ui.movie :movie="$movie" wire:key="{{ now() }}" />
        </div>

        <div class="basis-5/6 w-5/6">
            <form wire:submit.prevent="add">
                {{-- name --}}
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-6">
                        <label for="name"
                            class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Name
                            @error('movie.name')
                                <span
                                    class="error text-red-600 bg-red-100 rounded-lg py-1 px-2 text-xs">{{ $message }}</span>
                            @enderror
                        </label>
                        <input required wire:model.lazy="movie.name" type="text" id="name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                            placeholder="name">

                    </div>
                    <!-- rating -->
                    <div class="mb-6">
                        <label for="rating"
                            class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Rating
                            @error('movie.rating')
                                <span
                                    class="error text-red-600 bg-red-100 rounded-lg py-1 px-2 text-xs">{{ $message }}</span>
                            @enderror
                        </label>
                        <input required wire:model.lazy="movie.rating" type="number" min="0" max="10" step="0.1"
                            id="rating"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                            placeholder="rating">
                    </div>
                    <div class="mb-6">
                        <label for="name"
                            class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Duration
                            @error('movie.duration')
                                <span
                                    class="error text-red-600 bg-red-100 rounded-lg py-1 px-2 text-xs">{{ $message }}</span>
                            @enderror
                        </label>
                        <input required wire:model.lazy="movie.duration" type="number"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:shadow-sm-light"
                            placeholder="Duration">
                    </div>
                    <!-- Release Date -->
                    <div class="mb-6">
                        <label class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Release Date
                            @error('movie.release_date')
                                <span
                                    class="error text-red-600 bg-red-100 rounded-lg py-1 px-2 text-xs">{{ $message }}</span>
                            @enderror
                        </label>
                        <select required wire:model.lazy="movie.release_date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5">
                            <option selected value=""> select year </option>
                            @for ($year = 1900; $year <= date('Y'); $year++)
                                <option value="{{ $year }}">{{ $year }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="name" class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        IMDB URL
                        @error('movie.imdb')
                            <span
                                class="error text-red-600 bg-red-100 rounded-lg py-1 px-2 text-xs">{{ $message }}</span>
                        @enderror
                    </label>
                    <input required wire:model.lazy="movie.imdb" type="text"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:shadow-sm-light"
                        placeholder="IMDB URL">
                </div>

                <div class="mt-4 grid grid-cols-1 gap-4 ">
                    <label for="message" class="text-left block text-sm font-medium text-gray-900 dark:text-gray-400">
                        Description
                        @error('movie.description')
                            <span
                                class="error text-red-600 bg-red-100 rounded-lg py-1 px-2 text-xs">{{ $message }}</span>
                        @enderror
                    </label>
                    <textarea required wire:model.lazy="movie.description" id="message" rows="4"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:shadow-sm-light"
                        placeholder="description..."></textarea>
                </div>


                <div class="grid grid-cols-3 gap-4 mt-6">
                    <div class="flex w-full items-center justify-center bg-grey-lighter">
                        <label
                        class="w-full flex flex-col items-center px-2 py-6  @if ($url) bg-red-700 text-white @else bg-white text-red-700  @endif rounded-lg tracking-wide border border-red-700 cursor-pointer hover:bg-red-700 hover:text-white">
                            <div wire:loading wire:target="url">
                                <x-ui.loading />
                            </div>
                            <div wire:loading.remove wire:target="url">
                                @if ($url)
                                    <i class="fa-solid fa-check text-2xl"></i>
                                @else
                                    <i class="fa-solid fa-upload text-2xl"></i>
                                @endif
                            </div>
                            <span class="mt-2 text-base leading-normal">
                                @if ($url)
                                    Cover Image Selected
                                @else
                                    Select Cover Image
                                @endif
                            </span>
                            <input id="cover_file" required type='file' class="hidden" wire:model="url" />
                        </label>
                        @error('url')
                            <span
                                class="error text-red-600 bg-red-100 rounded-lg py-1 px-2 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex w-full items-center justify-center bg-grey-lighter">
                        <label
                        class="w-full flex flex-col items-center px-2 py-6  @if ($url_slider) bg-red-700 text-white @else bg-white text-red-700  @endif rounded-lg tracking-wide border border-red-700 cursor-pointer hover:bg-red-700 hover:text-white">
                            <div wire:loading wire:target="url_slider">
                                <x-ui.loading />
                            </div>
                            <div wire:loading.remove wire:target="url_slider">
                                @if ($url_slider)
                                    <i class="fa-solid fa-check text-2xl"></i>
                                @else
                                    <i class="fa-solid fa-upload text-2xl"></i>
                                @endif
                            </div>
                            <span class="mt-2 text-base leading-normal">
                                @if ($url_slider)
                                    Slider Image Selected
                                @else
                                    Select Slider Image
                                @endif
                            </span>
                            <input id="slider_file" required type='file' class="hidden"
                                wire:model="url_slider" />
                        </label>
                        @error('url_slider')
                            <span
                                class="error text-red-600 bg-red-100 rounded-lg py-1 px-2 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- ... -->
                    <div class="flex w-full items-center justify-center bg-grey-lighter">
                        <label
                            class="w-full flex flex-col items-center px-2 py-6  @if (count($files) > 0) bg-red-700 text-white @else bg-white text-red-700  @endif rounded-lg tracking-wide border border-red-700 cursor-pointer hover:bg-red-700 hover:text-white">
                            <div wire:loading wire:target="files">
                                <x-ui.loading />
                            </div>
                            <div wire:loading.remove wire:target="files">
                                @if (count($files) > 0)
                                    <i class="fa-solid fa-check text-2xl"></i>
                                @else
                                    <i class="fa-solid fa-upload text-2xl"></i>
                                @endif
                            </div>
                            <span class="mt-2 text-base leading-normal">
                                @if (count($files) > 0)
                                    Selected {{ count($files) }} Files
                                @else
                                    Select Files
                                @endif
                            </span>
                            <input id="file" required type='file' class="hidden" wire:model="files" multiple />
                        </label>
                        @error('files')
                            <span
                                class="error text-red-600 bg-red-100 rounded-lg py-1 px-2 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                {{-- Genres --}}
                <div class="grid grid-cols-7 gap-4 mt-6">
                    @forelse ($all_genres as $index => $genre)
                        <div class="flex items-center mb-4">
                            <input wire:model.lazy="genres.{{ $index }}" id="{{ rand() }}"
                                aria-describedby="checkbox-{{ $genre->id }}" type="checkbox"
                                value="{{ $genre->id }}"
                                class="w-4 h-4 text-red-600 bg-gray-100 rounded border-gray-300 focus:ring-red-500">
                            <label for="checkbox-{{ $genre->id }}"
                                class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $genre->name }}
                            </label>
                        </div>
                    @empty
                        <span> no genres </span>
                    @endforelse

                </div>
                <div wire:loading>
                    <x-ui.loading />
                </div>
                <div wire:loading.remove>
                    <button type="submit"
                        class="block text-white focus:ring-4 font-medium text-sm rounded-lg px-5 py-2.5 focus:outline-none bg-red-700 hover:bg-red-800 focus:ring-red-300">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
