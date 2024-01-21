<?php

namespace App\Http\Controllers;

use App\Http\Requests\level\StoreEducationalLevelRequest;
use App\Http\Requests\level\UpdateEducationalLevelRequest;
use App\Models\EducationalLevel;
use http\Env\Request;

class EducationalLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $levels = EducationalLevel::all();
            return view('academic_dep/educational_levels.index_education_levels', compact('levels'));

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
        return view('academic_dep/educational_levels.create_education_levels');
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
            $levels = EducationalLevel::onlyTrashed()->get();
            return view('academic_dep/educational_levels.deleted_education_levels', compact('levels'));
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
        return view('academic_dep/educational_levels.edit_education_levels',
            compact('level'));
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
        return redirect()->route('educational_levels.index');
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
        return redirect()->route('educational_levels.index');
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function restore($id){
        try {
            EducationalLevel::withTrashed()->where('id', $id)->restore();
            return redirect()->back();
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }

    public function forceDelete($id)
    {
        try {
            EducationalLevel::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back();
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }

    public function search(Request $request)
    {
        return 'hello';
        $search = $request->search;
        $levels = EducationalLevel::where(function ($query) use ($search){
            $query->where('id','like',"%$search%")
                ->orwhere('name','like',"%$search%");
        })->get();
        return view('academic_dep/educational_levels.index_education_levels',compact('search','levels'));
    }
}
