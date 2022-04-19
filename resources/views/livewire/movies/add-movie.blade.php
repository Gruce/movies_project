<div>
    <div class="flex flex-col">
        <div class="grid h-10 card">
            <h2 class="text-left card-title  pr-4"> Add Movie</h2>
        </div>
    </div>
    <form>

        <div class="grid grid-cols-2 gap-4">
            <div class="mb-6">
                <label for="name" class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">movie
                    name</label>
                <input type="text" id="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="name" required="">
            </div>
            <!-- ... -->
            <div class="mb-6">
                <label for="rating" class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    rating</label>
                <input type="number"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="rating" required="">
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-6">
                <label for="name"
                    class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Duration</label>
                <input type="number" id="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Duration" required="">
            </div>
            <!-- ... -->
            <div class="mb-6">
                <label for="rating" class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Release Date</label>
                <input type="number"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Duration" required="">
            </div>

        </div>

        <div class="mt-4 grid grid-cols-1 gap-4 ">
            <label for="message"
                class="text-left block text-sm font-medium text-gray-900 dark:text-gray-400">Description</label>
            <textarea id="message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="description..."></textarea>
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

        <x-ui.button color="error" class="mt-4 btn-xs text-white block" href="#">
            Add
        </x-ui.button>
    </form>

</div>
