<div class="user_name">
    <div class="">
        <span class=" form-label fonts-6  ">{{ Auth::user()->name }}</span>
        <span wire:poll.1s="updateDateTime" class="title-3 fonts-6">{{ $dateTime  }}</span>
    </div>
</div>