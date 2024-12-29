<?php

namespace App\Livewire\StudentsAffairs;

use App\Models\EducationalLevel;
use App\Models\Parents;
use App\Models\Student;
use App\Traits\PhotoTrait;
use App\Traits\StudentTrait;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateStudent extends Component
{
    use WithFileUploads;
    use PhotoTrait;
    use StudentTrait;

    #[Rule('required|exists:parents,id')]
    public $parent_id;
    #[Rule('required|unique:students,name->en|max:100|regex:/^[a-zA-Z\s]+$/')]
    public string $name;
    #[Rule('required|unique:students,name->ar|max:100|regex:/^[\p{Arabic}\s]+$/u')]
    public string $name_ar;
    #[Rule('required|image|mimes:jpeg,png,jpg,gif|max:2048|max:1024')]
    public $photo;
    #[Rule('required|max:100|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $address;
    #[Rule('required|max:100|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $address_ar;
    #[Rule('required')]
    public $gender;
    #[Rule('required')]
    public $birthdate;
    #[Rule('required|max:100|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $place_of_birth;
    #[Rule('required|max:100|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
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


    public function save()
    {
        $this->validate();
        try {
            Student::create([
                'name' => [
                    'en' => $this->name,
                    'ar' => $this->name_ar
                ],
                'photo' => $this->insertImageWithLivewire(0),
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
                'takes_medicine' => [
                    'en' => __('public.' . $this->checkValue($this->checks[0])),
                    'ar' => __('public.' . $this->checkValue($this->checks[0]) . '1'),
                ],
                'medicine_desc' => [
                    'en' => $this->medicine_desc,
                    'ar' => $this->medicine_desc_ar,
                ],
                'has_allergy' => [
                    'en' => __('public.' . $this->checkValue($this->checks[1])),
                    'ar' => __('public.' . $this->checkValue($this->checks[1]) . '1'),
                ],
                'allergy_desc' => [
                    'en' => $this->allergy_desc,
                    'ar' => $this->allergy_desc_ar,
                ],
                'has_health_problem' => [
                    'en' => __('public.' . $this->checkValue($this->checks[2])),
                    'ar' => __('public.' . $this->checkValue($this->checks[2]) . '1'),
                ],
                'health_problem_desc' => [
                    'en' => $this->health_problem_desc,
                    'ar' => $this->health_problem_desc,
                ],
                'note' => $this->note,
                'classroom_id' => $this->classroom_id,
                'parents_id' => $this->parent_id,

            ]);
            $this->photo->delete();
            return redirect()->route('create-student')->with(['success' => __('message.success')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function render()
    {
        $fathers = Parents::orderBy('created_at', 'desc')->get();
        $levels = EducationalLevel::all();
        return view('students-affairs.students.create-student',
            compact('levels', 'fathers')
        )->title('Create Student');
    }

}
