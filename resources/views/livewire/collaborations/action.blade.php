<div class="flex justify-end gap-2 grow">
    <div class="flex flex-col items-end w-1/2 basis-1/2">
        <label for="checked-toggle" class="relative inline-flex items-center mb-1 cursor-pointer">
            <input @if ($collaboration->public) checked @endif wire:model="collaboration.public" type="checkbox" id="checked-toggle" class="sr-only peer">
            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                @if ($collaboration->public)
                Public
                @else
                Private
                @endif
                Collaboration
            </span>
        </label>
        <small class="text-xs text-gray-400">
            @if ($collaboration->public)
            Public will <span class="font-semibold text-blue-400">allow</span> anybody to join this collaboration.
            @else
            Private will <span class="font-semibold text-red-400">prevent</span> anybody to join this collaboration except ones got the link.
            @endif
        </small>
    </div>
</div>
