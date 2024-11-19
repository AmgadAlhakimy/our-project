<?php

namespace App\Livewire\AcademicDep;

use App\Models\Activity\Activity;
use App\Traits\QueryTrait;
use Livewire\Component;
use Livewire\WithPagination;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class DisplayActivities extends Component
{
    use WithPagination;
    use QueryTrait;



    public function render()
    {
        try {
            $activities =  $this->queryData("\App\Models\Activity\Activity");
            return view('academic-dep.activities.display-activities',
                [
                    'activities' => $activities,
                ])->title('Activities');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
