<?php

namespace App\Livewire;

use App\Models\Teacher\Teacher;
use App\Traits\QueryTrait;
use Livewire\Component;
use Livewire\WithPagination;

class DisplayTeachers extends Component
{
    use WithPagination;
    use QueryTrait;

    public function render()
    {
        try {
            $myQuery = Teacher::where('name->en', 'like', "%$this->search%")
                ->orwhere('name->ar', 'like', "%$this->search%")
                ->orwhere('address->en','like',"%$this->search%")
                ->orwhere('address->ar','like',"%$this->search%")
                ->orwhere('gender->en','like',"%$this->search%")
                ->orwhere('gender->ar','like',"%$this->search%")
                ->orwhere('major->en','like',"%$this->search%")
                ->orwhere('major->ar','like',"%$this->search%")
                ->orwhere('contact','like',"%$this->search%")
                ->orwhere('qualification->en','like',"%$this->search%")
                ->orwhere('qualification->ar','like',"%$this->search%")->get();
            $teachers = $this->queryData("App\Models\Teacher\Teacher", $myQuery);

            return view('employees-affairs.teachers.display-teachers', [
                'teachers' => $teachers,
            ])->title('Teachers');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
