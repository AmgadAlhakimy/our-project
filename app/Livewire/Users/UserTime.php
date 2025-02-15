<?php

namespace App\Livewire\Users;

use Carbon\Carbon;
use Livewire\Component;

class UserTime extends Component
{
    public $dateTime;

    public function mount()
    {
        $this->dateTime = Carbon::now()->format('Y-m-d H:i:s');
    }

    public function updateDateTime()
    {
        $this->dateTime = Carbon::now()->format('Y-m-d H:i:s');
    }
    public function render()
    {
        return view('layouts.user-time');
    }
}
