<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class RelativesForm extends Form
{
    #[Rule('required|max:50|regex:/^[a-zA-Z\s]+$/')]
    public string $father_name;
    #[Rule('required|max:50|regex:/^[\p{Arabic}\s]+$/u')]
    public string $father_name_ar;
    #[Rule('nullable|max:50|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $father_work;
    #[Rule('nullable|max:50|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $father_work_ar;
    #[Rule('required|numeric')]
    public int $father_contact1;
    #[Rule('nullable|numeric')]
    public int $father_contact2;
    #[Rule('required|max:50|regex:/^[a-zA-Z\s]+$/')]
    public string $mother_name;
    #[Rule( 'required|max:50|regex:/^[\p{Arabic}\s]+$/u')]
    public string $mother_name_ar;
    #[Rule('nullable|max:50|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $mother_work;
    #[Rule('nullable|max:50|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $mother_work_ar;
    #[Rule('nullable|numeric')]
    public int $mother_contact1;
    #[Rule('nullable|numeric')]
    public int $mother_contact2;
    #[Rule('nullable|max:50|regex:/^[a-zA-Z\s]+$/')]
    public string $kin_name;
    #[Rule('nullable|max:50|regex:/^[\p{Arabic}\s]+$/u')]
    public string $kin_name_ar;
    #[Rule('nullable|max:50|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $kin_relationship;
    #[Rule('nullable|max:50|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $kin_relationship_ar;
    #[Rule('nullable|numeric')]
    public int $kin_contact;

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
}
