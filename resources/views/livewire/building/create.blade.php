<div>
    <x-input
        wire:model="name"
        label="Building Name"
    />
    <x-textarea wire:model="address" label="Address" />
    <x-button label="Create" wire:click="create" />
</div>
