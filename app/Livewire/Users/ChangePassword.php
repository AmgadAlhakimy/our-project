<?php

namespace App\Livewire\Users;

use App\Models\User;
use App\Traits\UserTrait;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Component
{

    public $id;
    public $name;
    #[Rule('required|min:8')]
    public $password;
    #[Rule('required|same:password')]
    public $confirm_password;

    public function mount()
    {
        if (!auth()->check() || !auth()->user()->hasPermissionTo('change users password')) {
            return redirect()->route('dashboard')->with('error', 'auth.unauthorized access');
        }

        $user = User::findorFail($this->id);
        $this->name = $user->name;

    }
    public function save()
    {
        $this->validate();
        try {
            $user = User::findorFail($this->id);
            $user->update([
                'password' => Hash::make($this->password),
            ]);

            $this->reset();
            return redirect()->route('display-users')->with(['success' => __('message.update')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function render()
    {
        return view('users.change-password');
    }
}
