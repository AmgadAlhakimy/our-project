<?php

namespace App\Livewire\AcademicDep;

use App\Models\EducationalLevel;
use App\Traits\QueryTrait;
use Livewire\Component;
use Livewire\WithPagination;

class DisplayEducationalLevels extends Component
{
    use WithPagination;
    use QueryTrait;

    public function mount()
    {
        if (!auth()->check() || !auth()->user()->hasPermissionTo('display educational-levels')) {
            return redirect()->route('dashboard')->with('error', 'auth.unauthorized access');
        }
    }

    public function render()
    {
        try {
            $myQuery = EducationalLevel::where('name->en', 'like', "%$this->search%")
                ->orwhere('name->ar', 'like', "%$this->search%")->get();
            $levels = $this->queryData("App\Models\EducationalLevel", $myQuery);

            return view('academic-dep.educational-levels.display-edu-level', [
                    'levels' => $levels,
                ])->title('Educational Levels');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
