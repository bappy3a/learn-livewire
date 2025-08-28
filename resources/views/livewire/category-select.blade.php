<div>
    <label>Category:</label>
    <select wire:model.live="selectedCategory" class="form-control">
        <option value="">Select Category</option>
        @foreach($categories as $category)
            <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
        @endforeach
    </select>

    <p>Selected category: {{ $selectedCategory }}</p>
</div>
