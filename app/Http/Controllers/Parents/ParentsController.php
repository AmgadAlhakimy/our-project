<?php

namespace App\Http\Controllers\Parents;

use App\Http\Controllers\Controller;
use App\Http\Requests\Parents\StoreParentsRequest;
use App\Http\Requests\Parents\UpdateParentsRequest;
use App\Models\Parents\Parents;
use App\Models\Student\Student;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students-affairs.parents.create-parents');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students-affairs.parents.create-parents');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreParentsRequest $request)
    {
//        try {
//            Parents::create([
//                'father_name' => [
//                    'en' => $request->father_name,
//                    'ar' => $request->father_name_ar
//                ],
//                'father_work' => [
//                    'en' => $request->father_work,
//                    'ar' => $request->father_work_ar
//                ],
//                'father_contact1'=>$request->father_contact1,
//                'father_contact2'=>$request->father_contact2,
//                'mother_name' => [
//                    'en' => $request->mother_name,
//                    'ar' => $request->mother_name_ar
//                ],
//                'mother_work' => [
//                    'en' => $request->mother_work,
//                    'ar' => $request->mother_work_ar,
//                ],
//                'mother_contact1'=>$request->mother_contact1,
//                'mother_contact2'=>$request->mother_contact2,
//                'kin_name' => [
//                    'en' => $request->kin_name,
//                    'ar' => $request->kin_name_ar,
//                ],
//                'kin_relationship' => [
//                    'en' => $request->kin_relationship,
//                    'ar' => $request->kin_relationship_ar,
//                ],
//                'kin_contact'=>$request->kin_contact,
//            ]);
//            return redirect()->back()->with(['success' => __('message.success')]);
//
//        }catch (\Exception $e){
//            return redirect()->back()->with(['error' => $e->getMessage()]);
//        }
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
     * Show the form for editing the specified resource.
     */
    public function edit(Parents $parents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParentsRequest $request, Parents $parents)
    {
        //
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
