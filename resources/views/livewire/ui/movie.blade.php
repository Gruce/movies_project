<div class="w-52 h-80 bg-cover flex items-end justify-center rounded-lg relative group transition ease-in-out duration-300"
    style="background-image: url('{{ $imgUrl }}')">
    <div
        class="w-full h-full absolute bg-gradient-to-b  to-gray-800 from-transparent rounded-lg group-hover:to-gray-900 group-hover:duration-300">
    </div>
    <div class="z-10 -mb-3 text-center group-hover:mb-5 group-hover:duration-300 ">
        <h1 class="text-white text-x1 font-semibold tracking-tight">{{ $name }}</h1>
        <div class="flex items-center flex-col mt-1 mb-2">
            <x-ui.rating :rating="$rating" />
            <div
                class="flex gap-1 mt-3 invisible opacity-0 group-hover:opacity-100 group-hover:visible group-hover:duration-300">
                <x-ui.button href="{{ $url }}" color="error">Watch Now!</x-ui.button>
            </div>
        </div>
    </div>
    <div class="top-2 right-2 absolute flex flex-col gap-2">
        <x-ui.icon-button icon="fa-solid fa-clock" color="light2"
            class="text-lg invisible opacity-0 group-hover:opacity-100 group-hover:visible group-hover:duration-300" />
        <x-ui.icon-button icon="fa-solid fa-bookmark" color="light2"
            class="text-lg invisible opacity-0 group-hover:opacity-100 group-hover:visible group-hover:duration-300" />
    </div>
    <div
        class="top-0 left-0 absolute text-white bg-gradient-to-tl to-red-500 from-red-700  px-5 py-0.5 rounded-tl-[8px] rounded-br-[15px]">
        <i class="fa-solid fa-film"></i>
    </div>
</div>
