<div>

    <input type="text" wire:model.live.lazy="name">

    <input type="checkbox" wire:model.live="loud">

    <select wire:model.live="greeting" multiple>
        <option>Hello</option>
        <option>Good bye</option>
        <option>Adios</option>
    </select>


    {{ implode(', ', $greeting) }} {{ strtoupper($name) }} @if ($loud)
        !!!
    @endif

    <button wire:click="resetName('Bingo')">Reset Name</button>

    <form action="#" wire:submit.prevent="$set('name', 'FORM')">
        <button>Reset Name</button>
    </form>

    <p>{{ $age }}</p>

    <br><br>
    <hr>

    @foreach ($names as $name)
        @livewire('say-hi', ['name' => $name])
    @endforeach
</div>
