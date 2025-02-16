<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Http\Requests\Classroom\StoreClassroomSubjectRequest;
use App\Http\Requests\Classroom\UpdateClassroomSubjectRequest;
use App\Models\Classroom\Classroom;
use App\Models\Classroom\ClassroomSubject;
use App\Models\Subject\Subject;
use Auth;
use Exception;

class   ClassroomSubjectController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:create subjects-classes', ['only' => ['create','store']]);
        $this->middleware('permission:edit subjects-classes', ['only' => ['edit','update']]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $classrooms = Classroom::all();
            $subjects = Subject::all();
            return view('academic-dep/relationships/class-subjects.create-class-subjects',
                compact('classrooms', 'subjects'));

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClassroomSubjectRequest $request)
    {
        try {
            foreach ($request->subject_id as $subject_id) {
                ClassroomSubject::create([
                    'classroom_id'=>$request->classroom_id,
                    'subject_id'=>$subject_id,
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
    public function edit($classroom_id)
    {
        try {
            $classroom_subjects = [];
            $classroom = Classroom::findorfail($classroom_id);
            $subjects = Subject::all();
            $classroom_subject = ClassroomSubject::select('subject_id')
                ->where('classroom_id', $classroom_id)->get();
            foreach ($classroom_subject as $subject) {
                $classroom_subjects[] = $subject->subject_id;
            }
            return view('academic-dep/relationships/class-subjects.edit-class-subjects',
                compact('classroom', 'subjects', 'classroom_subjects'));

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClassroomSubjectRequest $request, $classroom_id)
    {
        try {
            $classroom = Classroom::findOrFail($classroom_id);
            $classroom->subjects()->syncWithPivotValues($request->subject_id, [
                'user_id' => Auth::id(), // Store the authenticated user ID
            ]);

            return redirect()->route('display-class-subjects')
                ->with(['success' => 'message.update']);


        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
