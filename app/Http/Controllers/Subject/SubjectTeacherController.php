<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subject\StoreSubjectTeacherRequest;
use App\Http\Requests\Subject\UpdateSubjectTeacherRequest;
use App\Models\Subject\Subject;
use App\Models\Subject\SubjectTeacher;
use App\Models\Teacher\Teacher;
use Exception;

class SubjectTeacherController extends Controller
{
    /**
     * Display the all teachers with their subjects.
     */
    public function index()
    {
        try {
            $teachers = Teacher::all();
            return view('academic-dep/relationships/subject-teachers.display-subject-teachers',
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
            return view('academic-dep/relationships/subject-teachers.create-subject-teachers',
                compact('teachers', 'subjects'));

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectTeacherRequest $request)
    {
        try {
            foreach ($request->subject_id as $subject_id) {
                SubjectTeacher::create([
                    'teacher_id' => $request->teacher_id,
                    'subject_id' => $subject_id,
                ]);
            }
            return redirect()->back()->with(['success' => 'message.success']);

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SubjectTeacher $teacherSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($teacher_id)
    {
        try {
            $teacher_subjects = [];
            $teacher = Teacher::findorfail($teacher_id);
            $subjects = Subject::all();
            $teacher_subject = SubjectTeacher::select('subject_id')
                ->where('teacher_id', $teacher_id)->get();
            foreach ($teacher_subject as $subject) {
                $teacher_subjects[] = $subject->subject_id;
            }
            return view('academic-dep/relationships/subject-teachers.edit-subject-teachers',
                compact('teacher', 'subjects', 'teacher_subjects'));

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectTeacherRequest $request, $teacher_id)
    {
        try {
            $teacher = Teacher::findOrFail($teacher_id);
            $teacher->subjects()->sync($request->subject_id);
            return redirect()->route('display-subject-teachers')
                ->with(['success' => 'message.update']);

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubjectTeacher $teacherSubject)
    {
        //
    }
}
