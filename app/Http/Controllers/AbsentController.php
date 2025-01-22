<?php

namespace App\Http\Controllers;

use App\Models\Absent;
use App\Models\Classroom\Classroom;
use App\Models\Student\Student;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAbsentRequest;
use App\Http\Requests\UpdateAbsentRequest;

class AbsentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {

        try {
            $students = Student::where('classroom_id',$id) -> get();
            return view('teachers-affairs/absence/absent_student_class',
                compact("students"));

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }
    public function newAbsent($id)
    {

        try {
            $students = Student::where('classroom_id',$id) -> get();
//            $classroom = Classroom::where('id',$id) -> get();
            $classroom = Classroom::select('name')->where('id', $id)->first();
            if ($classroom) {
                $class_name = $classroom->name;
            } else {
                $class_name = '';
                // Handle the case where the classroom is not found
            }
            return view('teachers-affairs/absence/absent_student_class',
                compact("students",'class_name'));

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAbsentRequest $request)
    {

        try {

            Classroom::create([
                // 'edu_id'=>$request->level,
           ]);
            return redirect()->back()->with(['success'=>'saved successfully']);
            }catch (Exception $e){
                return redirect()->back()->with(['error' => $e->getMessage()]);
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(Absent $absent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absent $absent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAbsentRequest $request, Absent $absent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absent $absent)
    {
        //
    }
}
