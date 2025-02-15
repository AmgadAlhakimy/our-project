<?php

namespace App\Livewire\Leaving;

use App\Models\Absent;
use App\Models\Leaving;
use App\Models\Student\Student;
use Carbon\Carbon;
use Livewire\Component;

class LeftSingleStudent extends Component
{
    public $student_id;
    public $leftRecords;
    public $student;

    public function mount($student_id)
    {
        $this->student_id = $student_id;
        $this->student = Student::findOrFail($student_id);
        $this->leftRecords = Leaving::where('student_id', $student_id)->get();
    }

    public function render()
    {
        return view('teachers-affairs.leaving.left-single-student', [
            'leftRecords' => $this->leftRecords,
            'student' => $this->student
        ]);
    }
}
