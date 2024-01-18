<?php

namespace App\Http\Controllers;

use App\Http\Requests\activity\StoreActivityRequest;
use App\Http\Requests\activity\UpdateActivityRequest;
use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $activities= Activity::all();
            return view('academic_dep/activities.index_activities',compact('activities'));
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
        return view('academic_dep/activities.create_activities');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActivityRequest $request)
    {
        try {
            $activity = new Activity();
            $activity->name = ['en' => $request->name, 'ar' => $request->name_ar];
            $activity->location = ['en' => $request->location, 'ar' => $request->location_ar];
            $activity->contact = $request->contact;
            $activity->date = $request->date;
            $activity->note = $request->note;
            $activity->save();
            return redirect()->back()->with(['success' => __('message.success')]);
        }
        catch (\Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        try {
            $activities = Activity::onlyTrashed()->get();
            return view('academic_dep/activities.deleted_activities', compact('activities'));

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
            $activity=Activity::findorFail($id);
            return view('academic_dep/activities.edit_activities',compact('activity'));
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActivityRequest $request, $id)
    {
        try {
            $activity= Activity::findorFail($id);
            $activity->name = ['en' => $request->name,'ar' => $request->name_ar];
            $activity->location = ['en' => $request->location, 'ar' => $request-> location_ar];
            $activity->contact = $request->contact;
            $activity->date = $request->date;
            $activity->note = $request->note;
            $activity->update();
            return redirect()->route('activities.index')->with(['success' => __('message.update')]);
        }
        catch (\Exception $e){
            return $e->getMessage();
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $activity= Activity::findorFail($id);
            $activity::destroy($id);
            return redirect()->route('activities.index')->with(['success' => trans('message.delete')]);
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }

    public function restore($id)
    {
        try {
            Activity::withTrashed()->where('id', $id)->restore();
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
            Activity::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back();

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
