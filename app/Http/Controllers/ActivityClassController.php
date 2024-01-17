<?php

namespace App\Http\Controllers;

use App\Http\Requests\activity_class\StoreActivityClassRequest;
use App\Http\Requests\activity_class\UpdateActivityClassRequest;
use App\Models\Activity;
use App\Models\ActivityClass;
use App\Models\Classs;

class ActivityClassController extends Controller
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
            $classses = Classs::all();
            $activities = Activity::all();
            return view('academic_dep/relations.class_activities',
                compact('classses','activities'));
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActivityClassRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ActivityClass $activityClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ActivityClass $activityClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActivityClassRequest $request, ActivityClass $activityClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ActivityClass $activityClass)
    {
        //
    }
}
