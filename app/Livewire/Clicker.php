<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Clicker extends Component
{
    #[Title('The Clicker Page')]
    public function render()
    {
        return view('livewire.clicker');
    }
}
