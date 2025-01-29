<?php


namespace App\Traits;

use App\Models\Classroom\Classroom;
use App\Rules\ArabicFirstName;
use Livewire\Attributes\Rule;

trait StudentTrait
{
    #[Rule('required|exists:parents,id')]
    public $parents_id;
    #[Rule('required|max:10|regex:/^[A-Za-z]+$/')]
    public string $name;
    #[Rule(new ArabicFirstName)]
    public string $name_ar;
    #[Rule('required|image|mimes:jpeg,png,jpg,gif|max:2048|max:1024')]
    public $photo;
    #[Rule('required|max:100')]
    public string $address;
    #[Rule('required|max:100')]
    public string $address_ar;
    #[Rule('required')]
    public $gender;
    #[Rule('required')]
    public $birthdate;
    #[Rule('required|max:100')]
    public string $place_of_birth;
    #[Rule('required|max:100')]
    public string $place_of_birth_ar;
    #[Rule('required')]
    public $classroom_id;
    #[Rule('nullable|max:100|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $medicine_desc = "";
    #[Rule('nullable|max:100|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $medicine_desc_ar = "";
    #[Rule('nullable|max:100|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $allergy_desc = "";
    #[Rule('nullable|max:100|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $allergy_desc_ar = "";
    #[Rule('nullable|max:100|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $health_problem_desc = "";
    #[Rule('nullable|max:100|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $health_problem_desc_ar = "";
    #[Rule('nullable')]
    public string $note = "";
    public array $checks = [false, false, false];
    public $selectedLevel = null;
    public $classrooms;
    public string $search = "";
    public function flip($check): void
    {
        $this->checks[$check] = !$this->checks[$check];
    }

    public function checkValue($checked): string
    {
        if ($checked) {
            return __('public.yes');
        } else {
            return __('public.no');
        }
    }
    public function updatedSelectedLevel()
    {
        return $this->classrooms = Classroom::
        where('edu_id', $this->selectedLevel)->get();
    }

    public function messages(): array
    {
        return [
            'name.regex' => __('validation.english letters and first name'),
            'name_ar.regex' => __('validation.arabic letters'),
            'address.regex' => __('validation.english letters'),
            'address_ar.regex' => __('validation.arabic letters'),
            'place_of_birth.regex' => __('validation.english letters'),
            'place_of_birth_ar.regex' => __('validation.arabic letters'),
            'medicine_desc.regex' => __('validation.english letters'),
            'medicine_desc_ar.regex' => __('validation.arabic letters'),
            'allergy_desc.regex' => __('validation.english letters'),
            'allergy_desc_ar.regex' => __('validation.arabic letters'),
            'health_problem_desc.regex' => __('validation.english letters'),
            'health_problem_desc_ar.regex' => __('validation.arabic letters'),
            'class.required' => __('CreateStudent.first you have to add classrooms'),
            'parents_id.exists' => __('student.this superior does not exist check the list'),
        ];
    }

}
