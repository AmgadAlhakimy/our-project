<?php

namespace App\Livewire\Forms;

use App\Models\Student;
use Livewire\Attributes\Rule;
use Livewire\Form;
use Livewire\WithFileUploads;

class StudentForm extends Form
{
use WithFileUploads;


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    /**
     * Store a new student.
     */
    public function store()
    {
        $this->validate();
        dd('hello');

    }



}
