<?php

namespace App\Http\Controllers;

use App\Http\Requests\Marks\StoreMarkRequest;
use App\Http\Requests\Marks\UpdateMarkRequest;
use App\Models\Classroom\Classroom;
use App\Models\Mark;

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
    public function insert($id)
    {
        try {
            $classroom = Classroom::findorfail(1);

            $marks = Mark::where('classroom_id', 1)
                ->where('subject_id', $id)->get();
            return view('teachers-affairs/marks.insert_marks',
                compact('marks', 'classroom'));

        } catch (\Exception  $e) {
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
    public function modify(UpdateMarkRequest $request, $id)
    {
        try {
            $students_num = Mark::where('classroom_id', 1)->where('subject_id', $id)->count();
            for ($i = 0; $i < $students_num; $i++) {
                $mark = Mark::findorFail($request->id[$i]);
                $mark->update([
                    'exam' => $request->exam[$i],
                    'homework' => $request->homework[$i],
                    'oral' => $request->oral[$i],
                    'behavior' => $request->behavior[$i],
                ]);
            }
            return redirect()->back()->with(['success' => __('message.success')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mark $mark)
    {
        //
    }
}
