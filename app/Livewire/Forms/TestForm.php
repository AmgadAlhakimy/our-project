<?php

namespace App\Livewire\Forms;

use App\Models\test;

class TestForm
{
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}
