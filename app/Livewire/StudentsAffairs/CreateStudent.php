<?php

namespace App\Livewire\StudentsAffairs;

use App\Livewire\Forms\ParentsFormTest;
use App\Livewire\Forms\StudentForm;
use App\Models\Classroom\Classroom;
use App\Models\EducationalLevel;
use App\Models\Parents;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateStudent extends Component
{
    use WithFileUploads;

    public $checks = [false, false, false];

    public StudentForm $studentForm;
    public StudentForm $parentForm;

    public $selectedLevel = null;
    public $classrooms;
    public int $currentStep = 2;
    public int $totalSteps = 3;
    public string $search = "";
    public $image;
    public $showSelect = false;

    public function render()
    {
        $fathers = [];
        if (strlen($this->search) > 0) {
            $fathers = Parents::where('father_name->en', 'like', "%$this->search%")
                ->orwhere('father_name->ar', 'like', "%$this->search%")->get();
        }

        $levels = EducationalLevel::all();
        $parents = Parents::all();
        return view('students-affairs.students.create-student',
            compact('levels', 'parents',
                'fathers')
        )->title('Create Student');
    }

    public function flip($check)
    {
        $this->checks[$check] = !$this->checks[$check];
    }

    public function increment(): int
    {
        return $this->currentStep = 2;
    }

    public function updatedSelectedLevel()
    {
        return $this->classrooms = Classroom::
        where('edu_id', $this->selectedLevel)->get();
    }

    public function storeParents(): void
    {
        $this->parentForm->store();
        $this->currentStep++;
    }

    public function storeStudent(): void
    {
        $this->studentForm->store();
        $this->currentStep++;
    }

    public function resetImage(): string
    {
        return $this->studentForm->photo = "";
    }
}
