<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Http\Requests\Classroom\StoreClassroomTeacherRequest;
use App\Http\Requests\Classroom\UpdateClassroomTeacherRequest;
use App\Models\Classroom\Classroom;
use App\Models\Classroom\ClassroomTeacher;
use App\Models\Teacher\Teacher;
use Exception;

class ClassroomTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $teachers = Teacher::all();
            return view('academic-dep/relationships/classroom_teacher.display_classroom_teachers',
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
            $classrooms = Classroom::all();
            $teachers = Teacher::all();
            return view('academic-dep/relationships/classroom_teacher.create_classroom_teacher',
                compact('classrooms', 'teachers'));

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClassroomTeacherRequest $request)
    {
        try {
            foreach ($request->classroom_id as $classroom_id) {
                ClassroomTeacher::create([
                    'teacher_id'=>$request->teacher_id,
                    'classroom_id'=>$classroom_id,
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
    public function show(ClassroomTeacher $classroomTeacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($teacher_id)
    {
        try {
            $teacher_classrooms = [];
            $teacher = Teacher::findorfail($teacher_id);
            $classrooms = Classroom::all();
            $teacher_classroom = ClassroomTeacher::select('classroom_id')
                ->where('teacher_id', $teacher_id)->get();
            foreach ($teacher_classroom as $classroom) {
                $teacher_classrooms[] = $classroom->classroom_id;
            }
            return view('academic-dep/relationships/classroom_teacher.edit_classroom_teacher',
                compact('teacher', 'classrooms', 'teacher_classrooms'));

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClassroomTeacherRequest $request, $teacher_id)
    {
        try {
            $teacher = Teacher::findorfail($teacher_id);
            $teacher->classrooms()->sync($request->classroom_id);
            return redirect()->route('classroom_teacher.index')
                ->with(['success' => 'message.update']);

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClassroomTeacher $classroomTeacher)
    {
        //
    }
}
