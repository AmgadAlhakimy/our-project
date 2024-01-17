<?php

namespace App\Http\Controllers;

use App\Http\Requests\classs\StoreClasssRequest;
use App\Http\Requests\classs\UpdateClasssRequest;
use App\Models\Classs;
use App\Models\EducationalLevel;
use Exception;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $classes = Classs::all();
            return view('academic_dep/classes.index_classes', compact('classes'));
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
        $levels = EducationalLevel::all();
        return view('academic_dep/classes.create_classes', compact('levels'));
        }catch (Exception $e){
                return $e->getMessage();
            }
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClasssRequest $request)
    {
        try {
        Classs::create([
           'name' => [
               'en' => $request->name,
               'ar' => $request->name_ar
           ],
            'edu_id'=>$request->level,
            'cost'=>$request->cost,
       ]);
        return redirect()->back()->with(['success'=>'saved successfully']);
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        try {
        $classes = Classs::onlyTrashed()->get();
        return view('academic_dep/classes.deleted_classes', compact('classes'));
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {

        $class = Classs::findorFail($id);
        $levels = EducationalLevel::all();
        return view('academic_dep/classes.edit_classes', compact('class', 'levels'));
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClasssRequest $request, $id)
    {
        try {

        $class = Classs::findorFail($id);
        $class->update([
            'name' => [
                'en' => $request->name,
                'ar' => $request->name_ar
            ],
            'edu_id'=>$request->level,
            'cost'=>$request->cost,
        ]);
        return redirect()->route('classes.index');
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Classs::destroy($id);
            return redirect()->route('classes.index');
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Display a listing of deleted classes.
     */
    public function restore($id)
    {
        try {
        Classs::withTrashed()->where('id', $id)->restore();
        return redirect()->back();

        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * delete from database.
     */
    public function forceDelete($id)
    {
        try {
        Classs::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->back();

        }catch (Exception $e){
            return $e->getMessage();
        }
    }
}
