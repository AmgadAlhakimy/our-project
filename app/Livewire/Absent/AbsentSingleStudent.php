<?php

namespace App\Livewire\Absent;

use App\Models\Absent;
use App\Models\Student\Student;
use Carbon\Carbon;
use Livewire\Component;

class AbsentSingleStudent extends Component
{
    public $student_id;
    public $search_date = '';
    public function render()
    {
        $student = Student::findorFail($this->student_id);
        $this->date = Carbon::now()->format('Y-m-d');

    if ($this->search_date > 0 ) {
        $absences = Absent::where('student_id', $this->student_id)
        ->where('created_at', 'like', "%$this->search_date%")->get();
    } else {
        $absences = Absent::where('student_id', $this->student_id)->get();
    }
        return view('teachers-affairs.absence.absent-single-student',
        compact('absences','student'));
    }
}
