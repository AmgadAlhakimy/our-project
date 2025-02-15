<?php

namespace App\Livewire\Users;

use App\Models\Parents\Parents;
use App\Models\Teacher\Teacher;
use App\Models\User;
use App\Traits\UserTrait;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class EditUser extends Component
{
    use UserTrait;
    public $id;
    public $name;
    public $email;
    public $password;
    public $confirm_password;
    public function mount()
    {
        if (!auth()->check() || !auth()->user()->hasPermissionTo('edit user')) {
            return redirect()->route('home')->with('error', 'auth.unauthorized access');
        }

        $this->allRoles = Role::pluck('name', 'name')->toArray();
        $user = User::findorFail($this->id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->status = $user->status;
        $this->roles_name = $user->roles_name;
        $this->parents_id = $user->parent_id;
        $this->father_search = optional($user->parent)->father_name;
        $this->teacher_id = $user->teacher_id;
        $this->teacher_search = optional($user->teacher)->name;
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
                'roles_name' => $this->roles_name,
                'status' => $this->status,
                'parent_id'=>$this->parents_id,
                'teacher_id'=>$this->teacher_id,
            ]);

            // Assign role
            $user->syncRoles($this->roles_name);


            $this->reset();
            return redirect()->route('display-users')->with(['success' => __('message.update')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function render()
    {

        $user = User::findorFail($this->id);
        $fathers = Parents::orderBy('created_at', 'desc')->get();
        $teachers = Teacher::orderBy('created_at', 'desc')->get();
        if (strlen($this->father_search) > 0) {
            $fathers = Parents::where('father_name->en', 'like', "%$this->father_search%")
                ->orwhere('father_name->ar', 'like', "%$this->father_search%")->get();
        }
        if (strlen($this->teacher_search) > 0) {
            $teachers = Teacher::where('name->en', 'like', "%$this->teacher_search%")
                ->orwhere('name->ar', 'like', "%$this->teacher_search%")->get();
        }
        return view('users.edit-user',compact('fathers','teachers'));
    }
}
