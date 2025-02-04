<?php

namespace App\Livewire\StudentsAffairs\Student;

use App\Models\EducationalLevel;
use App\Models\Parents\Parents;
use App\Models\Student\Student;
use App\Traits\PhotoTrait;
use App\Traits\StudentTrait;
use Illuminate\Http\UploadedFile;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Validator;

class CreateStudent extends Component
{
    use WithFileUploads;
    use PhotoTrait;
    use StudentTrait;

    public function save()
    {
        $this->validate();
        try {
            Student::create([
                'id' => rand(1000000000, 9000000000),
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
                'parents_id' => $this->parents_id,

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
