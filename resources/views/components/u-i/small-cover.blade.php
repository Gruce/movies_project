<a href="#" class="max-w-sm bg-white rounded-lg p-2 flex mt-3 hover:bg-gray-100">
         <img class="rounded-lg h-24 basis-1/3" src="{{$imgUrl}}" />
    <div class="px-2 w-full flex flex-col items-start basis-2/3">
            <h1 class="font-semibold text-left">{{$name}}</h1>
            <p class="text-xs text-gray-500">{{$category}}</p>
            <div class="flex mt-1">
                <span class="bg-yellow-300   text-gray-800 text-2xs   mr-1 px-1 py-0.25 rounded ">IMDB</span>
                <p class="text-xs"> {{$rating}} </p>
            </div>
            <x-ui.icon-button icon="fa-regular fa-clock" class="w-4 h-4 text-xl mt-2"/>
    </div>
</a>