<?php

namespace App\Livewire\StudentsAffairs\Parents;

use App\Models\Parents\Parents;
use App\Traits\QueryTrait;
use Livewire\Component;
use Livewire\WithPagination;

class DisplayParents extends Component
{

    use WithPagination;
    use QueryTrait;

    public function mount()
    {
        if (!auth()->check() || !auth()->user()->hasPermissionTo('display superiors')) {
            return redirect()->route('dashboard')->with('error', 'auth.unauthorized access');
        }
    }
    public function render()
    {
        try {
            $myQuery = Parents::where('father_name->en', 'like', "%$this->search%")
                ->orwhere('father_name->ar', 'like', "%$this->search%")
                ->orwhere('father_work->en', 'like', "%$this->search%")
                ->orwhere('father_work->ar', 'like', "%$this->search%")
                ->orwhere('father_contact1', 'like', "%$this->search%")
                ->orwhere('father_contact2', 'like', "%$this->search%")
                ->orwhere('mother_name->en', 'like', "%$this->search%")
                ->orwhere('mother_name->ar', 'like', "%$this->search%")
                ->orwhere('mother_work->en', 'like', "%$this->search%")
                ->orwhere('mother_work->ar', 'like', "%$this->search%")
                ->orwhere('mother_contact1', 'like', "%$this->search%")
                ->orwhere('mother_contact2', 'like', "%$this->search%")
                ->orwhere('kin_name->en', 'like', "%$this->search%")
                ->orwhere('kin_name->ar', 'like', "%$this->search%")
                ->orwhere('kin_relationship->en', 'like', "%$this->search%")
                ->orwhere('kin_relationship->ar', 'like', "%$this->search%")
                ->orwhere('kin_contact', 'like', "%$this->search%")->get();


            $parents = $this->queryData("App\Models\Parents\Parents", $myQuery);
            return view('students-affairs.parents.display-parents', [
                'parents' => $parents,
            ])->title('parents');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
