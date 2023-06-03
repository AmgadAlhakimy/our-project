<?php

namespace App\Http\Controllers;

use App\Models\EducationalLevel;
use App\Http\Requests\StoreEducationalLevelRequest;
use App\Http\Requests\UpdateEducationalLevelRequest;
use Illuminate\Database\Eloquent\Model;

class EducationalLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $levels=EducationalLevel::all();
        return view('educational_levels.index',compact('levels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('educational_levels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEducationalLevelRequest $request)
    {
        return 'help';
        $level= new EducationalLevel();
        $level->name = ['en' => $request->name, 'ar' => $request->name_ar];
        $level->save();
        return redirect()->back()->with(['success'=> __('message.success')]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $levels=EducationalLevel::onlyTrashed()->get();
        return view('educational_levels.deleted',compact('levels'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $level=EducationalLevel::findorFail($id);
        return view('educational_levels.edit',compact('level'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEducationalLevelRequest $request,$id)
    {
        $level=EducationalLevel::findorFail($id);
        $level->update($request->all());
        return redirect()->route('educational_levels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        EducationalLevel::destroy($id);
        return redirect()->route('educational_levels.index');
    }
    /**
     * Display a listing of deleted classes.
     */
    public function restore($id)
    {
        EducationalLevel::withTrashed()
            ->where('id',$id)
            ->restore();
        return redirect()->back();
    }
    /**
     * delete from database.
     */
    public function forceDelete($id)
    {
        EducationalLevel::withTrashed()
            ->where('id',$id)
            ->forceDelete();
        return redirect()->back();
    }
}
