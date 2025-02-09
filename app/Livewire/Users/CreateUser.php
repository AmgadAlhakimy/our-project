<?php

namespace App\Livewire\Users;

use App\Models\User;
use App\Traits\UserTrait;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class CreateUser extends Component
{
   use UserTrait;
    public function mount()
    {
        if (!auth()->check() || !auth()->user()->hasPermissionTo('create user')) {
            return redirect()->route('dashboard')->with('error', 'auth.unauthorized access');
        }
        $this->allRoles = Role::pluck('name', 'name')->toArray(); // Fetch roles from DB
    }

    public function save()
    {

        $this->validate();
        try {
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'roles_name' => $this->roles_name,
                'status' => $this->status,
            ]);

            // Assign role
            $user->assignRole($this->roles_name);

            $this->reset();
            return redirect()->route('display-users')->with(['success' => __('message.success')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function render()
    {
        return view('users.create-user');
    }
}
