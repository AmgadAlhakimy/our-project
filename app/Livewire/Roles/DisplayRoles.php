<?php

namespace App\Livewire\Roles;

use App\Traits\QueryTrait;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class DisplayRoles extends Component
{
    use WithPagination;
    use QueryTrait;
    public function mount()
    {
        if (!auth()->check() || !auth()->user()->hasPermissionTo('display roles')) {
            return redirect()->route('dashboard')->with('error', 'auth.unauthorized access');
        }
    }
    public function render()
    {
        try {
            $myQuery =  Role::where('id', 'like', "%$this->search%")
                ->orwhere('name','like',"%$this->search%")->get();
            $roles = $this->queryData("\Spatie\Permission\Models\Role", $myQuery);

            return view('roles.display-roles', [
                'roles' => $roles,
            ])->title('Roles');

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
