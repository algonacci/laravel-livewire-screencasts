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
</div>
