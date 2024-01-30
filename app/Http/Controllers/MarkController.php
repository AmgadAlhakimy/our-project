<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Mark;
use App\Http\Requests\StoreMarkRequest;
use App\Http\Requests\UpdateMarkRequest;
use App\Models\Student;
use App\Models\Subject;

class MarkController extends Controller
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

    }

    /**
     * Show the form for inserting marks for student
     * according to a subject.
     */
    public function insertMarks($id)
    {

        try {
            $classroom = Classroom::findorfail($id);
            $subject = Subject::findorfail($id);
            $marks = Mark::all();
            $students =  $classroom->students;
            $marks = $subject->marks;
            return view('teachers_affairs/marks.insert_marks',
                compact('students', 'marks'));
        }catch (\Exception  $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMarkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mark $mark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mark $mark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMarkRequest $request, Mark $mark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mark $mark)
    {
        //
    }
}
