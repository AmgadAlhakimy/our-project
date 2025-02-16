<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Http\Requests\Classroom\StoreClassroomTeacherRequest;
use App\Http\Requests\Classroom\UpdateClassroomTeacherRequest;
use App\Models\Classroom\Classroom;
use App\Models\Classroom\ClassroomTeacher;
use App\Models\Teacher\Teacher;
use Auth;
use Exception;

class ClassroomTeacherController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:create teachers-classes', ['only' => ['create','store']]);
        $this->middleware('permission:edit teachers-classes', ['only' => ['edit','update']]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $classrooms = Classroom::all();
            $teachers = Teacher::all();
            return view('academic-dep/relationships/class-teachers.create-class-teachers',
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
                    'user_id' => Auth::id(),
                    ]);
            }
            return redirect()->back()->with(['success' => 'message.success']);

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

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
            return view('academic-dep/relationships/class-teachers.edit-class-teachers',
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
            $teacher = Teacher::findOrFail($teacher_id);
            $teacher->classrooms()->syncWithPivotValues($request->classroom_id, [
                'user_id' => Auth::id(), // Store the authenticated user's ID
            ]);

            return redirect()->route('display-class-teachers')
                ->with(['success' => 'message.update']);


        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

}
