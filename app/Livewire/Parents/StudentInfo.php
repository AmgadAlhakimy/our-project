<?php

namespace App\Livewire\Parents;

use Livewire\Component;

class StudentInfo extends Component
{
    public $student_id;

    public function render()
    {

        try {
            if ($this->student_id) {
                return redirect()->route('student-more-info',$this->student_id);
            } else {
                return view('parents.student-info');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
