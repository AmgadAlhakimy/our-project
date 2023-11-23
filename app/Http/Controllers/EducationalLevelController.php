<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEducationalLevelRequest;
use App\Http\Requests\UpdateEducationalLevelRequest;
use App\Models\EducationalLevel;

class EducationalLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $levels = EducationalLevel::all();
            return view('academic_dep/educational_levels.index', compact('levels'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
        return view('academic_dep/educational_levels.create');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEducationalLevelRequest $request)
    {
        try {
         EducationalLevel::create([
             'name' => [
                 'en' => $request->name,
                 'ar' => $request->name_ar
             ],
         ]);
        return redirect()->back()->with(['success' => __('message.success')]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        try {
        return 'show text and method';
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
        $level = EducationalLevel::findorFail($id);
        return view('academic_dep/educational_levels.edit', compact('level'));
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEducationalLevelRequest $request, $id)
    {
        try {
        $level = EducationalLevel::findorFail($id);
            $level->name = ['en' => $request->name, 'ar' => $request->name_ar];
            $level->update();
        return redirect()->route('academic_dep/educational_levels.index');
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
        EducationalLevel::destroy($id);
        return redirect()->route('academic_dep/educational_levels.index');
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
