<?php

namespace App\Http\Controllers;

use App\Http\Requests\Relative\StoreRelativeRequest;
use App\Http\Requests\Relative\UpdateRelativeRequest;
use App\Models\Relative;
use App\Models\Student;

class RelativeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $relatives = Relative::all();
            return view('students/relatives.index_relatives',
                compact('relatives'));

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('students_affairs/relatives.create_relative');
        }catch (\Exception $e)
        {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRelativeRequest $request)
    {
        try {
            Relative::create([
                'father_name' => [
                    'en' => $request->father_name,
                    'ar' => $request->father_name_ar
                ],
                'father_work' => [
                    'en' => $request->father_work,
                    'ar' => $request->father_work_ar
                ],
                'father_contact1'=>$request->father_contact1,
                'father_contact2'=>$request->father_contact2,
                'mother_name' => [
                    'en' => $request->mother_name,
                    'ar' => $request->mother_name_ar
                ],
                'mother_work' => [
                    'en' => $request->mother_work,
                    'ar' => $request->mother_work_ar,
                ],
                'mother_contact1'=>$request->mother_contact1,
                'mother_contact2'=>$request->mother_contact2,
                'kin_name' => [
                    'en' => $request->kin_name,
                    'ar' => $request->kin_name_ar,
                ],
                'kin_relationship' => [
                    'en' => $request->kin_relationship,
                    'ar' => $request->kin_relationship_ar,
                ],
                'kin_contact'=>$request->kin_contact,
            ]);
            return redirect()->back()->with(['success' => __('message.success')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Relative $relative)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Relative $relative)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRelativeRequest $request, Relative $relative)
    {
        //
    }

    /**
     * Remove the specified classroom.
     */
    public function destroy($id)
    {
        try {
            $relative_id = Student::where('relative_id', $id)->pluck('relative_id');
            if($relative_id->count() == 0){
                Relative::destroy($id);
                return redirect()->route('relatives.index')
                    ->with(['warning' => trans('message.delete')]);
            }else{
                return redirect()->back() ->with(['error' => trans('message.delete_relative_error')]);
            }
        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
