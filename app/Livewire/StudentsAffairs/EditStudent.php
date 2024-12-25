<?php

namespace App\Livewire\StudentsAffairs;

use App\Models\Classroom\Classroom;
use App\Models\EducationalLevel;
use App\Models\Parents;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use function Laravel\Prompts\error;

class EditStudent extends Component
{
    use WithFileUploads;

    public $id;

    #[Rule('required|exists:parents,id')]
    public $parent_id;
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
    #[Rule('required|max:100|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $place_of_birth;
    #[Rule('required|max:100|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $place_of_birth_ar;
    #[Rule('required')]
    public $classroom_id;
    #[Rule('nullable')]
    public $take_medicine;
    #[Rule('nullable|max:100|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $medicine_desc = "";
    #[Rule('nullable|max:100|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $medicine_desc_ar = "";
    #[Rule('nullable')]
    public $have_allergy;
    #[Rule('nullable|max:100|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $allergy_desc = "";
    #[Rule('nullable|max:100|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $allergy_desc_ar = "";
    #[Rule('nullable')]
    public $have_health_problem;
    #[Rule('nullable|max:100|regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/')]
    public string $health_problem_desc = "";
    #[Rule('nullable|max:100|regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u')]
    public string $health_problem_desc_ar = "";
    #[Rule('nullable')]
    public string $note = "";


    public $checks = [false, false, false];
    public $selectedLevel = null;
    public $classrooms;
    public string $search = "";


    public function mount()
    {
        try {
            $student = Student::findorFail($this->id);
            $this->name = $student->getTranslation('name', 'en');
            $this->name_ar = $student->getTranslation('name', 'ar');
            $this->photo = $student->photo;
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
            $this->parent_id = $student->parent_id;

        } catch (\Exception $e) {
            error($e);
        }
    }

    public function update()
    {
        $this->validate();
        dd('hello world');
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
                'parents_id' => $this->parent_id,

            ]);
            $this->deletePhoto();
            $this->reset();
            return redirect()->route('display-students')->with(['success' => __('message.success')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function render()
    {
//        $fathers = Parents::findorFail($this->parent_id);
        $student = Student::findorFail($this->id);
        $fathers = Parents::all();

        if (strlen($this->search) > 0) {
            $fathers = Parents::where('father_name->en', 'like', "%$this->search%")
                ->orwhere('father_name->ar', 'like', "%$this->search%")->get();
        }

        $levels = EducationalLevel::all();
        return view('students-affairs.students.edit-student',
            compact('levels', 'fathers', 'student')
        )->title('Edit Student');
    }

    public function flip($check)
    {
        $this->checks[$check] = !$this->checks[$check];
    }

    public function updatedSelectedLevel()
    {
        return $this->classrooms = Classroom::
        where('edu_id', $this->selectedLevel)->get();
    }

    public function deletePhoto(): void
    {
        if ($this->photo) {
            $this->photo->delete(); // Delete the temporary file
            $this->photo = null; // Reset the photo property
        }
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
            'relative_id.exists' => __('student.please select from the list and the number of father only'),
        ];
    }

    public function updateImage()
    {
        if ($this->photo) {
            $student = Student::findorFail($this->id);
            if ($this->photo === $student->photo) {
                return;
            }
            // Delete the existing image if it exists
                Storage::disk('public')->delete('storage/images/students/' . $this->photo);


            $filename = time() . '.' . $this->photo->getClientOriginalExtension();
            $path = $this->photo->storeAs('images/students', $filename, 'public');

            $this->emit('imageUpdated'); // Emit an event to notify other components

            return $path;
        }

        return null;
    }

}
