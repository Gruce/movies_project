<div>
    <div class="flex flex-col">
        <div class="grid h-10 card">
            <h2 class="text-left card-title  pr-4"> Add Movie</h2>
        </div>
    </div>
    <form wire:submit.prevent="add">
        {{-- name --}}
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-6">
                <label for="name" class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">movie
                    name</label>
                <input wire:model="name" type="text" id="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    placeholder="name" >
                    @error('name') <span class="error text-red-600">{{ $message }}</span> @enderror
            </div>
            <!-- rating -->
            <div class="mb-6">
                <label for="rating" class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    rating</label>
                <input wire:model="rating" type="number" min="0" max="10" step="0.1" id="rating"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    placeholder="rating">
                    @error('rating') <span class="error text-red-600">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-6">
                <label for="name"
                    class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Duration</label>
                <input wire:model="duration" type="number"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:shadow-sm-light"
                    placeholder="Duration">
                    @error('duration') <span class="error text-red-600">{{ $message }}</span> @enderror
            </div>
            <!-- Release Date -->
            <div class="mb-6">
                <label class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Release Date</label>
                <select wire:model="release_date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5">
                    <option selected value="" > select year </option>
                    @for ($year = 1900; $year<=date('Y'); $year++)
                    <option value ="{{$year}}">{{$year}}</option>
                    @endfor
                </select>
                @error('release_date') <span class="error text-red-600">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="mt-4 grid grid-cols-1 gap-4 ">
            <label for="message"
                class="text-left block text-sm font-medium text-gray-900 dark:text-gray-400">Description</label>
            <textarea wire:model="description" id="message" rows="4"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:shadow-sm-light"
                placeholder="description..."></textarea>
                @error('description') <span class="error text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="grid grid-cols-3 gap-4">
            <label class="block mt-2 text-left">Choose Cover
                <input wire:model="cover" type="file"
                    class="mt-2 block w-full text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-violet-50 file:text-violet-700
                        hover:file:bg-violet-100
                    " />

            </label>
            <label class="block mt-2 text-left">Choose Slider
                <input wire:model="url_slider" type="file"
                    class="mt-2 block w-full text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-violet-50 file:text-violet-700
                        hover:file:bg-violet-100
                    " />

            </label>
            <!-- ... -->

            <label class="block mt-2 text-left">Choose File
                <input wire:model="files" type="file" data-multiple-caption="{count} files selected" multiple
                    class="mt-2 block w-full text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-violet-50 file:text-violet-700
                        hover:file:bg-violet-100
                    " />
            </label>
        </div>
        {{-- Genres --}}
        <div class="grid grid-cols-7 gap-4 mt-6">
            @forelse ($all_genres as $genre)
                <div class="flex items-center mb-4">
                    <input wire:model="genres.{{$genre->id}}"  id="checkbox-{{$genre->id}}" aria-describedby="checkbox-{{$genre->id}}"
                        type="checkbox"
                        class="w-4 h-4 text-red-600 bg-gray-100 rounded border-gray-300 focus:ring-red-500">
                    <label for="checkbox-{{$genre->id}}"
                        class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $genre->name }} </label>
                </div>
            @empty
                <span> no genres </span>
            @endforelse

        </div>
        <button type="submit"
            class="block text-white focus:ring-4 font-medium text-sm rounded-lg px-5 py-2.5 focus:outline-none bg-red-700 hover:bg-red-800 focus:ring-red-300">Add</button>
        {{-- <x-ui.button type="submit" color="error" class="mt-4 btn-xs text-white block" href="#">
            Add
        </x-ui.button> --}}
    </form>

</div>
