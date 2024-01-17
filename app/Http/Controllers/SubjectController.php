<?php

namespace App\Http\Controllers;

use App\Http\Requests\subject\StoreSubjectRequest;
use App\Http\Requests\subject\UpdateSubjectRequest;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $subjects = Subject::all();
            return view('academic_dep/subjects.index_subjects', compact('subjects'));
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
            return view('academic_dep/subjects.create_subjects');
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
            return view('academic_dep/subjects.deleted_subjects', compact('subjects'));

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
            return view('academic_dep/subjects.edit_subjects', compact('subject'));
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
            return redirect()->back();

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
            Subject::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back();

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


}
