<?php

namespace App\Livewire\Users;

use App\Models\User;
use App\Traits\QueryTrait;
use Livewire\Component;
use Livewire\WithPagination;

class DisplayUsers extends Component
{
    use WithPagination;
    use QueryTrait;
    public function render()
    {
        try {
            $myQuery = User::where('id', 'like', "%$this->search%")
                ->orwhere('name','like',"%$this->search%")
                ->orwhere('email','like',"%$this->search%")->get();
            $users = $this->queryData("App\Models\User", $myQuery);

            return view('users.display-users', [
                'users' => $users,
            ])->title('Users');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
