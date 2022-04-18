<div>
    <div class="flex">
        @if ($listen)
            @foreach (range(1, 5) as $item)
                <i wire:click="select({{ $item }})"
                    class="fa-solid cursor-pointer @if ($item <= $rating) text-yellow-300 @else text-gray-300 @endif fa-star"></i>
            @endforeach
        @else
            @foreach (range(1, 5) as $item)
                <i
                    class="fa-solid fa-star @if ($item <= $rating) text-yellow-300 @else text-gray-300 @endif"></i>
            @endforeach
        @endif
    </div>

</div>
