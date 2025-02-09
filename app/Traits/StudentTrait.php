<?php


namespace App\Traits;

use App\Models\Classroom\Classroom;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\Rule;

trait StudentTrait
{
    #[Rule('required|exists:parents,id')]
    public $parents_id;
    #[Rule('required|max:10|regex:/^[A-Za-z]+$/')]
    public string $name;
    public string $name_ar;
    #[Rule('required|image|max:2048|mimes:jpeg,png,jpg,gif')]
    public $photo;
    public string $address;
    public string $address_ar;
    #[Rule('required')]
    public $gender;
    #[Rule('required')]
    public $birthdate;
    public string $place_of_birth;
    public string $place_of_birth_ar;
    #[Rule('required')]
    public $classroom_id;
    #[Rule("nullable|max:100|regex:/^[A-Za-z\s']+[A-Za-z0-9\s']*$/")]
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


    public $isValidImage = false;

    public function updatedPhoto()
    {

        try {

            $validator = Validator::make(
                ['photo' => $this->photo],
                ['photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048']
            );

            if ($validator->fails()) {
                $this->photo->delete();
                $this->isValidImage = false;
            } else {
                $this->isValidImage = true;
            }
            return true;
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
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
