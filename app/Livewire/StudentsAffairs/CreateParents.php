<?php

namespace App\Livewire\StudentsAffairs;

use App\Livewire\Forms\ParentsFormTest;
use Livewire\Component;
use PHPUnit\Exception;


class CreateParents extends Component
{

    public ParentsFormTest $parentsForm;

    public function save()
    {
        $this->parentsForm->validate();
        dd(123);
//        $this->parentsForm->saveParents();
    }

    public function render()
    {
        return view('students-affairs.parents.create-parents', [
            'parentsForm' => $this->parentsForm
        ]);

    }

}
