<div>
    @guest
        <x-ui.button wire:click="login">
            login
        </x-ui.button>
    @else
        @forelse ($participants as $item)
            <li class="mb-3 ml-8 rounded-lg border-red-200 p-3" >
                <span
                    class="flex absolute -left-2 mt-2 justify-center items-center w-4 h-4 bg-red-300 rounded-full ring-8 ring-red-100">
                </span>
                <span class="flex items-center text-lg font-semibold text-gray-500">
                    {{ $item->user->name}}
                    <time
                        class="ml-2 text-2xs font-normal leading-none text-gray-400">{{ $item->created_at->diffForHumans() }}</time>
                </span>
            </li>
        @empty
            <div class="text-center text-gray-500">
                <span class="text-xl">No participants</span>
            </div>
        @endforelse
    @endguest
</div>z
