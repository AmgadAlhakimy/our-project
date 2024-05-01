<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class CreateStudent extends Component
{
    #[Title('this is student page')]
    public $id=0;

    public $father_name, $father_name_ar,
        $father_work, $father_work_ar,
        $father_contact1, $father_contact2,
        $mother_name, $mother_work,
        $mother_work_ar, $mother_contact1,
        $mother_contact2, $kin_name,
        $kin_name_ar, $kin_relationship,
        $kin_relationship_ar, $kin_contact;


    public function render()
    {
        return view('livewire.create-student');
    }

    public function nextStep()
    {
        $this->father_name='hello world';
        $this->kin_contact=12457953;
        $this->id++;
    }
}
