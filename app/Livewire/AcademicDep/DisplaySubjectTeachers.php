<?php

namespace App\Livewire\AcademicDep;

use App\Models\Teacher\Teacher;
use App\Traits\QueryTrait;
use Livewire\Component;
use Livewire\WithPagination;

class DisplaySubjectTeachers extends Component
{
    use WithPagination;
    use QueryTrait;
    public function render()
    {  try {
        $myQuery = Teacher::where('name->en', 'like', "%$this->search%")
            ->orwhere('name->ar', 'like', "%$this->search%")->get();
        $teachers = $this->queryData("App\Models\Teacher\Teacher", $myQuery);

        return view('academic-dep.relationships.subject-teachers.display-subject-teachers',
            [
                'teachers' => $teachers,
            ])->title('Teachers-Subjects');
    } catch (\Exception $e) {
        return redirect()->back()->with(['error' => $e->getMessage()]);
    }
    }
}
