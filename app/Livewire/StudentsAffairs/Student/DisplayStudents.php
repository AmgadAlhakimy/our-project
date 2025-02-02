<?php

namespace App\Livewire\StudentsAffairs\Student;

use App\Models\Classroom\Classroom;
use App\Models\Student\Student;
use App\Traits\QueryTrait;
use Livewire\Component;
use Livewire\WithPagination;

class DisplayStudents extends Component
{
    use WithPagination;
    use QueryTrait;

    
    public $classroom_id;
    
    public function render()
    {
        $whereClause = ['classroom_id' => $this->classroom_id];
        $classroom =Classroom::where('id',$this->classroom_id)->first();
        try {
            $myQuery = Student::where('id', 'like', "%$this->search%")
                ->orwhere('name->en', 'like', "%$this->search%")
                ->orwhere('name->ar', 'like', "%$this->search%")
                ->orwhere('address->en', 'like', "%$this->search%")
                ->orwhere('address->ar', 'like', "%$this->search%")
                ->orwhere('gender->en', 'like', "%$this->search%")
                ->orwhere('gender->ar', 'like', "%$this->search%")
                ->orwhere('place_of_birth->en', 'like', "%$this->search%")
                ->orwhere('place_of_birth->ar', 'like', "%$this->search%")
                ->orwhere('medicine_desc->en', 'like', "%$this->search%")
                ->orwhere('medicine_desc->ar', 'like', "%$this->search%")
                ->orwhere('allergy_desc->en', 'like', "%$this->search%")
                ->orwhere('allergy_desc->ar', 'like', "%$this->search%")
                ->orwhere('health_problem_desc->en', 'like', "%$this->search%")
                ->orwhere('health_problem_desc->ar', 'like', "%$this->search%")
                ->orwhereHas('parents', function ($query) {
                    $query->where('father_name->en', 'like', "%$this->search%")
                        ->orwhere('father_name->ar', 'like', "%$this->search%");
                })->get();

            $students = $this->queryData("\App\Models\Student\Student", $myQuery,$whereClause);
            return view('students-affairs.Students.display-Students', [
                'students' => $students,
                'classroom' => $classroom,
            ])->title('Students');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
