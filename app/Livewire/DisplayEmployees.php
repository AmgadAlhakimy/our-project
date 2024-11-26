<?php

namespace App\Livewire;

use App\Traits\QueryTrait;
use Livewire\Component;
use Livewire\WithPagination;

class DisplayEmployees extends Component
{
    use WithPagination;

    use QueryTrait;

    public function render()
    {
        return view('livewire.display-employees');
    }
}
