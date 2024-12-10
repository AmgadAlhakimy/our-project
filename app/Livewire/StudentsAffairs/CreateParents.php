<?php

namespace App\Livewire\StudentsAffairs;

use App\Livewire\Forms\ParentsForm;
use Livewire\Component;


class CreateParents extends Component
{
    public ParentsForm $parentsForm;

    public function mount()
    {
//        $this->parentsForm = new ParentsForm(15);
    }
    public function store(): void
    {
//        $this->parentsForm->store();
    }

    public function render()
    {
        return view('students-affairs.parents.create-parents',[
        'parentsForm' => $this->parentsForm
        ]);

    }

}
