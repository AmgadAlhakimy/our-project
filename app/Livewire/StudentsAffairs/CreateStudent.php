<?php

namespace App\Livewire\StudentsAffairs;

use App\Livewire\Forms\RelativesForm;
use App\Livewire\Forms\StudentForm;
use App\Models\Classroom\Classroom;
use App\Models\EducationalLevel;
use App\Models\Relative;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateStudent extends Component
{
    use WithFileUploads;

    public $checks = [false, false, false];
    public RelativesForm $relativeForm;
    public StudentForm $studentForm;

    public $selectedLevel = null;
    public $classrooms;
    public int $currentStep = 1;
    public int $totalSteps = 3;
    public string $search = "";
    public $image;
    public $showSelect = false;
    
    public function render()
    {
        $fathers = [];
        if (strlen($this->search) > 0) {
            $fathers = Relative::where('father_name->en', 'like', "%$this->search%")
                ->orwhere('father_name->ar', 'like', "%$this->search%")->get();
        }

        $levels = EducationalLevel::all();
        $relatives = Relative::all();
        return view('students-affairs.students.create-relative',
            compact('levels', 'relatives',
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

    public function storeRelative(): void
    {
        $this->relativeForm->store();
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
