<?php

namespace App\Livewire\AcademicDep;

use App\Models\Classroom\Classroom;
use App\Traits\QueryTrait;
use Livewire\Component;
use Livewire\WithPagination;


class DisplayClassrooms extends Component
{
    use WithPagination;
    use QueryTrait;

    public function render()
    {
        try {
            $myQuery = Classroom::where('name->en', 'like', "%$this->search%")
                ->orwhere('name->ar', 'like', "%$this->search%")
                ->orwhereHas('level', function ($query) {
                    $query->where('name->en', 'like', "%$this->search%")
                        ->orwhere('name->ar', 'like', "%$this->search%");
                })->get();
            $classrooms = $this->queryData("\App\Models\Classroom\Classroom", $myQuery);

            return view('academic-dep.classrooms.display-classrooms', [
                'classrooms' => $classrooms,
            ])->title('Classrooms');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
