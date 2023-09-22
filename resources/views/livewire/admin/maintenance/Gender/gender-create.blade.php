<div>
    <h1 class="text-base font-semibold md:text-2xl"></h1>
    <x-container title="Gender Create Information" routeBackBtn="" titleBackBtn="" disableBackBtn="">
        <div class="grid sm:grid-cols-3 gap-6 items-center">
            <x-input wire:model="description" label="Gender Name" placeholder="" />
            <x-input wire:model="code" label="Code" placeholder="" />
            <x-toggle left-label="Status" wire:model.defer="status" />
            <div class="flex gap-3">
                <x-button wire:click="cancel" squared label="Cancel" />
                <x-button wire:click="submit" squared positive label="Create" />
            </div>
        </div>
    </x-container>
</div>
