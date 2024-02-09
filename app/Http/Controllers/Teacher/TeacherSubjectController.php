<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\StoreTeacherSubjectRequest;
use App\Http\Requests\Teacher\UpdateTeacherSubjectRequest;
use App\Models\Subject\Subject;
use App\Models\Teacher\Teacher;
use App\Models\Teacher\TeacherSubject;
use Exception;

class TeacherSubjectController extends Controller
{
    /**
     * Display the all teachers with their subjects.
     */
    public function index()
    {
        try {
            $teachers = Teacher::all();

            return view('academic_dep/relationships/teacher_subjects.display_teacher_subjects',
            compact('teachers'));

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
            return view('academic_dep/relationships/teacher_subjects.create_teacher_subjects',
                compact('teachers', 'subjects'));

        } catch (Exception $e) {
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
                TeacherSubject::create([
                    'teacher_id'=>$request->teacher_id,
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
    public function show(TeacherSubject $teacherSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($teacher_id)
    {

        try {
            $teacher = Teacher::findorfail($teacher_id);
            $subjects = Subject::all();
            $teacher_subjects = TeacherSubject::where('teacher_id',$teacher_id)->get();
            return view('academic_dep/relationships/teacher_subjects.edit_teacher_subjects',
                compact('teacher','subjects','teacher_subjects'));

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
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
