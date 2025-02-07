<?php

namespace App\Livewire\AcademicDep;

use App\Models\Subject\Subject;
use App\Traits\QueryTrait;
use Livewire\Component;
use Livewire\WithPagination;


class DisplaySubjects extends Component
{
    use WithPagination;
    use QueryTrait;

    public function mount()
    {
        if (!auth()->check() || !auth()->user()->hasPermissionTo('display subjects')) {
            return redirect()->route('dashboard')->with('error', 'auth.unauthorized access');
        }
    }
    public function render()
    {
        try {
            $myQuery = Subject::where('name->en', 'like', "%$this->search%")
                ->orwhere('name->ar', 'like', "%$this->search%")->get();
            $subjects = $this->queryData("App\Models\Subject\Subject", $myQuery);

            return view('academic-dep.subjects.display-subjects', [
                    'subjects' => $subjects,
                ])->title('Subjects');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
