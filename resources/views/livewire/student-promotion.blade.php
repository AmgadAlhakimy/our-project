<div class="my-table mt-5">
    <div class="table-header ">
    <button wire:click="promoteStudents" class="bg-blue-500 text-white px-4 py-2 rounded">
        ترحيل الطلاب للصف التالي
    </button>

    @if (session()->has('message'))
        <div class="mt-2 text-green-500">
            {{ session('message') }}
        </div>
    @endif
</div>
</div>
