<?php

namespace App\Livewire\StudentsAffairs;

use App\Models\Classroom\Classroom;
use App\Models\EducationalLevel;
use App\Models\Parents;
use App\Models\Student;
use App\Traits\PhotoTrait;
use App\Traits\StudentTrait;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use function Laravel\Prompts\error;

class EditStudent extends Component
{
    use WithFileUploads;
    use PhotoTrait;
    use StudentTrait;

    public $id;

    public string $current_photo = '';

    #[Rule('required|exists:parents,id')]
    public $parent_id = 0;
    #[Rule('required|max:100|regex:/^[a-zA-Z\s]+$/')]
    public string $name;
    #[Rule('required|max:100|regex:/^[\p{Arabic}\s]+$/u')]
    public string $name_ar;
    #[Rule('nullable|image|mimes:jpeg,png,jpg,gif|max:2048')]
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

    public function mount()
    {
        try {
            $student = Student::findorFail($this->id);
            $this->name = $student->getTranslation('name', 'en');
            $this->name_ar = $student->getTranslation('name', 'ar');
            $this->current_photo = $student->photo;
            $this->address = $student->getTranslation('address', 'en');
            $this->address_ar = $student->getTranslation('address', 'ar');
            $this->birthdate = $student->birthdate;
            $this->gender = $student->gender;
            $this->place_of_birth = $student->getTranslation('place_of_birth', 'en');
            $this->place_of_birth_ar = $student->getTranslation('place_of_birth', 'ar');
            $this->medicine_desc = $student->getTranslation('medicine_desc', 'en');
            $this->medicine_desc_ar = $student->getTranslation('medicine_desc', 'ar');
            $this->allergy_desc = $student->getTranslation('allergy_desc', 'en');
            $this->allergy_desc_ar = $student->getTranslation('allergy_desc', 'ar');
            $this->health_problem_desc = $student->getTranslation('health_problem_desc', 'en');
            $this->health_problem_desc_ar = $student->getTranslation('health_problem_desc', 'ar');
            $this->note = $student->note;
            $this->classroom_id = $student->classroom_id;
            $this->parent_id = $student->parents_id;
            $this->search = $student->parents->father_name;

        } catch (\Exception $e) {
            error($e);
        }
    }

    public function update()
    {
        $this->validate();
        try {
            $student = Student::findorFail($this->id);
            $student->update([
                'name' => [
                    'en' => $this->name,
                    'ar' => $this->name_ar
                ],
                'photo' => $this->updateImage(),
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
            $this->deletePhoto();
            $this->reset();
            return redirect()->route('display-students')->with(['success' => __('message.update')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function render()
    {
        $student = Student::findorFail($this->id);
        $fathers = Parents::orderBy('created_at', 'desc')->get();
//        if (strlen($this->search) > 0) {
//            $fathers = Parents::where('father_name->en', 'like', "%$this->search%")
//                ->orwhere('father_name->ar', 'like', "%$this->search%")->get();
//        }

        $levels = EducationalLevel::all();
        return view('students-affairs.students.edit-student',
            compact('levels', 'fathers', 'student')
        )->title('Edit Student');
    }

    public function updateImage()
    {
        if ($this->photo) {
            return $this->insertImageWithLivewire($this->id);
        } else {
            return $this->current_photo;
        }
    }

}
