<?php

namespace App\Http\Controllers;

use App\Http\Requests\classs\StoreClasssRequest;
use App\Http\Requests\classs\UpdateClasssRequest;
use App\Models\Classs;
use App\Models\EducationalLevel;
use Exception;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display classes.
     */
    public function index()
    {
        try {
            $classes = Classs::all();
            return view('academic_dep/classes.index_classes',
                compact('classes'));

        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show creating new class page.
     */
    public function create()
    {
        try {
        $levels = EducationalLevel::all();
        return view('academic_dep/classes.create_classes',
            compact('levels'));

        }catch (Exception $e){
                return redirect()->back()->with(['error' => $e->getMessage()]);
          }
        }

    /**
     * Store a new class.
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
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display deleted classes.
     */
    public function show()
    {
        try {
        $classes = Classs::onlyTrashed()->get();
        return view('academic_dep/classes.deleted_classes',
            compact('classes'));
        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing class page.
     */
    public function edit($id)
    {
        try {
        $class = Classs::findorFail($id);
        $levels = EducationalLevel::all();
        return view('academic_dep/classes.edit_classes',
            compact('class', 'levels'));

        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified class.
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
        return redirect()->route('classes.index')
            ->with(['success' => __('message.update')]);

        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified class.
     */
    public function destroy($id)
    {
        try {
            Classs::destroy($id);
            return redirect()->route('classes.index')
                ->with(['warning' => trans('message.delete')]);

        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Restore the specified class.
     */
    public function restore($id)
    {
        try {
        Classs::withTrashed()->where('id', $id)->restore();
        return redirect()->back()
            ->with(['success' => trans('message.restore')]);

        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove by force the specified class.
     */
    public function forceDelete($id)
    {
        try {
        Classs::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->back()
            ->with(['warning' => trans('message.force delete')]);

        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    /**
     * show classes according to the search.
     */
    public function search(Request $request)
    {
        try {
            $search = $request->search;
            if(strtolower($search) == 'all' or $search == 'الكل')
                return $this->index();
            $classes = Classs::where(function ($query) use ($search){
                $query->where('name->en','like',"%$search%")
                    ->orwhere('name->ar','like',"%$search%")
                    ->orwhere('cost','like',"%$search%");
            })->orWhereHas('level',function ($query) use ($search){
                $query->where('name->en','like',"%$search%")
                    ->orwhere('name->ar','like',"%$search%");
            })->get();
            return view('academic_dep/classes.index_classes',
                compact('search','classes'));

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
