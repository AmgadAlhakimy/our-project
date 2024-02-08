<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEduClassroomRequest;
use App\Http\Requests\UpdateEduClassroomRequest;
use App\Models\Classroom\Classroom;
use App\Models\EducationalLevel;
use App\Models\EduClassroom;

class EduClassroomController extends Controller
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
            $classrooms = Classroom::all();
            $levels = EducationalLevel::all();
            return view('academic_dep/relations.',
                compact('classrooms','levels'));
        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEduClassroomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EduClassroom $eduClassroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EduClassroom $eduClassroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEduClassroomRequest $request, EduClassroom $eduClassroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EduClassroom $eduClassroom)
    {
        //
    }
}
