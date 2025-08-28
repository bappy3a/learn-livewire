<div>
    <label for="large" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Large select</label>
    <select @if(count($upazilas) == 0) disabled @endif id="large"
        class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Choose a upazilas</option>
        @foreach ($upazilas as $upazila)
            <option value="{{ $upazila->id }}">{{ $upazila->bn_name }}</option>
        @endforeach
    </select>
</div>
