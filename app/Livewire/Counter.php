<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Counter extends Component
{
    #[Title('Counter page')]
    public function render()
    {
        return view('livewire.counter');
    }
}
