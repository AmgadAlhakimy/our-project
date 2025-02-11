<?php
namespace App\Livewire\Profile;

use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Illuminate\Validation\ValidationException;

class UpdatePasswordForm extends Component
{

    public string $current_password = '';
    #[Rule('required|min:8|regex:/[A-Z]/|regex:/[a-z]/|regex:/[0-9]/|regex:/[\W]/')]
    public string $password = '';

    #[Rule('required|same:password')]
    public string $password_confirmation;
    public string $status = '';



    public $passwordRequirements = [
        'min' => false,
        'uppercase' => false,
        'lowercase' => false,
        'number' => false,
        'special' => false,
    ];


    public function updatedPassword($value)
    {
        $this->passwordRequirements['min'] = strlen($value) >= 8;
        $this->passwordRequirements['uppercase'] = preg_match('/[A-Z]/', $value);
        $this->passwordRequirements['lowercase'] = preg_match('/[a-z]/', $value);
        $this->passwordRequirements['number'] = preg_match('/[0-9]/', $value);
        $this->passwordRequirements['special'] = preg_match('/[\W]/', $value);
    }

    public function getProgressProperty()
    {
        // Calculate progress percentage
        $completed = array_filter($this->passwordRequirements);
        return (count($completed) / count($this->passwordRequirements)) * 100;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);  // Validate only the updated field
    }
    public function updatePassword()
    {
        $user = auth()->user();

        // Validate input
        $validated = $this->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Update password
        $user->update([
            'password' => Hash::make($this->password),
        ]);

        // Reset fields
        $this->reset(['current_password', 'password', 'password_confirmation']);

        // Set status message for success
        $this->status = 'password-updated';
    }

    public function render()
    {
        return view('profile.partials.update-password-form');
    }
}

