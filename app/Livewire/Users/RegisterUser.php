<?php

namespace App\Livewire\Users;

use App\Models\User;
use App\Traits\UserTrait;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegisterUser extends Component
{
    use UserTrait;

    public $status;
    public $roles_name = [];

    public function save()
    {

        $this->validate();
        try {
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'status'=>'disabled',
                'roles_name'=>'null',
                'password' => Hash::make($this->password),
            ]);

            $this->reset();
            return redirect()->route('auth.welcome')->with(['success' => __('message.success')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
    public function render()
    {
        return view('auth.register')->layout('auth.empty');
    }
}

