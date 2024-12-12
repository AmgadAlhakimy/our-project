<?php

namespace App\Livewire;

use App\Livewire\Forms\TestForm;
use Livewire\Component;

class MyTest extends Component
{
//    public $form;

//    public function mount()
//    {
//        $this->form = new TestForm();
//    }

    public function render()
    {
        return view('academic-dep.educational-levels.create-edu-level');
    }
}
