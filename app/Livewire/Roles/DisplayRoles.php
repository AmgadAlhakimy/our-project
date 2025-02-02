<?php

namespace App\Livewire\Roles;

use App\Traits\QueryTrait;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Contracts\Role;

class DisplayRoles extends Component
{
    use WithPagination;
    use QueryTrait;
    public function render()
    {
        try {
            $myQuery =    $roles = \Spatie\Permission\Models\Role::where('id', 'like', "%$this->search%")
                ->orwhere('name','like',"%$this->search%")->get();
            $roles = $this->queryData("\Spatie\Permission\Models\Role", $myQuery);

            return view('roles.display-roles', [
                'roles' => $roles,
            ])->title('Roles');

//         orderBy('id','DESC')->paginate(5);
//            return view('roles.display-roles',compact('roles'))
//                ->with('i', ($request->input('page', 1) - 1) * 5);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
