<div class="user_name">
    <div class="">
        <span class=" form-label  ">{{ Auth::user()->name }}</span>
        <div wire:poll.1s="updateDateTime">
        <span class="title-3">{{ $dateTime  }}</span>
        </div>
    </div>
</div>
