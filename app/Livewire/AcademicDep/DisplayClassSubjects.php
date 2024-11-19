<?php

namespace App\Livewire\AcademicDep;

use App\Traits\QueryTrait;
use Livewire\Component;
use Livewire\WithPagination;

class DisplayClassSubjects extends Component
{
    use WithPagination;
    use QueryTrait;

    public function render()
    {
        try {
            $classrooms =  $this->queryData("\App\Models\Classroom\Classroom");
            return view('academic-dep.relationships.class-subjects.display-class-subjects',
                [
                    'classrooms' => $classrooms,
                ])->title('Classrooms-Subjects');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
