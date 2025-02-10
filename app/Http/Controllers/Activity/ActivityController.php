<?php

namespace App\Http\Controllers\Activity;

use App\Http\Controllers\Controller;
use App\Http\Requests\Activity\StoreActivityRequest;
use App\Http\Requests\Activity\UpdateActivityRequest;
use App\Models\Activity\Activity;
use Auth;

class ActivityController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:create activity', ['only' => ['create','store']]);
        $this->middleware('permission:edit activity', ['only' => ['edit']]);
        $this->middleware('permission:update activity', ['only' => ['update']]);
        $this->middleware('permission:delete activity', ['only' => ['destroy']]);
        $this->middleware('permission:display deleted activities', ['only' => ['show']]);
        $this->middleware('permission:restore activity', ['only' => ['restore']]);
        $this->middleware('permission:forceDelete activity', ['only' => ['forceDelete']]);
    }

    /**
     * Show creating new Activity page.
     */
    public function create()
    {
        try {
        return view('academic-dep/activities.create-activity');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a new Activity.
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
            $activity->user_id = Auth::id();
            $activity->save();
            return redirect()->back()->with(['success' => __('message.success')]);
        }
        catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display deleted activities.
     */
    public function show()
    {
        try {
            $activities = Activity::onlyTrashed()->get();
            return view('academic-dep/activities.deleted-activities',
                compact('activities'));

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing Activity page.
     */
    public function edit($id)
    {
        try {
            $activity=Activity::findorFail($id);
            return view('academic-dep/activities.edit-activity'
                ,compact('activity'));
        }catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
    /**
     * Update the specified Activity.
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
            $activity->user_id =  Auth::id();
            $activity->update();
            return redirect()->route('display-activities')
                ->with(['success' => __('message.update')]);
        }
        catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
    /**
     * Remove the specified Activity.
     */
    public function destroy($id)
    {
        try {
            $activity= Activity::findorFail($id);
            $activity::destroy($id);
            return redirect()->route('display-activities')
                ->with(['warning' => trans('message.delete')]);

        } catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
    /**
     * Restore the specified Activity.
     */
    public function restore($id)
    {
        try {
            Activity::withTrashed()->where('id', $id)->restore();
            return redirect()->back()
                ->with(['success' => trans('message.restore')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove by force the specified Activity.
     */
    public function forceDelete($id)
    {
        try {
            Activity::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back()
                ->with(['warning' => trans('message.force delete')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
