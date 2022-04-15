<div>
    <div class="p-3 bg-gray-100 rounded-lg">
        <div class="flex flex-row">
            <div class="basis-1/4 flex flex-col justify-center items-center w-1/4 ">
                <img class="rounded-lg h-45 basis-1/3" src="/img/inv.jpg" />
                <div class="flex items-center mt-3 justify-between w-full">
                    <x-ui.button color="error" class="text-white block " href="#">
                        WATCH NOW
                    </x-ui.button>
                    <div class="flex justify-center">
                        <x-ui.icon-button icon="fa-solid fa-thumbs-up" color="secondary" class="w-8 h-8 text-xl" />
                        <x-ui.icon-button icon="fa-solid fa-thumbs-down" color="secondary" class="w-8 h-8 text-xl" />
                    </div>
                </div>
            </div>
            <div class="basis-3/4 w-3/4">
                <div class="flex flex-col gap-5 p-5">
                    <div class="mt-5 text-left font-semibold flex justify-between ">
                        <div>
                            <span class="text-xl">Title</span>
                        </div>
                        <div>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                        </div>
                    </div>

                    <div class="flex-row justify-around text-left ">
                        <a href="#" class="text-gray-500 text-sm border border-gray-300 p-1 rounded-lg mr-2">
                            action
                        </a>
                        <a href="#" class="text-gray-500 text-sm border border-gray-300 p-1 rounded-lg mr-2">
                            action
                        </a>
                        <a href="#" class="text-gray-500 text-sm border border-gray-300 p-1 rounded-lg mr-2">
                            action
                        </a>
                        <a href="#" class="text-gray-500 text-sm border border-gray-300 p-1 rounded-lg mr-2">
                            action
                        </a>
                    </div>
                    <div class="text-left">
                        <span>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div>
        @livewire('movies.similar')
    </div>
</div>
