<?php

namespace App\Livewire;

use App\Models\Classroom\Classroom;
use Livewire\Component;

class FollowUp extends Component
{
    public $test = 1;

    public function render()
    {
        $classrooms = Classroom::all();
        return view('layouts.teachers.teachers',compact('classrooms'));
    }
}
