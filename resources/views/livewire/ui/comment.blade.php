<div class="mt-3 relative border rounded-lg p-3 group" x-data="{ all_comments: false }">
    <div @click="all_comments=!all_comments" x-show="!all_comments" class="absolute cursor-pointer group-hover:visible invisible w-full h-full left-0 top-0 bg-gray-200 rounded-lg z-30 flex flex-col items-center justify-center text-xl text-gray-500">
        <i class="fa-solid fa-2x fa-comment"></i>
        <span>Show Comments</span>
    </div>
    <ol class="relative border-l border-red-200 text-left m-5">
        <li class="mb-10 ml-8 border rounded-lg border-red-200 p-3">
            <span class="flex absolute -left-2 mt-2 justify-center items-center w-4 h-4 bg-red-300 rounded-full ring-8 ring-red-100">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
            </span>
            <span class="flex items-center text-lg font-semibold text-red-400">
                New Comment
            </span>
            <form wire:submit.prevent="comment">
                <textarea wire:model.lazy="comment" id="message" rows="2" cols="6"
                    class="block mt-3 p-2.5 w-full text-sm text-red-900 bg-red-50 rounded-lg border border-red-300 focus:ring-red-500 focus:border-red-500 "
                    placeholder="Leave a comment..."></textarea>
                <button type="submit"
                    class="focus:outline-none flex justify-items-start mt-4 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Comment</button>
            </form>
        </li>
        @forelse ($comments as $item)
            <li class="mb-3 ml-8 rounded-lg border-red-200 p-3" x-show="all_comments">
                <span
                    class="flex absolute -left-2 mt-2 justify-center items-center w-4 h-4 bg-red-300 rounded-full ring-8 ring-red-100">
                </span>
                <span class="flex items-center text-lg font-semibold text-gray-500">
                    {{ $item->user->name }}
                    <time
                        class="ml-2 text-2xs font-normal leading-none text-gray-400">{{ $item->created_at->diffForHumans() }}</time>
                </span>
                <p class="text-base font-normal text-gray-900">{{ $item->body }}</p>
            </li>
        @empty
            <div class="text-center text-gray-500">
                <span class="text-xl">No Comments</span>
            </div>
        @endforelse
    </ol>
    {{ $comments->links() }}
</div>
