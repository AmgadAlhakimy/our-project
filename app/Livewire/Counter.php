<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $num=10;

    public function add()
    {
        $this->num++;
    }
    public function sub()
    {
        $this->num--;

    }
    public function render()
    {
        return view('livewire.counter');
    }
}
