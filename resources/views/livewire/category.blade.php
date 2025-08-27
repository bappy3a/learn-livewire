<div>
    <h1>Create New Category</h1>
    <form wire:submit.prevent="categoryStore">
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" wire:model.live='name'>
        </div>
        <div>
            <label for="sub_title">Sub Title</label>
            <input type="text" id="sub_title" wire:model.live="sub_title">
        </div>
        <div>
            <label for="body">Body</label>
            <input type="text" id="body" wire:model.live="body">
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" id="image" wire:model.live="image">
        </div>
        <div>
            <input type="submit" value="submit">
        </div>
    </form>
</div>