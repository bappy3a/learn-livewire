<div>
    <table>
        <tr>
            <th>No:</th>
            <th>Name</th>
            <th>Image</th>
            <th>Sub Title</th>
            <th>Body</th>
        </tr>
        @forelse ($categories as $key => $category)
            <tr>
                <th>{{ $key+1 }}</th>
                <th>{{ $category->name }}</th>
                <th><img src="{{ asset($category->image) }}" alt="" width="60" height="60"></th>
                <th>{{ $category->sub_title }}</th>
                <th>{{ $category->body }}</th>
            </tr>
        @empty

        @endforelse
    </table>
</div>