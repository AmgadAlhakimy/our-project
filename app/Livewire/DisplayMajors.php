<?php

namespace App\Livewire;

use App\Models\Major;
use App\Traits\QueryTrait;
use Livewire\Component;
use Livewire\WithPagination;

class DisplayMajors extends Component
{
    use WithPagination;
    use QueryTrait;

    public function render()
    {
        try {
            $myQuery = Major::where('name->en', 'like', "%$this->search%")
                ->orwhere('name->ar', 'like', "%$this->search%")->get();
            $majors = $this->queryData("App\Models\Major", $myQuery);

            return view('employees-affairs.majors.display-majors', [
                'majors' => $majors,
            ])->title('majors');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
