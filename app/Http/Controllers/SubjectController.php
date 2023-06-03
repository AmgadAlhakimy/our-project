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
        $subjects = Subject::all();
        return view('subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectRequest $request)
    {
        Subject::create($request->all());
        return redirect()->back()->with(['success' => 'saved successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $subjects=Subject::onlyTrashed()->get();
        return view('subjects.deleted',compact('subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $subject = Subject::findorFail($id);
        return view('subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, $id)
    {
        $subject = Subject::findorFail($id);
        $subject->update($request->all());

        return redirect()->route('subjects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Subject::destroy($id);
        return redirect()->route('subjects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function restore($id)
    {
        Subject::withTrashed()->where('id',$id)->restore();
        return redirect()->route('subjects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function forceDelete($id)
    {
        Subject::withTrashed()
            ->where('id',$id)
            ->forceDelete();
        return redirect()->back();
    }


}
