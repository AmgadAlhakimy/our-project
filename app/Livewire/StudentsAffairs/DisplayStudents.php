<?php

namespace App\Livewire\StudentsAffairs;

use App\Models\Classroom\Classroom;
use App\Models\Student;
use Livewire\Component;

class DisplayStudents extends Component
{
    public function render()
    {
        $students = Student::paginate(20);
        $classrooms= Classroom::all();
        return view('livewire.display-students',
        compact('students','classrooms')
        )->title('Students');
    }
}
