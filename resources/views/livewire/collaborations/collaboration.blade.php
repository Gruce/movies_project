@section('title', 'Collaboration rooms')

<div>
    <div class="grid grid-cols-6 mt-3" wire:poll>
        @forelse ($collaborations as $collaboration)
            <livewire:ui.collaboration :collaboration="$collaboration->id" />
        @empty
            <div class="p-3 text-gray-500 bg-gray-100 rounded-lg">
                No current collaborations
            </div>
        @endforelse
    </div>

    {{-- <div class="grid grid-cols-6 mt-3" wire:poll>
        @forelse ($participants as $participant)
            <livewire:participant :participant="$collaboration->participants->count()" />
        {{ dd('ok'); }}
        @empty
            <div class="p-3 text-gray-500 bg-gray-100 rounded-lg">
                No participants yet
            </div>
        @endforelse
    </div> --}}
</div>
