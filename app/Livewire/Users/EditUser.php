<?php

namespace App\Livewire\Users;

use App\Models\User;
use App\Traits\UserTrait;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class EditUser extends Component
{
    use UserTrait;
    public $id;
    public $name;
    public $email;
    public function mount()
    {
        $this->allRoles = Role::pluck('name', 'name')->toArray();
        $user = User::findorFail($this->id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->status = $user->status;
        $this->roles_name = $user->roles_name;

    }
    public function rules()
    {
        return [
            'name' => 'required|max:50|string|unique:users,name,' . $this->id,
            'email' => 'required|max:50|email|unique:users,email,' . $this->id,
        ];
    }

    public function update()
    {
        $this->validate();
        try {
            $user = User::findorFail($this->id);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'roles_name' => $this->roles_name,
                'status' => $this->status,
            ]);

            // Assign role
            $user->assignRole($this->roles_name);

            $this->reset();
            return redirect()->route('display-users')->with(['success' => __('message.update')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function render()
    {
        return view('users.edit-user');
    }
}
