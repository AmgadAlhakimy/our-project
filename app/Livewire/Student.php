<?php

namespace App\Livewire;

use App\Livewire\Forms\RelativesForm;
use App\Livewire\Forms\StudentForm;
use App\Models\Classroom\Classroom;
use App\Models\EducationalLevel;
use App\Models\Relative;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Student extends Component
{
    use WithFileUploads;

    public RelativesForm $form;
    public StudentForm $studentForm;

    public $selectedLevel = null;
    public $classrooms;
    public int $currentStep = 2;
    public int $totalSteps = 3;
    public string $search = "";
    public string $father = "";
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
        return view('livewire.relative',
            compact('levels', 'relatives',
                'fathers')
        )->title('Create new Student');
    }

    public function updatedSelectedLevel()
    {
        $this->classrooms = Classroom::where('edu_id', $this->selectedLevel)->get();
    }

    public function myFather($data)
    {
        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
        $this->father = $data;
    }

    public function resetFather()
    {
        $this->father = "";
        $this->showSelect = true;
    }

    public function storeRelative()
    {
        $this->form->validate();
        try {
            Relative::create($this->form->all());
            $this->currentStep++;
            return redirect()->back()->with(['success' => __('message.success')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function storeStudent()
    {
            $this->studentForm->store();
            $this->currentStep++;
    }

    public function resetImage()
    {
        $this->image = "";
    }
}
