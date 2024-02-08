<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubjectClassroomRequest;
use App\Http\Requests\UpdateSubjectClassroomRequest;
use App\Models\Classroom\Classroom;
use App\Models\Subject\Subject;
use App\Models\Subject\SubjectClassroom;

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
            return view('academic_dep/relations.subject_classrooms',
                compact('classrooms', 'subjects'));

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectClassroomRequest $request)
    {
        //
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
