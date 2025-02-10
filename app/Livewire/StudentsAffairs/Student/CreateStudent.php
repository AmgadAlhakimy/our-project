<?php

namespace App\Livewire\StudentsAffairs\Student;

use App\Models\EducationalLevel;
use App\Models\Parents\Parents;
use App\Models\Student\Student;
use App\Rules\ArabicFirstName;
use App\Rules\RejectArabicLetters;
use App\Rules\RejectEnglishLetters;
use App\Traits\PhotoTrait;
use App\Traits\StudentTrait;
use Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateStudent extends Component
{
    use WithFileUploads;
    use PhotoTrait;
    use StudentTrait;

    public function mount()
    {
        if (!auth()->check() || !auth()->user()->hasPermissionTo('create student')) {
            return redirect()->route('dashboard')->with('error', 'auth.unauthorized access');
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
        $this->validateOnly($propertyName);  // Validate only the updated field
    }

    public function save()
    {
        $this->validate();
        try {
            $parents = Parents::findOrFail($this->parents_id);
            Student::create([
                'id' =>date('Y') . str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT),
                'name' => [
                    'en' => $this->name . ' ' . $parents->getTranslation('father_name', 'en'),
                    'ar' => $this->name_ar . ' ' . $parents->getTranslation('father_name', 'ar'),
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
                'parents_id' => $parents->id,
                'user_id' =>  Auth::user()->id,

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
