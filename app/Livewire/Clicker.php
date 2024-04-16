<?php

namespace App\Livewire;

use Livewire\Component;

class Clicker extends Component
{
    public $num= 10;
    public function add()
    {
        $this->num++;
    }
    public function sub()
    {
        $this->num--;
    }
    public function handelClick()
    {
        dump("clicked");
    }

    public function render()
    {
        return view('livewire.clicker');
    }
}
