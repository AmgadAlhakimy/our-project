<?php

namespace App\Livewire;

use App\Livewire\Forms\TestForm;
use Livewire\Component;

class MyTest extends Component
{
    public $testForm;

    public function mount()
    {
        $this->testForm = new TestForm('', '');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'testForm.name' => 'required|string|max:255',
            'testForm.email' => 'required|email',
        ]);

        // Here, you'd typically persist the data to the database.
        // For simplicity, we'll just log it for now.
        \Log::info('TestForm Data:', $validatedData);

        $this->testForm = new TestForm('', '');
    }

    public function render()
    {
        return view('livewire.test');
    }
}
