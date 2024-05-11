<?php

namespace App\Livewire\Forms;

use App\Models\Student;
use Livewire\Attributes\Rule;
use Livewire\Form;
use Livewire\WithFileUploads;

class StudentForm extends Form
{
use WithFileUploads;
    #[Rule('required|exists:relatives,id')]
    public $relative_id;
    #[Rule('required|max:100|regex:/^[a-zA-Z\s]+$/')]
    public string $name;
    #[Rule('required|max:100|regex:/^[\p{Arabic}\s]+$/u')]
    public string $name_ar;
    #[Rule('image|mimes:jpeg,png,jpg,gif|max:2048|max:1024')]
    public $photo;
    #[Rule('required|max:100|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $address;
    #[Rule('required|max:100|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $address_ar;
    #[Rule('required')]
    public $gender;
    #[Rule('required')]
    public $birthdate;
    #[Rule('required')]
    public string $place_of_birth;
    #[Rule('required')]
    public string $place_of_birth_ar;
    #[Rule('required')]
    public $classroom_id;
    #[Rule('nullable')]
    public $take_medicine;
    #[Rule('nullable')]
    public string $medicine_desc= "";
    #[Rule('nullable')]
    public string $medicine_desc_ar= "";
    #[Rule('nullable')]
    public $have_allergy;
    #[Rule('nullable')]
    public string $allergy_desc= "";
    #[Rule('nullable')]
    public string $allergy_desc_ar= "";
    #[Rule('nullable')]
    public $have_health_problem;
    #[Rule('nullable')]
    public string $health_problem_desc= "";
    #[Rule('nullable')]
    public string $health_problem_desc_ar= "";
    #[Rule('nullable')]
    public string $note= "";

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
            'relative_id.exists' => __('student.please select from the list and the number of father only'),
        ];
    }
    /**
     * Store a new student.
     */
    public function store()
    {
        $this->validate();
        try {
            Student::create([
                'name' => [
                    'en' => $this->name,
                    'ar' => $this->name_ar
                ],

                'photo'=>$this->insertImage(),
                'address' => [
                    'en' => $this->address,
                    'ar' => $this->address_ar
                ],
                'gender' => [
                    'en' => __('public.' . $this->gender),
                    'ar' => __('public.' . $this->gender . '1'),
                ],
                'birthdate' => $this->birthdate,
                'place_of_birth' => [
                    'en' => $this->place_of_birth,
                    'ar' => $this->place_of_birth_ar,
                ],
                'medicine_desc' => [
                    'en' => $this->medicine_desc,
                    'ar' => $this->medicine_desc_ar,
                ],
                'allergy_desc' => [
                    'en' => $this->allergy_desc,
                    'ar' => $this->allergy_desc_ar,
                ],
                'health_problem_desc' => [
                    'en' => $this->health_problem_desc,
                    'ar' => $this->health_problem_desc,
                ],
                'note' => $this->note,
                'classroom_id' => $this->classroom_id,
                'relative_id' => $this->relative_id,

            ]);
            return redirect()->back()->with(['success' => __('message.success')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
    public function insertImage()
    {
        if($this->photo){

            return $this->photo->store('images/students');
        }
        return null;
    }


}
