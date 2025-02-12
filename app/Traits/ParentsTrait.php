<?php


namespace App\Traits;

use Livewire\Attributes\Rule;

trait ParentsTrait
{
    #[Rule('required|max:50|unique:parents,father_name->en|regex:/^[a-zA-Z\s]+$/')]
    public $father_name;
    #[Rule('required|max:50|unique:parents,father_name->ar|regex:/^[\p{Arabic}\s]+$/u')]
    public $father_name_ar;
    #[Rule('required|max:50|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public $father_work;
    #[Rule('required|max:50|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public $father_work_ar;
    #[Rule('required|numeric|regex:/^[0-9]{7,15}$/')]
    public $father_contact1;

    #[Rule('required|numeric|regex:/^[0-9]{7,15}$/')]
    public $father_contact2;
    #[Rule('required|max:50|regex:/^[a-zA-Z\s]+$/')]
    public $mother_name;
    #[Rule('required|max:50|regex:/^[\p{Arabic}\s]+$/u')]
    public $mother_name_ar;
    #[Rule('required|max:50|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public $mother_work;
    #[Rule('required|max:50|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public $mother_work_ar;
    #[Rule('required|numeric|regex:/^[0-9]{7,15}$/')]
    public  $mother_contact1;
    #[Rule('required|numeric|regex:/^[0-9]{7,15}$/')]
    public  $mother_contact2;
    #[Rule('nullable|max:50|regex:/^[a-zA-Z\s]+$/')]
    public $kin_name;
    #[Rule('nullable|max:50|regex:/^[\p{Arabic}\s]+$/u')]
    public $kin_name_ar;
    #[Rule('nullable|max:50|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public $kin_relationship;
    #[Rule('nullable|max:50|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public $kin_relationship_ar;
    #[Rule('nullable|numeric|digits:9|regex:/^[1-9][0-9]*$/')]
    public  $kin_contact;

    public function set_nullable(): void
    {
        if ($this->father_contact2 == null) {
            $this->father_contact2 = null;
        }
        if ($this->mother_contact2 == null) {
            $this->mother_contact2 = null;
        }
        if ($this->kin_name == null) {
            $this->kin_name = null;
        }
        if ($this->kin_name_ar == null) {
            $this->kin_name_ar = null;
        }
        if ($this->kin_relationship == null) {
            $this->kin_relationship = null;
        }
        if ($this->kin_relationship_ar == null) {
            $this->kin_relationship_ar = null;
        }
        if ($this->kin_contact == null) {
            $this->kin_contact = null;
        }
    }


    public function messages(): array
    {
        return [
            '*name.regex' => __('validation.english letters'),
            '*name_ar.regex' => __('validation.arabic letters'),
            '*work.regex' => __('validation.english letters'),
            '*work_ar.regex' => __('validation.arabic letters'),
            'kin_relationship.regex' => __('validation.english letters'),
            'kin_relationship_ar.regex' => __('validation.arabic letters'),
            '*contact*.regex' => __('validation.wrong phone number'),
        ];
    }
}
