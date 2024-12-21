<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use App\Http\Requests\StoreParentsRequest;
use App\Http\Requests\UpdateParentsRequest;
use App\Models\Student;

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
    public function show(Parents $parents)
    {
        //
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
}
