<?php

namespace App\Livewire;

use App\Http\Requests\Student\StoreStudentRequest;
use App\Models\EducationalLevel;
use App\Models\Relative;
use Livewire\Component;

class FormWizard extends Component
{
    public int $counter = 0;
    public int $currentStep = 2;
    public int $totalSteps = 3;

    public $father_name, $father_name_ar,
        $father_work, $father_work_ar,
        $father_contact1, $father_contact2,
        $mother_name,$mother_name_ar, $mother_work,
        $mother_work_ar, $mother_contact1,
        $mother_contact2, $kin_name,
        $kin_name_ar, $kin_relationship,
        $kin_relationship_ar, $kin_contact;

    public function render()
    {
        $levels = EducationalLevel::all();
        $relatives = Relative::all();
        return view('livewire.form-wizard',
            compact('levels', 'relatives')
        )->title('Create Student');
    }
    public function incrementSteps()
    {
//        $this->validateForm();
        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
    }

    public function decrementSteps()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    public function submit()
    {

    }
    public function validateForm()
    {
        if ($this->currentStep===1){
//            $validated = $this->validate([
//                'name' => [
//                    'required', 'max:100',
//                    'regex:/^[a-zA-Z\s]+$/',
//                ],
//                'name_ar' => [
//                    'required', 'max:100',
//                    'regex:/^[\p{Arabic}\s]+$/u',
//
//                ],
//                'photo' => 'required', 'image', 'max:1024',
//                'mimes:jpg,png,jpeg,gif,svg,ico',
//                'address' => [
//                    'required', 'max:100',
//                    'regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/',
//                ],
//                'address_ar' => [
//                    'required', 'max:100',
//                    'regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u',
//                ],
//                'birthdate' => 'required',
//                'place_of_birth' => 'required',
//                'place_of_birth_ar' => 'required',
//                'classroom_id' => 'required',
//            ]);
        }elseif ($this->currentStep===2){
            $validated = $this->validate([
                'father_name' => [
                    'required', 'max:50',
                    'regex:/^[a-zA-Z\s]+$/',
                ],
                'father_name_ar' => [
                    'required', 'max:50',
                    'regex:/^[\p{Arabic}\s]+$/u',
                ],
                'father_work' => [
                    'nullable', 'max:50',
                    'regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/',
                ],
                'father_work_ar' => [
                    'nullable', 'max:50',
                    'regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u',
                ],
                'father_contact1' => [
                    'required', 'numeric',
                ],
                'father_contact2' => [
                    'nullable', 'numeric',
                ],
                'mother_name' => [
                    'required', 'max:50',
                    'regex:/^[a-zA-Z\s]+$/',
                ],
                'mother_name_ar' => [
                    'required', 'max:50',
                    'regex:/^[\p{Arabic}\s]+$/u',
                ],
                'mother_work' => [
                    'nullable', 'max:50',
                    'regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/',
                ],
                'mother_work_ar' => [
                    'nullable', 'max:50',
                    'regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u',
                ],
                'mother_contact1' => [
                    'nullable', 'numeric',
                ],
                'mother_contact2' => [
                    'nullable', 'numeric',
                ],
                'kin_name' => [
                    'nullable', 'max:50',
                    'regex:/^[a-zA-Z\s]+$/',
                ],
                'kin_name_ar' => [
                    'nullable', 'max:50',
                    'regex:/^[\p{Arabic}\s]+$/u',
                ],
                'kin_relationship' => [
                    'nullable', 'max:50',
                    'regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/',
                ],
                'kin_relationship_ar' => [
                    'nullable', 'max:50',
                    'regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u',
                ],
                'kin_contact' => [
                    'nullable', 'numeric',
                ],
            ]);
        }
    }
}
