<?php

namespace App\Livewire;

use App\Models\Parents;
use App\Traits\QueryTrait;
use Livewire\Component;
use Livewire\WithPagination;

class DisplayParents extends Component
{

    use WithPagination;
    use QueryTrait;

    public function render()
    {
        try {
            $myQuery = Parents::where( 'father_name->en', 'like', "%$this->search%")
                    ->orwhere('father_name->ar','like',"%$this->search%")
                    ->orwhere('mother_name->en','like',"%$this->search%")
                    ->orwhere('mother_name->ar','like',"%$this->search%")
                ->get();



            $parents =  $this->queryData("\App\Models\Parents", $myQuery);
            return view('students-affairs.parents.display-parents', [
                    'parents' => $parents,
                ])->title('parents');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
