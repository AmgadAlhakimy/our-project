<?php

namespace App\Http\Controllers\Activity;

use App\Http\Controllers\Controller;
use App\Http\Requests\Activity\StoreActivityClassroomRequest;
use App\Http\Requests\Activity\UpdateActivityClassroomRequest;
use App\Models\Activity\Activity;
use App\Models\Activity\ActivityClassroom;
use App\Models\Classroom\Classroom;
use Exception;

class ActivityClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $classrooms = Classroom::all();
            return view('academic_dep/relationships/activity_classroom.display_activities_classrooms',
                compact('classrooms'));

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
            $activities = Activity::all();
            return view('academic_dep/relationships/activity_classroom.create_activity_classroom',
                compact('classrooms', 'activities'));

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActivityClassroomRequest $request)
    {
        try {
        foreach ($request->activity_id as $activity_id) {
            ActivityClassroom::create([
                'classroom_id'=>$request->classroom_id,
                'activity_id'=>$activity_id,
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
    public function show(ActivityClassroom $activityClassroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($classroom_id)
    {
        try {
            $activity_classrooms = [];
            $classroom = Classroom::findorfail($classroom_id);
            $activities = Activity::all();
            $activity_classroom = ActivityClassroom::select('activity_id')
                ->where('classroom_id', $classroom_id)->get();
            foreach ($activity_classroom as $activity) {
                $activity_classrooms[] = $activity->activity_id;
            }
            return view('academic_dep/relationships/activity_classroom.edit_activity_classroom',
                compact('classroom', 'activities', 'activity_classrooms'));

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActivityClassroomRequest $request, $classroom_id)
    {
        try {
            $classroom = Classroom::findOrFail($classroom_id);
            $classroom->activities()->sync($request->activity_id);
            return redirect()->route('activity_classroom.index')
                ->with(['success' => 'message.update']);

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ActivityClassroom $activityClassroom)
    {
        //
    }
}
