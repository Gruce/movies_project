<div wire:poll>
    @guest
        <x-ui.button wire:click="login">
            login
        </x-ui.button>
    @else
    <div class="mx-3 mb-3 text-2xl font-semibold text-gray-500">
        People in this collaboration
    </div>
    <div class="flex flex-col p-3 mx-3 bg-gray-100 rounded-lg">
        @forelse ($participants as $item)
            <div class="flex items-center p-3 my-1 space-x-4 bg-white rounded-lg">
                <img class="w-10 h-10 rounded-full" src="{{$item->user->profile_photo_url}}" alt="">
                <div class="font-medium text-left ">
                    <div>{{ $item->user->name}}</div>
                    <div class="text-sm text-gray-400">{{ $item->created_at->diffForHumans() }}</div>
                </div>
            </div>
        @empty
            <div class="text-center text-gray-500">
                <span class="text-xl">No participants</span>
            </div>
        @endforelse
    </div>
    @endguest
</div>
