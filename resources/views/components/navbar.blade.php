<nav class="w-full bg-white border-b border-gray-200 px-2 sm:px-4 py-5 rounded ">
    <div class="container flex flex-wrap justify-between items-center mx-auto">

        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                @foreach ($navs as $nav)
                    <li>
                        <a href="{{ route('home', ['type' => $nav['route']]) }}"
                            class="block py-2 pr-4 pl-3 @if ($nav['active']) text-gray-700
                        @else
                        text-gray-400 @endif  text-lg font-bold  rounded md:bg-transparent  md:p-0 "
                            aria-current="page">{{ $nav['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
