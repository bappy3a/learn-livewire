<div>
    <h5>{{ $title }}</h5>

    <input type="text" wire:model.live="title">

    {{-- <input type="checkbox" wire:model.live="checkme">

    <select wire:model.live='selectid'>
        <option value="hello">Hello</option>
        <option value="hello 1">Hello 1</option>
        <option value="hello 2">Hello 2</option>
        <option value="hello 3">Hello 3</option>
        <option value="hello 4">Hello 4</option>
    </select>

    <button wire:click="$set('title','Ahmed Bappy')" >Set New Name</button>
    <button wire:click="chnageName('Masba Islam')" >Set Rendor Name</button>
    <button wire:mouseenter="chnageName('Masba Islam')" >Mouse Enter</button>
    <br>
    <form action="#" wire:submit.prevent="chnageNameForm('Hello I am Bappy')" >
        <button type="submit">Submit</button>
    </form>

    <br>
    @if ($checkme)
        <h2>Button Is Enable</h2>
    @endif
    @if ($selectid)
        <h2>Select Button is value {{ $selectid }} </h2>
    @endif --}}
</div>
