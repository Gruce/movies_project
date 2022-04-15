<a href="#" class="max-w-sm bg-white rounded-lg p-2 flex mt-3 hover:bg-gray-100">
         <img class="rounded-lg h-24 basis-1/3" src="{{$imgUrl}}" />
    <div class="px-2 w-full flex flex-col items-start basis-2/3">
            <h1 class="font-semibold text-left">{{$name}}</h1>
            <p class="text-xs text-gray-500">{{$category}}</p>
            <div class="flex mt-1">
                <span class="bg-yellow-300   text-gray-800 text-2xs   mr-1 px-1 py-0.25 rounded ">IMDB</span>
                <p class="text-xs"> {{$rating}} </p>
            </div>
        </div>

        <div class="flex justify-between gap-1 invisible opacity-0 group-hover:opacity-100 group-hover:visible group-hover:duration-300">
            <x-ui.button color="error" class="text-2xs py-0.5 px-1 text-white" href="#">
                Watch
            </x-ui.button>
            <x-ui.button color="secondary" class="text-2xs py-0.5 px-1 text-white" href="#">
                <i class="fa-solid fa-clock"></i>
            </x-ui.button>
        </div>
    </div>
</div>
