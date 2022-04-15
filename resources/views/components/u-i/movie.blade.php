    <div class="w-52 h-80 bg-cover flex items-end justify-center  rounded-lg relative group transition ease-in-out duration-300"
        style="background-image: url('{{$imgUrl}}')">
        <div class="w-full h-full absolute bg-gradient-to-b  to-gray-800 from-transparent rounded-lg group-hover:to-gray-900 group-hover:duration-300"></div>
        <div class="z-10 -mb-3 text-center group-hover:mb-5 group-hover:duration-300 ">
            <h1 class="text-white text-x1 font-semibold tracking-tight">{{$name}}</h1>
            <div class="flex items-center flex-col mt-1 mb-2">
                <div class="flex">
                    @foreach (range(1, 5) as $item)
                        <i class="fa-solid fa-star @if ($item <= $rating) text-yellow-300 @else text-gray-300 @endif"></i>
                    @endforeach
                </div>
                <x-ui.button href="{{$url}}" color="error" class="mt-3 invisible opacity-0 group-hover:opacity-100 group-hover:visible group-hover:duration-300">Watch Now</x-ui.button>
            </div>
        </div>
    </div>

