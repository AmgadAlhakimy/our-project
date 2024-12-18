<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;
use PHPUnit\Exception;

class ForMeForm extends Form
{
    #[Rule('required')]
    public string $name = 'Amjad';

    public function save()
    {
        try {
            $this->validate();
            dd(123);
        } catch (Exception $e) {
            dd($e);
        }
    }
}
