<?php

namespace App\Livewire\StudentsAffairs\Parents;

use App\Models\Parents\Parents;
use App\Traits\ParentsTrait;
use Auth;
use Livewire\Component;


class CreateParents extends Component
{
    use ParentsTrait;

    public function mount()
    {
        if (!auth()->check() || !auth()->user()->hasPermissionTo('create superior')) {
            return redirect()->route('dashboard')->with('error', 'auth.unauthorized access');
        }
    }
    public function save()
    {
        $this->validate();
        $this->set_nullable();
        try {
            Parents::create([
                'father_name' => [
                    'en' => $this->father_name,
                    'ar' => $this->father_name_ar
                ],
                'father_work' => [
                    'en' => $this->father_work,
                    'ar' => $this->father_work_ar
                ],
                'father_contact1' => $this->father_contact1,
                'father_contact2' => $this->father_contact2,
                'mother_name' => [
                    'en' => $this->mother_name,
                    'ar' => $this->mother_name_ar
                ],
                'mother_work' => [
                    'en' => $this->mother_work,
                    'ar' => $this->mother_work_ar,
                ],
                'mother_contact1' => $this->mother_contact1,
                'mother_contact2' => $this->mother_contact2,
                'kin_name' => [
                    'en' => $this->kin_name,
                    'ar' => $this->kin_name_ar,
                ],
                'kin_relationship' => [
                    'en' => $this->kin_relationship,
                    'ar' => $this->kin_relationship_ar,
                ],
                'kin_contact' => $this->kin_contact,
                'user_id' => Auth::id(),
            ]);
            $this->reset();
            return redirect()->route('create-student')->with(['success' => __('message.success')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function render()
    {
        return view('students-affairs.parents.create-parents');

    }


}
