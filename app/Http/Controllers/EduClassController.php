<?php

namespace App\Http\Controllers;

use App\Models\Classs;
use App\Models\EducationalLevel;
use App\Models\EduClass;
use App\Http\Requests\StoreEduClassRequest;
use App\Http\Requests\UpdateEduClassRequest;

class EduClassController extends Controller
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
            $levels = EducationalLevel::all();
            return view('academic_dep/relations.',
                compact('classses','levels'));
        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEduClassRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EduClass $eduClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EduClass $eduClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEduClassRequest $request, EduClass $eduClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EduClass $eduClass)
    {
        //
    }
}
