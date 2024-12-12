<div>
    <form wire:submit.prevent="form.save">
        <input type="text" wire:model="form.name" placeholder="Name">
        <button type="submit">Save</button>
    </form>
</div>
