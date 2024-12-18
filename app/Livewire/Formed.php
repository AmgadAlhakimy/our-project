<?php

namespace App\Livewire;

use App\Livewire\Forms\ForMeForm;
use Livewire\Attributes\Rule;
use Livewire\Component;
use PHPUnit\Exception;

class Formed extends Component
{
    public ForMeForm $forMeForm;

    public function mount()
    {
        $this->forMeForm = new ForMeForm();
    }

    public function render()
    {
        return view('livewire.forme');
    }

public function saveMe()
{
    $this->forMeForm->save();
}
}
