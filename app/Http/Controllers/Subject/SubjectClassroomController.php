<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subject\StoreSubjectClassroomRequest;
use App\Http\Requests\Subject\UpdateSubjectClassroomRequest;
use App\Models\Classroom\Classroom;
use App\Models\Subject\Subject;
use App\Models\Subject\SubjectClassroom;
use Exception;

class SubjectClassroomController extends Controller
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
    public function create()
    {
        try {
            $subjects = Subject::all();
            $classrooms = Classroom::all();
            return view('academic_dep/relationships.subject_classrooms',
                compact('classrooms', 'subjects'));

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectClassroomRequest $request)
    {
        try {
            foreach ($request->subject_id as $subject_id) {
                SubjectClassroom::create([
                    'classroom_id'=>$request->classroom_id,
                    'subject_id'=>$subject_id,
                ]);
            }
            return redirect()->back()->with(['success' => 'saved successfully']);

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(SubjectClassroom $subjectClassroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubjectClassroom $subjectClassroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectClassroomRequest $request, SubjectClassroom $subjectClassroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubjectClassroom $subjectClassroom)
    {
        //
    }
}
