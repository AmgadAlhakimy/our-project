<?php

namespace App\Livewire\Forms;

use App\Models\Parents;
use Livewire\Attributes\Rule;
use Livewire\Form;


class ParentsFormTest extends form
{
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
    public int $father_contact2 = 234;
    #[Rule('required|max:50|regex:/^[a-zA-Z\s]+$/')]
    public string $mother_name;
    #[Rule('required|max:50|regex:/^[\p{Arabic}\s]+$/u')]
    public string $mother_name_ar;
    #[Rule('nullable|max:50|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $mother_work = "";
    #[Rule('nullable|max:50|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $mother_work_ar = "";
    #[Rule('nullable|numeric')]
    public int $mother_contact1 = 123;
    #[Rule('nullable|numeric')]
    public int $mother_contact2 = 123;
    #[Rule('nullable|max:50|regex:/^[a-zA-Z\s]+$/')]
    public string $kin_name = "";
    #[Rule('nullable|max:50|regex:/^[\p{Arabic}\s]+$/u')]
    public string $kin_name_ar = "";
    #[Rule('nullable|max:50|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $kin_relationship = "";
    #[Rule('nullable|max:50|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $kin_relationship_ar = "";
    #[Rule('nullable|numeric')]
    public int $kin_contact =123;

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'father_name.regex' => __('validation.english letters'),
            'father_name_ar.regex' => __('validation.arabic letters'),
            'mother_name.regex' => __('validation.english letters'),
            'mother_name_ar.regex' => __('validation.arabic letters'),
            'father_work.regex' => __('validation.english letters'),
            'father_work_ar.regex' => __('validation.arabic letters'),
            'mother_work.regex' => __('validation.english letters'),
            'mother_work_ar.regex' => __('validation.arabic letters'),
            'kin_name.regex' => __('validation.english letters'),
            'kin_name_ar.regex' => __('validation.arabic letters'),
            'kin_relationship.regex' => __('validation.english letters'),
            'kin_relationship_ar.regex' => __('validation.arabic letters'),
        ];
    }

    /**
     * Store a new relative.
     */
    public function saveParents()
    {
        $this->validate();
        dd(123);
//        try {
//            Parents::create([
//                'father_name' => [
//                    'en' => $this->father_name,
//                    'ar' => $this->father_name_ar
//                ],
//                'father_work' => [
//                    'en' => $this->father_work,
//                    'ar' => $this->father_work_ar
//                ],
//                'father_contact1' => $this->father_contact1,
//                'father_contact2' => $this->father_contact2,
//                'mother_name' => [
//                    'en' => $this->mother_name,
//                    'ar' => $this->mother_name_ar
//                ],
//                'mother_work' => [
//                    'en' => $this->mother_work,
//                    'ar' => $this->mother_work_ar,
//                ],
//                'mother_contact1' => $this->mother_contact1,
//                'mother_contact2' => $this->mother_contact2,
//                'kin_name' => [
//                    'en' => $this->kin_name,
//                    'ar' => $this->kin_name_ar,
//                ],
//                'kin_relationship' => [
//                    'en' => $this->kin_relationship,
//                    'ar' => $this->kin_relationship_ar,
//                ],
//                'kin_contact' => $this->kin_contact,
//            ]);
//            session()->flash('message', 'Student created successfully.');
//            $this->reset();
//        } catch (\Exception $e) {
//            Log::error('Error creating student: ' . $e->getMessage());
//            session()->flash('error', 'An error occurred while creating the student.');
//        }
    }
}
