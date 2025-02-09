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
    public function mount()
    {
        if (!auth()->check() || !auth()->user()->hasPermissionTo('display students')) {
            return redirect()->route('dashboard')->with('error', 'auth.unauthorized access');
        }
    }

    public function render()
    {
        $whereClause = ['classroom_id' => $this->classroom_id];
        $classroom = Classroom::findorFail($this->classroom_id);
        try {
            $myQuery = Student::where('id', 'like', "%$this->search%")
                        ->orWhere('name->en', 'like', "%$this->search%")
                        ->orWhere('name->ar', 'like', "%$this->search%")
                        ->orWhere('address->en', 'like', "%$this->search%")
                        ->orWhere('address->ar', 'like', "%$this->search%")
                        ->orWhere('gender->en', 'like', "%$this->search%")
                        ->orWhere('gender->ar', 'like', "%$this->search%")
                        ->orWhere('place_of_birth->en', 'like', "%$this->search%")
                        ->orWhere('place_of_birth->ar', 'like', "%$this->search%")
                        ->orWhere('medicine_desc->en', 'like', "%$this->search%")
                        ->orWhere('medicine_desc->ar', 'like', "%$this->search%")
                        ->orWhere('allergy_desc->en', 'like', "%$this->search%")
                        ->orWhere('allergy_desc->ar', 'like', "%$this->search%")
                        ->orWhere('health_problem_desc->en', 'like', "%$this->search%")
                        ->orWhere('health_problem_desc->ar', 'like', "%$this->search%")
                        ->orWhereHas('parents', function ($query) {
                            $query->where('father_name->en', 'like', "%$this->search%")
                                ->orWhere('father_name->ar', 'like', "%$this->search%");

                })->get();

            $students = $this->queryData("\App\Models\Student\Student", $myQuery, $whereClause);
            return view('students-affairs.Students.display-Students', [
                'students' => $students,
                'classroom' => $classroom,
            ])->title('Students');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
