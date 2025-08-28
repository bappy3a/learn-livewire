<div>
    <label for="small" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Select Division</label>
    <select wire:model.live="selectDivision" id="small" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Choose a division</option>
        @foreach ($divisions as $division)
            <option value="{{ $division->id }}">{{ $division->bn_name  }}</option>
        @endforeach
    </select>
</div>