<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Attributes\Rule;
use Livewire\Form;

class StudentForm extends Form
{
    #[Rule('required')]
    public string $relative_id;
    #[Rule('required|max:100|regex:/^[a-zA-Z\s]+$/')]
    public string $name;
    #[Rule('required|max:100|regex:/^[\p{Arabic}\s]+$/u')]
    public string $name_ar;
    #[Rule('nullable|sometimes|max:1024')]
//    #[Validate('image|max:1024')]
    public string $photo;
    #[Rule('required|max:100|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $address;
    #[Rule('required|max:100|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $address_ar;
    public string $gender;
    #[Rule('required')]
    public string $birthdate;
    #[Rule('required')]
    public string $place_of_birth;
    #[Rule('required')]
    public string $place_of_birth_ar;
    public string $educational_level;
    #[Rule('required')]
    public string $classroom;
    public string $take_medicine;
    public string $medicine_desc;
    public string $medicine_desc_ar;
    public string $have_allergy;
    public string $allergy_desc;
    public string $allergy_desc_ar;
    public string $have_health_problem;
    public string $health_problem_desc;
    public string $health_problem_desc_ar;
    public string $note;

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.regex' => __('validation.english letters'),
            'name_ar.regex' => __('validation.arabic letters'),
            'address.regex' => __('validation.english letters'),
            'address_ar.regex' => __('validation.arabic letters'),
            'class.required' => __('Student.first you have to add classrooms'),
        ];
    }


}
