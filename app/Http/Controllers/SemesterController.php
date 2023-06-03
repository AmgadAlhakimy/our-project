<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSemesterRequest;
use App\Http\Requests\UpdateSemesterRequest;
use App\Models\Semester;
use Exception;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $semesters = Semester::all();
            return view('semesters.index', compact('semesters'));
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('semesters.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSemesterRequest $request)
    {
        try {
            $Semester = new Semester();
            $Semester->name = ['en' => $request->name, 'ar' => $request->name_ar];
            $Semester->save();
            return redirect()->back()->with(['success' => __('message.success')]);
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $semesters = Semester::onlyTrashed()->get();
        return view('semesters.deleted', compact('semesters'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $semester = Semester::findorFail($id);
        return view('semesters.edit', compact('semester'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSemesterRequest $request, $id)
    {
        try {
            $semester = Semester::findorFail($id);
            $semester->name = ['en' => $request->name, 'ar' => $request->name_ar];
            $semester->update();
            return redirect()->route('semesters.index')->with(['success' => trans('message.update')]);
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {

        Semester::destroy($id);
        return redirect()->route('semesters.index')->with(['success' => trans('message.delete')]);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function restore($id)
    {
        try {

        Semester::withTrashed()->where('id', $id)->restore();
        return redirect()->back();
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function forceDelete($id)
    {
        try {
        Semester::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->back();
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
}
