@section('header-actions')

    {{-- @if ($collaboration) --}}
    <div class="flex gap-2">
    <x-ui.button wire:click="test"
        class="text-2xs text-right text-white">
        <span class="text-lg">public</span>
    </x-ui.button>
    <x-ui.button wire:click="test"
        class="text-2xs first-line:text-white">
        <span class="text-lg">private</span>
    </x-ui.button>
    </div>
{{-- @endif --}}
@endsection
<div>

</div>

