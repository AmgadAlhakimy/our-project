<?php

namespace App\Livewire\Forms;

use App\Models\test;

class TestForm
{
    public string $name='a';

    public function save()
    {
        Test::create([
            'name' => $this->name,
        ]);

        // Redirect or show a success message
        session()->flash('message', 'Data saved successfully!');
        redirect()->route('your-route'); // Replace with your desired route
    }
}
