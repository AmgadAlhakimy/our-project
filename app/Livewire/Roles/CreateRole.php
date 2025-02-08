<?php

namespace App\Livewire\Roles;

use App\Traits\RoleTrait;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateRole extends Component
{
    #[Rule('required|max:50|string|unique:roles,name')]
    public $name;
    #[Rule('required|array|min:1')]
    public $permission = [];

    public function mount()
    {
        if (!auth()->check() || !auth()->user()->hasPermissionTo('create role')) {
            return redirect()->route('dashboard')->with('error', 'auth.unauthorized access');
        }
    }
    public function save()
    {

        $this->validate();
        try {
            $role = Role::create(['name' => $this->name]); // Create Role

            $role->syncPermissions(array_map('intval', $this->permission)); // Assign Permissions and check integer
            $this->reset();

            return redirect()->route('display-roles')->with(['success' => __('message.success')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function render()
    {
        $permissions = Permission::all();
        return view('roles.create-role', compact('permissions'));
    }
}
