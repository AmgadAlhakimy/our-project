<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $subjects = Subject::all();
            return view('subjects.index', compact('subjects'));
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
            return view('subjects.create');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectRequest $request)
    {
        try {
            Subject::create([
                'name' => [
                    'en' => $request->name,
                    'ar' => $request->name_ar,
                ]
            ]);
            return redirect()->back()->with(['success' => 'saved successfully']);
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

            $subjects = Subject::onlyTrashed()->get();
            return view('subjects.deleted', compact('subjects'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $subject = Subject::findorFail($id);
            return view('subjects.edit', compact('subject'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, $id)
    {
        try {

            $subject = Subject::findorFail($id);
            $subject->update([
                'name' => [
                    'en' => $request->name,
                    'ar' => $request->name_ar,
                ],
            ]);
            return redirect()->route('subjects.index');
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {

            Subject::destroy($id);
            return redirect()->route('subjects.index');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function restore($id)
    {
        try {

            Subject::withTrashed()->where('id', $id)->restore();
            return redirect()->route('subjects.index');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function forceDelete($id)
    {
        try {

            Subject::withTrashed()
                ->where('id', $id)
                ->forceDelete();
            return redirect()->back();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


}
