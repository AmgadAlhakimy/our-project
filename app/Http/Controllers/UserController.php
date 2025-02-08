<?php

namespace App\Http\Controllers;

use App\Models\User;


class UserController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:delete user', ['only' => ['destroy']]);
        $this->middleware('permission:display deleted users', ['only' => ['show']]);
        $this->middleware('permission:restore user', ['only' => ['restore']]);
        $this->middleware('permission:forceDelete user', ['only' => ['forceDelete']]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        try {
            $users = User::onlyTrashed()->get();
            return view('users.deleted-users',
                compact('users'));

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        try {
            User::destroy($id);
            return redirect()->route('display-users')
                ->with(['warning' => trans('message.delete')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Restore the specified CreateStudent.
     */
    public function restore($id)
    {
        try {
            User::withTrashed()->where('id', $id)->restore();
            return redirect()->back()
                ->with(['success' => trans('message.restore')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove by force the specified CreateStudent.
     */
    public function forceDelete($id)
    {
        try {
            User::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back()
                ->with(['warning' => trans('message.force delete')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
