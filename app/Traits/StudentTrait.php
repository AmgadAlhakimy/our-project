<?php


namespace App\Traits;

use App\Models\Classroom\Classroom;

trait StudentTrait
{
    public $checks = [false, false, false];
    public $selectedLevel = null;
    public $classrooms;
    public string $search = "";
    public function flip($check)
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
            'name.regex' => __('validation.english letters'),
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
            'parent_id.exists' => __('student.this father does not exist check the list'),
        ];
    }

}
