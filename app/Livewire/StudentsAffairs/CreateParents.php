<?php

namespace App\Livewire\StudentsAffairs;

use App\Livewire\Forms\ParentsForm;
use Livewire\Component;
use PHPUnit\Exception;


class CreateParents extends Component
{
    public ParentsForm $parentsForm;
    public $test = 0;

    public function storeParents()
    {
        $this->test++;
        try {
//            return
        return view('academic-dep.educational-levels.create-edu-level');
        }catch (Exception $e){
            return $e;
        }
//        route('parents.store');
    }

    public function render()
    {
        return view('students-affairs.parents.create-parents',[
        'parentsForm' => $this->parentsForm
        ]);

    }

}
