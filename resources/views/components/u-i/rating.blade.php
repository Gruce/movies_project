<div class="flex">
    @foreach (range(1, 5) as $item)
        <i class="fa-solid fa-star @if ($item <= $rating) text-yellow-300 @else text-gray-300 @endif"></i>
    @endforeach
</div>
