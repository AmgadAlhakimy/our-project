<?php

namespace App\Livewire\Roles;

use App\Traits\RoleTrait;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class EditRole extends Component
{
    public $roleId;
    public $name;
    #[Rule('required|array')]
    public  $selectedPermissions = [];
    public  $permissions = [];


    public function mount($id)
    {
        if (!auth()->check() || !auth()->user()->hasPermissionTo('edit role')) {
            return redirect()->route('dashboard')->with('error', 'auth.unauthorized access');
        }
        $role = Role::findOrFail($id);
        $this->roleId = $role->id;
        $this->name = $role->name;
        $this->permissions = Permission::all();

        // Fetch selected permissions
        $this->selectedPermissions = DB::table("role_has_permissions")
            ->where("role_has_permissions.role_id", $this->roleId)
            ->pluck('role_has_permissions.permission_id')
            ->toArray();
    }

    public function rules()
    {
        return [
            'name' => 'required|max:50|string|unique:roles,name,' . $this->roleId,
        ];
    }

    public function update()
    {
        $this->validate();
        try {
            $role = Role::findOrFail($this->roleId);
            $role->update([
                'name' => $this->name,
            ]);

            // Assign role
            $role->syncPermissions(array_map('intval', $this->selectedPermissions));

            $this->reset();
            return redirect()->route('display-roles')->with(['success' => __('message.update')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function render()
    {
        return view('roles.edit-role');
    }
}
