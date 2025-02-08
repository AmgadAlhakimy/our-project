<?php

namespace App\Livewire\FollowUp;

use App\Models\Classroom\Classroom;
use Livewire\Component;

class FollowUp extends Component
{

    public function render()
    {
        $classrooms = Classroom::all();
        return view('layouts.teachers.teachers',compact('classrooms'));
    }
}
