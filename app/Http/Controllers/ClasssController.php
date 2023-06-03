<?php

namespace App\Http\Controllers;

use App\Http\Requests\class\StoreClasssRequest;
use App\Http\Requests\class\UpdateClasssRequest;
use App\Models\Classs;
use App\Models\EducationalLevel;

class ClasssController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Classs::all();
        return view('classes.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $levels = EducationalLevel::all();
        return view('classes.create', compact('levels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClasssRequest $request)
    {
        Classs::create($request->all());
        return redirect()->back()->with(['success'=>'saved successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $classes = Classs::onlyTrashed()->get();
        return view('classes.deleted', compact('classes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $class = Classs::findorFail($id);
        $levels = EducationalLevel::all();
        return view('classes.edit', compact('class', 'levels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClasssRequest $request, $id)
    {
        $classs = Classs::findorFail($id);
        $classs->update($request->all());
        return redirect()->route('classes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Classs::destroy($id);
        return redirect()->route('classes.index');
    }

    /**
     * Display a listing of deleted classes.
     */
    public function restore($id)
    {
        Classs::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->back();
    }

    /**
     * delete from database.
     */
    public function forceDelete($id)
    {
        Classs::withTrashed()
            ->where('id', $id)
            ->forceDelete();
        return redirect()->back();
    }
}
