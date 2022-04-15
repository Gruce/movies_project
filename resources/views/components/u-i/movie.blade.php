    <div class="w-52 h-80 bg-cover flex items-end justify-center rounded-lg relative group transition ease-in-out duration-300"
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
                <div class="flex gap-1 mt-3 invisible opacity-0 group-hover:opacity-100 group-hover:visible group-hover:duration-300">
                    <x-ui.button href="{{$url}}" color="error">Watch Now</x-ui.button>
                </div>
            </div>
        </div>
        <x-ui.icon-button color="secondary" class="top-0 left-0 absolute" href="#">
            <i class="fa-solid fa-clock fa-2x"></i>
        </x-ui.icon-button>
    </div>

