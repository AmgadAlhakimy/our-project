<?php

namespace App\Livewire\FollowUp;

use App\Models\Classroom\Classroom;
use App\Models\FollowUpChild;
use App\Models\Student\Student;
use Carbon\Carbon;
use Livewire\Component;

class FollowUpNoteBook extends Component
{
    public $student_id;
    public $classroom_id;
    public string $search_date = '';
    public string $search = '';
    public string $date = '';


    public function render()
    {
        $student = Student::findorFail($this->student_id);
        $classroom = Classroom::where('id', $this->classroom_id)->first();
        $this->date = Carbon::now()->format('Y-m-d');
        if ($this->search > 0) {
            $student_notebooks = FollowUpChild::where('student_id', $this->student_id)
                ->where(function ($query) {
                    $query->where('homework', 'like', "%$this->search%")
                        ->orWhere('bath->en', 'like', "%$this->search%")
                        ->orWhere('bath->ar', 'like', "%$this->search%")
                        ->orWhere('snack->en', 'like', "%$this->search%")
                        ->orWhere('snack->ar', 'like', "%$this->search%")
                        ->orWhere('food->en', 'like', "%$this->search%")
                        ->orWhere('food->ar', 'like', "%$this->search%");

                })
                ->get();
        } elseif ($this->search_date > 0 ) {
            $student_notebooks = FollowUpChild::where('student_id', $this->student_id)
                ->where('created_at', 'like', "%$this->search_date%")->get();
        } else {
            $student_notebooks = FollowUpChild::where('student_id', $this->student_id)->get();
        }
        return view('teachers-affairs.follow_up_children.follow-up-note-book',
            compact('student_notebooks', 'classroom', 'student'));
    }
}
