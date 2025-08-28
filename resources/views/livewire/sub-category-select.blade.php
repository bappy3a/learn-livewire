<div>
    <label>SubCategory:</label>
    <select class="form-control" @if(count($subcategories) === 0) disabled @endif>
        <option value="">Select SubCategory</option>
        @foreach($subcategories as $sub)
            <option value="{{ $sub->id }}">{{ $sub->name }}</option>
        @endforeach
    </select>

    <p class="text-info">Currently loaded: {{ $subcategories->count() }} subcategories</p>
</div>
