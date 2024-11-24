<?php

namespace App\Livewire\AcademicDep;

use App\Models\Activity\Activity;
use App\Traits\QueryTrait;
use Livewire\Component;
use Livewire\WithPagination;

class DisplayActivities extends Component
{
    use WithPagination;
    use QueryTrait;

    public function render()
    {
        try {
            $myQuery = Activity::where('name->en', 'like', "%$this->search%")
                ->orwhere('name->ar','like',"%$this->search%")
                ->orwhere('location->en','like',"%$this->search%")
                ->orwhere('location->ar','like',"%$this->search%")
                ->orwhere('contact','like',"%$this->search%")
                ->orwhere('date','like',"%$this->search%")->get();
            $activities =  $this->queryData("\App\Models\Activity\Activity", $myQuery);

            return view('academic-dep.activities.display-activities', [
                    'activities' => $activities,
                ])->title('Activities');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
