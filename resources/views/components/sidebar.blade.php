<aside class="w-64 sticky top-0 py-5 " aria-label="Sidebar ">
    <div class="overflow-y-auto h-screen  px-3">
        <div class="mb-10">
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray  rounded-lg  ">
                <svg class="w-6 h-6 text-gray transition duration-75 text-red-500 " fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
                <span class="ml-3 font-bold">Dashboard</span>
            </a>
        </div>
        @foreach ($tabs as $name => $tab)
        <div class="mb-5 @if(!$loop->first) mt-10  @endif ml-3 text-left  text-gray-300  ">
            {{$name}}
        </div>
            @foreach ($tab as $item)
                <ul class="space-y-2 ml-3 ">
                    <li>
                        <a href="{{$item['route']}}"
                            class="flex  items-center py-2  px-4 text-base font-normal @if($item['active']) text-red-500 @else text-gray-900  @endif rounded-lg group hover:bg-gray-100 ">
                            <i class=" {{$item['icon']}}  @if($item['active']) text-red-500 group-hover:text-red-500 @else text-gray-500 group-hover:text-gray-900  @endif transition duration-75   "></i>
                            <span class="ml-3">{{$item['name']}}</span>
                        </a>
                    </li>

                </ul>
            @endforeach
        @endforeach
</aside>
