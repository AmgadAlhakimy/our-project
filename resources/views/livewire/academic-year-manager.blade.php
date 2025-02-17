<div class="p-4 bg-white shadow rounded">
    <h2 class="text-lg font-semibold mb-4">إدارة السنة الدراسية</h2>

    <p>السنة الدراسية الحالية: <strong>{{ $currentYear ?? 'غير محددة' }}</strong></p>

    <div class="mt-4">
        <input type="text" wire:model="newYear" placeholder="مثال: 2025-2026"
               class="border p-2 rounded w-full">
        <button wire:click="createNewYear" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">
            إضافة السنة الدراسية
        </button>
    </div>

    @if(session()->has('success'))
        <p class="text-green-500 mt-2">{{ session('success') }}</p>
    @endif

    @if(session()->has('error'))
        <p class="text-red-500 mt-2">{{ session('error') }}</p>
    @endif
</div>

