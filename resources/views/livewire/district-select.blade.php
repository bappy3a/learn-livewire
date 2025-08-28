<div>
    <label for="default" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Select District</label>
    <select wire:model.live="selectDurations" @if(count($districts) == 0) disabled @endif id="default" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Choose a district</option>
        @foreach ($districts as $district)
            <option value="{{ $district->id }}">{{ $district->bn_name }}</option>
        @endforeach
    </select>
</div>
