<?php


namespace App\Traits;

use Livewire\Attributes\Rule;

trait RoleTrait
{
    #[Rule('required|max:50|string|unique:roles,name')]
    public $name;
    #[Rule('required|array|min:1')]
    public $permission = [];

}
