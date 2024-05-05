<?php

namespace App\Livewire;

use App\Livewire\Forms\RelativesForm;
use App\Models\EducationalLevel;
use App\Models\Relative;
use Livewire\Component;

class Student extends Component
{
    public RelativesForm $form;
    public int $currentStep = 1;
    public int $totalSteps = 3;
    public string $search = "";
    public string $father = "";

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

    public function incrementSteps()
    {
        $this->validateForm();
        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
    }
    public function myFather($data)
    {
        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
        $this->father=$data;
    }

    public function decrementSteps()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
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
}
