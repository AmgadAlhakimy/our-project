<div class="my-table mt-5">
    <div class="table-header ">
        <h2>{{trans('student.transferring students to the new academic year')}}</h2>
        <button wire:click="promote"
                class="save-button text-center">
            <i class="fas fa-user-plus"></i> {{trans('student.student deportation')}}</button>

        @if(session()->has('success'))
            <p class="text-green-500">{{ session('success') }}</p>
        @endif

        @if(session()->has('error'))
            <p class="text-red-500">{{ session('error') }}</p>
        @endif
    </div>
    <div>
        @livewire('academic-year-manager')
    </div>
</div>
