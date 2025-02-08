<?php

namespace App\Livewire\StudentsAffairs\Student;

use App\Models\Classroom\Classroom;
use Livewire\Component;

class StudentsDisplaySidebar extends Component
{
    public function render()
    {
        $classrooms= Classroom::all();
        return view('layouts.students-affairs.students',compact('classrooms'));
    }
}
