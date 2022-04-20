<div>
    <div class="flex flex-col">
        <div class="grid h-10 card">
            <h2 class="text-left card-title  pr-4"> Add Movie</h2>
        </div>
    </div>
    <form wire:submit.prevent="add">

        <div class="grid grid-cols-2 gap-4">
            <div class="mb-6">
                <label for="name" class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">movie
                    name</label>
                <input wire:model="name" type="text" id="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="name" >
                    @error('name') <span class="error text-red-600">{{ $message }}</span> @enderror
            </div>
            <!-- ... -->
            <div class="mb-6">
                <label for="rating" class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    rating</label>
                <input wire:model="rating" type="number"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="rating">
                    @error('rating') <span class="error text-red-600">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-6">
                <label for="name"
                    class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Duration</label>
                <input wire:model="duration" type="number"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Duration">
                    @error('duration') <span class="error text-red-600">{{ $message }}</span> @enderror
            </div>
            <!-- ... -->
            <div class="mb-6">
                <label class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Release Date</label>
                <select wire:model="release_date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="" > select year </option>
                    @for ($year = 1800; $year<=date('Y'); $year++)
                    <option value ="{{$year}}" >{{$year}}</option>
                    @endfor
                </select>
                @error('release_date') <span class="error text-red-600">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="mt-4 grid grid-cols-1 gap-4 ">
            <label for="message"
                class="text-left block text-sm font-medium text-gray-900 dark:text-gray-400">Description</label>
            <textarea wire:model="description" id="message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="description..."></textarea>
                @error('description') <span class="error text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="grid grid-cols-2 gap-4">
            <label class="block mt-2 text-left">Choose Cover
                <input type="file"
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
                <input type="file"
                    class="mt-2 block w-full text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-violet-50 file:text-violet-700
                        hover:file:bg-violet-100
                    " />
            </label>
        </div>
        <div class="grid grid-cols-7 gap-4 mt-6">
            @forelse ($genres as $genre)
                <div class="flex items-center mb-4">
                    <input wire:model="genre" id="checkbox-1" aria-describedby="checkbox-1" value="{{ $genre->id }}"
                        type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checkbox-1"
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
