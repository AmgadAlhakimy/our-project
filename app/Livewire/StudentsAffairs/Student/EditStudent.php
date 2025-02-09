<?php

namespace App\Livewire\StudentsAffairs\Student;

use App\Models\EducationalLevel;
use App\Models\Parents\Parents;
use App\Models\Student\Student;
use App\Rules\RejectArabicLetters;
use App\Rules\RejectEnglishLetters;
use App\Traits\PhotoTrait;
use App\Traits\StudentTrait;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use function Laravel\Prompts\error;
use App\Rules\ArabicFirstName;

class EditStudent extends Component
{
    use WithFileUploads;
    use PhotoTrait;
    use StudentTrait;

    public $id;
    public string $current_photo = '';

    #[Rule('nullable|image|mimes:jpeg,png,jpg,gif|max:2048')]
    public $photo;
    public $classroom_name;


    public function mount()
    {

        if (!auth()->check() || !auth()->user()->hasPermissionTo('edit student')) {
            return redirect()->route('dashboard')->with('error', 'auth.unauthorized access');
        }

        try {
            $student = Student::findorFail($this->id);
            $parents = Parents::findorFail($student->parents_id);
            $this->classroom_name = $student->classroom->name;
            $father_name = $parents->getTranslation('father_name', 'en');
            $father_name_ar = $parents->getTranslation('father_name', 'ar');
            $student_name_ar = $student->getTranslation('name', 'ar');
            $student_name = $student->getTranslation('name', 'en');
            $this->name = $this->extractStudentFirstName($student_name, $father_name);
            $this->name_ar = $this->extractStudentFirstName($student_name_ar, $father_name_ar);
            $this->current_photo = $student->photo;
            $this->address = $student->getTranslation('address', 'en');
            $this->address_ar = $student->getTranslation('address', 'ar');
            $this->birthdate = $student->birthdate;
            $this->gender = $student->gender;
            $this->place_of_birth = $student->getTranslation('place_of_birth', 'en');
            $this->place_of_birth_ar = $student->getTranslation('place_of_birth', 'ar');
            $this->checks[0] = ($student->getTranslation('takes_medicine', 'en')) == 'yes';
            $this->medicine_desc = $student->getTranslation('medicine_desc', 'en');
            $this->medicine_desc_ar = $student->getTranslation('medicine_desc', 'ar');
            $this->checks[1] = ($student->getTranslation('has_allergy', 'en')) == 'yes';
            $this->allergy_desc = $student->getTranslation('allergy_desc', 'en');
            $this->allergy_desc_ar = $student->getTranslation('allergy_desc', 'ar');
            $this->checks[2] = ($student->getTranslation('has_health_problem', 'en')) == 'yes';
            $this->health_problem_desc = $student->getTranslation('health_problem_desc', 'en');
            $this->health_problem_desc_ar = $student->getTranslation('health_problem_desc', 'ar');
            $this->note = $student->note;
            $this->classroom_id = $student->classroom_id;
            $this->class_id = $student->classroom_id;
            $this->parents_id = $student->parents_id;
            $this->search = $student->parents->father_name;
        } catch (\Exception $e) {
            error($e);
        }
    }
    public function rules()
    {
        return [
            'name_ar' => ['required', new ArabicFirstName()],
            'address' => ['required', 'max:100', new RejectArabicLetters()],
            'address_ar' => ['required', 'max:100', new RejectEnglishLetters()],
            'place_of_birth' => ['required', 'max:100', new RejectArabicLetters()],
            'place_of_birth_ar' => ['required', 'max:100', new RejectEnglishLetters()],
        ];
    }

    // Automatically validate when the field is updated
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function extractStudentFirstName($studentName, $fatherName)
    {
        // Normalize spaces to handle extra spaces in the names
        $studentName = preg_replace('/\s+/', ' ', trim($studentName));
        $fatherName = preg_replace('/\s+/', ' ', trim($fatherName));

        // Check if the father's name is included in the student's full name
        if (str_contains($studentName, $fatherName)) {
            // Remove the father's name from the student's full name
            $firstName = str_replace($fatherName, '', $studentName);

            // Trim any leading or trailing spaces
            return trim($firstName);
        }

        // If no father's name found, return the original student name (or handle accordingly)
        return $studentName;
    }

    public function update()
    {
        $this->validate();
        try {
            $student = Student::findorFail($this->id);
            $parents = Parents::findOrFail($this->parents_id);
            $student->update([
                'name' => [
                    'en' => $this->name . ' ' . $parents->getTranslation('father_name', 'en'),
                    'ar' => $this->name_ar . ' ' . $parents->getTranslation('father_name', 'ar'),
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
                'parents_id' => $this->parents_id,

            ]);
            if ($this->photo) {
                $this->photo->delete();
            }
            return redirect()->route('display-students', $this->classroom_id)->with(['success' => __('message.update')]);


        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function render()
    {
        $student = Student::findorFail($this->id);
        $fathers = Parents::orderBy('created_at', 'desc')->get();
        if (strlen($this->search) > 0) {
            $fathers = Parents::where('father_name->en', 'like', "%$this->search%")
                ->orwhere('father_name->ar', 'like', "%$this->search%")->get();
        }

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
