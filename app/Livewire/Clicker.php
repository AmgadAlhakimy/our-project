<?php

namespace App\Livewire;

use Livewire\Component;

class Clicker extends Component
{
    public function handel()
    {
        dump('clicked');
    }
    public function render()
    {
        return view('livewire.clicker');
    }
}
