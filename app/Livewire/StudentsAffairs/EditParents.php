<?php

namespace App\Livewire\StudentsAffairs;

use App\Models\Parents;
use Livewire\Attributes\Rule;
use Livewire\Component;

class EditParents extends Component
{
    public $id;
    #[Rule('required|max:50|regex:/^[a-zA-Z\s]+$/')]
    public string $father_name;
    #[Rule('required|max:50|regex:/^[\p{Arabic}\s]+$/u')]
    public string $father_name_ar;
    #[Rule('nullable|max:50|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $father_work = "";
    #[Rule('nullable|max:50|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $father_work_ar = "";
    #[Rule('required|numeric')]
    public int $father_contact1;
    #[Rule('nullable|numeric')]
    public int $father_contact2 = 0;
    #[Rule('required|max:50|regex:/^[a-zA-Z\s]+$/')]
    public string $mother_name;
    #[Rule('required|max:50|regex:/^[\p{Arabic}\s]+$/u')]
    public string $mother_name_ar;
    #[Rule('nullable|max:50|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $mother_work = "";
    #[Rule('nullable|max:50|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $mother_work_ar = "";
    #[Rule('nullable|numeric')]
    public int $mother_contact1 = 0;
    #[Rule('nullable|numeric')]
    public int $mother_contact2 = 0;
    #[Rule('nullable|max:50|regex:/^[a-zA-Z\s]+$/')]
    public string $kin_name = "";
    #[Rule('nullable|max:50|regex:/^[\p{Arabic}\s]+$/u')]
    public string $kin_name_ar = "";
    #[Rule('nullable|max:50|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $kin_relationship = "";
    #[Rule('nullable|max:50|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $kin_relationship_ar = "";
    #[Rule('nullable|numeric')]
    public int $kin_contact = 0;


    public function mount()
    {
        try {
        $parent = Parents::findorFail($this->id);
        $this->father_name = $parent->getTranslation('father_name','en');
        $this->father_name_ar = $parent->getTranslation('father_name','ar');
        $this->father_work = $parent->getTranslation('father_work','en');
        $this->father_work_ar = $parent->getTranslation('father_work','ar');
        $this->father_contact1 =$parent->father_contact1;
        $this->father_contact2 = $parent->father_contact2;
        $this->mother_name = $parent->getTranslation('mother_name','en');
        $this->mother_name_ar = $parent->getTranslation('mother_name','ar');
        $this->mother_work = $parent->getTranslation('mother_work','en');
        $this->mother_work_ar = $parent->getTranslation('mother_work','ar');
        $this->mother_contact1 = $parent->mother_contact1;
        $this->mother_contact2 = $parent->mother_contact2;
        $this->kin_name = $parent->getTranslation('kin_name','en');
        $this->kin_name_ar = $parent->getTranslation('kin_name','ar');
        $this->kin_relationship = $parent->getTranslation('kin_relationship','en');
        $this->kin_relationship_ar = $parent->getTranslation('kin_relationship','ar');
        $this->kin_contact = $parent->kin_contact;
    }catch (\Exception $e){
            echo $e;
        }
    }

    public function save()
    {
        try {



        $this->validate();
        dd('cool');


        // Update the model
        $parent = Parents::findorFail($this->id);
        $parent->father_name = $this->father_name;
        $parent->father_name_ar = $this->father_name_ar;
            $parent->update();
            return redirect()->route('display-parents')
                ->with(['success' => __('message.update')]);
        }
        catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function render()
    {
        try {
            $parent = Parents::findorFail($this->id);
            return view('students-affairs.parents.edit-parents',
                compact('parent'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
