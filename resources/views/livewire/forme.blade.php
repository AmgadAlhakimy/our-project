<div class="section">
    <form wire:submit="saveMe">
        <div>
            <label for="name">Name:</label>
            <input type="text" wire:model="forMeForm.name" id="name" class="border border-gray-300 p-2 rounded">
            @error('forMeForm.name')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
    </form>
</div>
