<?php

namespace App\Http\Controllers;

use App\Http\Requests\Activity_classroom\StoreActivityClassroomRequest;
use App\Http\Requests\Activity_classroom\UpdateActivityClassroomRequest;
use App\Models\Activity;
use App\Models\ActivityClassroom;
use App\Models\Classroom;

class ActivityClassroomController extends Controller
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
            $classses = Classroom::all();
            $activities = Activity::all();
            return view('academic_dep/relations.class_activities',
                compact('classses','activities'));
        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActivityClassroomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ActivityClassroom $activityClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ActivityClassroom $activityClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActivityClassroomRequest $request, ActivityClassroom $activityClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ActivityClassroom $activityClass)
    {
        //
    }
}
