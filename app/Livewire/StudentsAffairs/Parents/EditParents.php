<?php

namespace App\Livewire\StudentsAffairs\Parents;

use App\Models\Parents\Parents;
use App\Traits\ParentsTrait;
use Livewire\Attributes\Rule;
use Livewire\Component;

class EditParents extends Component
{
    use ParentsTrait;
    public $id;

    #[Rule('required|max:50|regex:/^[a-zA-Z\s]+$/')]
    public $father_name;
    #[Rule('required|max:50|regex:/^[\p{Arabic}\s]+$/u')]
    public $father_name_ar;
    /**
     * @throws \Exception
     */
    public function mount()
    {
        try {
            $parent = Parents::findorFail($this->id);
            $this->father_name = $parent->getTranslation('father_name', 'en');
            $this->father_name_ar = $parent->getTranslation('father_name', 'ar');
            $this->father_work = $parent->getTranslation('father_work', 'en');
            $this->father_work_ar = $parent->getTranslation('father_work', 'ar');
            $this->father_contact1 = $parent->father_contact1;
            $this->father_contact2 = $parent->father_contact2;
            $this->mother_name = $parent->getTranslation('mother_name', 'en');
            $this->mother_name_ar = $parent->getTranslation('mother_name', 'ar');
            $this->mother_work = $parent->getTranslation('mother_work', 'en');
            $this->mother_work_ar = $parent->getTranslation('mother_work', 'ar');
            $this->mother_contact1 = $parent->mother_contact1;
            $this->mother_contact2 = $parent->mother_contact2;
            $this->kin_name = $parent->getTranslation('kin_name', 'en');
            $this->kin_name_ar = $parent->getTranslation('kin_name', 'ar');
            $this->kin_relationship = $parent->getTranslation('kin_relationship', 'en');
            $this->kin_relationship_ar = $parent->getTranslation('kin_relationship', 'ar');
            $this->kin_contact = $parent->kin_contact;
        } catch (\Exception $e) {
            throw new ($e);
        }
    }
    public function rules()
    {
        $rules = [
            'father_name' => [
                'required',
                'max:50',
                'regex:/^[a-zA-Z\s]+$/',
                Rule::unique('your_table_name', 'father_name')->ignore($this->id),
            ],
//            'father_name_ar' => [
//                'required',
//                'max:50',
//                'regex:/^[\p{Arabic}\s]+$/u',
//                Rule::unique('your_table_name', 'father_name_ar')
//                    ->ignore($this->route('id')), // Ignore the current ID
//            ],
        ];

        return $rules;
    }
    public function update()
    {
        $this->rules();
        $this->validate();
        $this->set_nullable();
        try {
            $parents = Parents::findorFail($this->id);
            $parents->update([
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
            ]);
            $this->reset();
            return redirect()->route('display-parents')->with(['success' => __('message.update')]);
        } catch (\Exception $e) {
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
