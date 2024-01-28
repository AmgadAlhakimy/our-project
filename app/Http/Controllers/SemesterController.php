<?php

namespace App\Http\Controllers;

use App\Http\Requests\Semester\StoreSemesterRequest;
use App\Http\Requests\Semester\UpdateSemesterRequest;
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

            return redirect()->back()->with(['error' => $e->getMessage()]);
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
        catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        try {
        $semesters = Semester::onlyTrashed()->get();
        return view('semesters.deleted_classroom', compact('semesters'));
        }  catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
        $semester = Semester::findorFail($id);
        return view('semesters.edit', compact('semester'));
        }  catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
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
            return redirect()->route('semesters.index')
                ->with(['success' => trans('message.update')]);
        }
        catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
        Semester::destroy($id);
        return redirect()->route('semesters.index')
            ->with(['warning' => trans('message.delete')]);

        } catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function restore($id)
    {
        try {
        Semester::withTrashed()->where('id', $id)->restore();
        return redirect()->back()
            ->with(['success' => trans('message.restore')]);

        } catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function forceDelete($id)
    {
        try {
        Semester::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->back()
            ->with(['warning' => trans('message.force delete')]);

        } catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
