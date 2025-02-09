<?php


namespace App\Traits;

use Livewire\Attributes\Rule;

trait UserTrait
{
    #[Rule('required|max:50|string|unique:users,name')]
    public $name;

    #[Rule('required|max:50|email|unique:users,email')]
    public $email;

    #[Rule('required|min:8|regex:/[A-Z]/|regex:/[a-z]/|regex:/[0-9]/|regex:/[\W]/')]
    public $password;

    #[Rule('required|same:password')]
    public $confirm_password;

    #[Rule('required')]
    public $status;

    #[Rule('required|array')]
    public $roles_name = [];

    public $allRoles;



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



}
