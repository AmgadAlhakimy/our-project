<?php

namespace App\Livewire\FollowUp;

use App\Models\Classroom\Classroom;
use Livewire\Component;

class FollowUp extends Component
{

    public function mount()
    {
        if (!auth()->check() || !auth()->user()->hasPermissionTo('followup notebook')) {
            return redirect()->route('dashboard')->with('error', 'auth.unauthorized access');
        }
    }
    public function render()
    {
        $classrooms = Classroom::all();
        return view('layouts.teachers.teachers',compact('classrooms'));
    }
}
