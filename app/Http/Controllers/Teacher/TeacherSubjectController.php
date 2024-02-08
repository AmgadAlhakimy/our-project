<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeacherSubjectRequest;
use App\Http\Requests\UpdateTeacherSubjectRequest;
use App\Models\Subject\Subject;
use App\Models\Teacher;
use App\Models\TeacherSubject;

class TeacherSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('academic_dep/relations.relations-page');

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $teachers = Teacher::all();
            $subjects = Subject::all();
            return view('academic_dep/relations.teacher_subjects',
                compact('teachers', 'subjects'));

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherSubjectRequest $request)
    {
        try {
            foreach ($request->subject_id as $subject_id) {
                echo $request->teacher_id;
                echo $subject_id;
                TeacherSubject::create([
                    'teacher_id'=>$request->teacher_id,
                    'subject_id'=>$subject_id,
                ]);
            }
            return redirect()->back()->with(['success' => 'saved successfully']);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(TeacherSubject $teacherSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeacherSubject $teacherSubject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherSubjectRequest $request, TeacherSubject $teacherSubject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeacherSubject $teacherSubject)
    {
        //
    }
}
