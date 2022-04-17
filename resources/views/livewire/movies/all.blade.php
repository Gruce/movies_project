<h1 class="text-left py-2 pr-4 pl-3 text-gray-700 text-lg font-bold ">Movies</h1>
<div class="flex gap-2">
    <button id="dropdownDefault" data-dropdown-toggle="dropdown"
        class="text-black bg-gray-100 hover:bg-gray-200 focus:ring-4  focus:text-red-500 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center "
        type="button">Genres<svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg></button>
    <!-- Dropdown menu -->
    <div id="dropdown" class="hidden z-20 w-44 bg-gray-50 rounded divide-y divide-gray-100 shadow">
        <ul class="py-1 text-sm text-gray-900 dark:text-gray-200" aria-labelledby="dropdownDefault">
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200">Action</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200">Animation</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200">Comedy</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200">Drama</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200">Fantasy</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200">Horror</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200">Mystery</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200">Romance</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200">Thriller</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200">Western</a>
            </li>
        </ul>
    </div>
    <div class="relative pt-1">
        <!-- <label for="customRange3" class="form-label">Example range</label> -->
        <input type="range"
            class="form-range w-full h-6 p-0 bg-transparent focus:outline-none focus:ring-3 focus:shadow-none" min="1"
            max="5" step="1" id="customRange3" />
    </div>
</div>
<div class="grid grid-cols-4 gap-4 mt-8">
    @for ($i = 0; $i < 12; $i++)
        <div class="mr-5">
            <livewire:ui.movie movie="1" />
        </div>
    @endfor
</div>
