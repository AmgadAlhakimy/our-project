<?php

namespace App\Livewire;
use Livewire\Component;

class StudentForm extends Component
{
    public $title = 'student and parents';
    public function render()
    {
        return view('livewire.student-form');
    }
}
