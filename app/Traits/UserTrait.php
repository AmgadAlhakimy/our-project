<?php


namespace App\Traits;

use Livewire\Attributes\Rule;

trait UserTrait
{
//    #[Rule('required|max:50|string|unique:users,name')]
//    public $name;
//    #[Rule('required|max:50|email|unique:users,email')]
//    public $email;
//    #[Rule('required|min:8')]
//    public $password;
//    #[Rule('required|same:password')]
//    public $confirm_password;
//    #[Rule('required')]
//    public $status;
//    #[Rule('required|array')]
//    public $roles_name = [];
//    public $allRoles; // To fetch available roles
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


}
