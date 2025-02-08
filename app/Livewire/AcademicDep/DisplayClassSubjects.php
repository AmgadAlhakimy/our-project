<?php

namespace App\Livewire\AcademicDep;

use App\Models\Classroom\Classroom;
use App\Traits\QueryTrait;
use Livewire\Component;
use Livewire\WithPagination;

class DisplayClassSubjects extends Component
{
    use WithPagination;
    use QueryTrait;
    public function mount()
    {
        if (!auth()->check() || !auth()->user()->hasPermissionTo('display subjects-classes')) {
            return redirect()->route('dashboard')->with('error', 'auth.unauthorized access');
        }
    }
    public function render()
    {
        try {
        $myQuery = Classroom::where('name->en', 'like', "%$this->search%")
            ->orwhere('name->ar', 'like', "%$this->search%")->get();
            $classrooms = $this->queryData("\App\Models\Classroom\Classroom", $myQuery);

            return view('academic-dep.relationships.class-subjects.display-class-subjects', [
                'classrooms' => $classrooms,
            ])->title('Classrooms-Subjects');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
