<div>
    <div class="flex flex-col">
        <div class="grid h-10 card">
            <h2 class="font-bold text-l text-red-700 text-left card-title  pr-4"> Add Movie</h2>
        </div>
    </div>
    <form wire:submit.prevent="add">

        <div class="grid grid-cols-2 gap-6">
            <div class="relative z-0 mb-6 w-full group">
                <label for="name" class="text-left block mb-2 text-sm font-medium text-gray-900">movie
                    name</label>
                <input wire:model="name" type="text" id="name"
                    class="bg-transparent border-0 border-b-2 border-gray-500 text-gray-900 text-sm block w-full p-2.5 focus:ring-gray-300 focus:border-gray-700"
                    placeholder="name" >
                    @error('name') <span class="error text-red-600">{{ $message }}</span> @enderror
            </div>
            <!-- ... -->
            <div class="mb-6">
                <label for="rating" class="text-left block mb-2 text-sm font-medium text-gray-900">
                    rating</label>
                <input wire:model="rating" type="number" step="0.1" min="0" max="10"
                    class="bg-transparent border-0 border-b-2 border-red-500 text-gray-900 text-sm block w-full p-2.5 focus:ring-blue-300 focus:border-blue-700"
                    placeholder="rating">
                    @error('rating') <span class="error text-red-600">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="grid grid-cols-2 gap-6">
            <div class="mb-6">
                <label for="name"
                    class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Duration</label>
                <input wire:model="duration" type="number"
                    class="bg-transparent border-0 border-b-2 border-red-500 text-gray-900 text-sm block w-full p-2.5 focus:ring-blue-300 focus:border-blue-700"
                    placeholder="Duration">
                    @error('duration') <span class="error text-red-600">{{ $message }}</span> @enderror
            </div>
            <!-- ... -->
            <div class="mb-6">
                <label class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Release Date</label>
                <select wire:model="release_date"
                    class="bg-transparent border-0 border-b-2 border-black-500 text-gray-900 text-sm focus:ring-blue-300 focus:border-blue-700 block w-full p-2.5">
                    <option selected value="" > select year </option>
                    @for ($year = date('Y'); $year>=1900; $year--)
                    <option value ="{{$year}}" >{{$year}}</option>
                    @endfor
                </select>
                @error('release_date') <span class="error text-red-600">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="mt-4 grid grid-cols-1 gap-4 ">
            <label for="message"
                class="text-left block text-sm font-medium text-gray-900">Description</label>
            <textarea wire:model="description" id="message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-red-500 focus:ring-red-800 focus:border-red-600"
                placeholder="description..."></textarea>
                @error('description') <span class="error text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="grid grid-cols-2 gap-4">
            <label class="block mt-2 text-left">Choose Cover
                <input type="file"
                    class="mt-2 block w-full px-5 text-sm text-c text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-violet-50 file:text-violet-700
                        hover:file:bg-violet-300
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
                    <input wire:model="genre" id="checkbox-1" aria-describedby="{{ $genre->id }}" value="{{ $genre->id }}"
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

{{--     
<form>
    <div class="relative z-0 mb-6 w-full group">
    <input type="email" name="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
    <label for="floating_email" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
    <input type="password" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
    <label for="floating_password" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
    <input type="password" name="repeat_password" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
    <label for="floating_repeat_password" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm password</label>
    </div>
    <div class="grid xl:grid-cols-2 xl:gap-6">
    <div class="relative z-0 mb-6 w-full group">
    <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
    <label for="floating_first_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
    <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
    <label for="floating_last_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
    </div>
    </div>
    <div class="grid xl:grid-cols-2 xl:gap-6">
    <div class="relative z-0 mb-6 w-full group">
    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
    <label for="floating_phone" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (123-456-7890)</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
    <input type="text" name="floating_company" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
    <label for="floating_company" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Company (Ex. Google)</label>
    </div>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
     --}}
</div>
