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
        @auth
            <div class=" block p-2 mb-10 bg-gray-100 rounded-lg border border-gray-200  px-4" x-data="{ expanded: false }">
                <button class="w-full flex justify-between items-center" @click="expanded = ! expanded">
                    <span class="text-md" :class="expanded ? 'text-red-500' : 'text-gray-800'">
                        Welcome {{ auth()->user()->name }} 👋
                    </span>
                    <i :class="expanded ? 'fa-angle-up text-red-500' : 'fa-angle-down text-gray-800' "
                        class="ml-5 fa-solid  group-hover:text-red-500 transition duration-75"></i>
                </button>
                <ul class="space-y-1 mt-3 border-t pt-3" x-show="expanded" x-collapse>
                    <li>
                        <a href=""
                            class="flex  items-center py-2  px-4 text-base font-normal  text-gray-900    rounded-lg group hover:bg-gray-200 ">
                            <i
                                class=" fa-solid fa-archway   text-gray-500 group-hover:text-gray-900     transition duration-75   "></i>
                            <span class="ml-3">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="flex  items-center py-2  px-4 text-base font-normal  text-gray-900    rounded-lg group hover:bg-gray-200 ">
                            <i
                                class=" fa-solid fa-archway   text-gray-500 group-hover:text-gray-900     transition duration-75   "></i>
                            <span class="ml-3">Profile</span>
                        </a>
                    </li>
                </ul>
            </div>
        @endauth

        
        @foreach ($tabs as $tab)
            <div class="mb-5 @if (!$loop->first) mt-10 @endif ml-3 text-left  text-gray-300  ">
                {{ $tab->title }}
            </div>
            <ul class="space-y-2 ml-3 ">
                @foreach ($tab->items as $item)
                    <li>
                        <a href="{{ route($item->route) }}"
                            class="flex  items-center py-2  px-4 text-base font-normal @if ($item->active) text-red-500 @else text-gray-900 @endif rounded-lg group hover:bg-gray-100 ">
                            <i
                                class=" {{ $item->icon }}  @if ($item->active) text-red-500 group-hover:text-red-500 @else text-gray-500 group-hover:text-gray-900 @endif transition duration-75   "></i>
                            <span class="ml-3">{{ $item->title }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        @endforeach
</aside>
