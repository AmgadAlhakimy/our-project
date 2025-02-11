<?php

namespace App\Http\Controllers\Parents;

use App\Http\Controllers\Controller;
use App\Http\Requests\Parents\StoreParentsRequest;
use App\Http\Requests\Parents\UpdateParentsRequest;
use App\Models\Parents\Parents;
use App\Models\Student\Student;
use Auth;

class ParentsController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:delete superior', ['only' => ['destroy']]);
        $this->middleware('permission:display deleted superiors', ['only' => ['show']]);
        $this->middleware('permission:restore superior', ['only' => ['restore']]);
        $this->middleware('permission:forceDelete superior', ['only' => ['forceDelete']]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        try {
            $parents = Parents::onlyTrashed()->get();
            return view('students-affairs.parents.deleted-parents',
                compact('parents'));
        }catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $student_id = Student::where('parents_id', $id)
                ->pluck('parents_id');
            if($student_id->count() == 0){
                $parent = Parents::findorFail($id);
                $parent->user_id = Auth::id();
                $parent->update();
                Parents::destroy($id);
                return redirect()->route('display-parents')
                    ->with(['warning' => trans('message.delete')]);
            }else{
                return redirect()->back() ->with(['error' =>
                    trans('message.delete_parents_error')]);
            }
        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Restore the specified Educational Level.
     */
    public function restore($id){
        try {
            Parents::withTrashed()->where('id', $id)->restore();
            $parent = Parents::findorFail($id);
            $parent->user_id = Auth::id();
            $parent->update();
            return redirect()->route('display-parents')
                ->with(['success' => trans('message.restore')]);

        } catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
    /**
     * Remove by force the specified Educational Level.
     */
    public function forceDelete($id)
    {
        try {
            Parents::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back()
                ->with(['warning' => trans('message.force delete')]);

        } catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
