<?php

namespace App\Livewire;

use App\Models\Classroom\Classroom;
use Livewire\Component;

class StudentsDisplay extends Component
{
    public function mount()
    {
        if (!auth()->check() || !auth()->user()->hasPermissionTo('STUDENT AFFAIRS')) {
            return redirect()->route('dashboard')->with('error', 'auth.unauthorized access');
        }
    }
    public function render()
    {
        $classrooms= Classroom::all();
        return view('layouts.students-affairs.students',compact('classrooms'));
    }
}
