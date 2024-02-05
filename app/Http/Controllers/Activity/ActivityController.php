<?php

namespace App\Http\Controllers\Activity;

use App\Http\Controllers\Controller;
use App\Http\Requests\Activity\StoreActivityRequest;
use App\Http\Requests\Activity\UpdateActivityRequest;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display activities.
     */
    public function index()
    {
        try {
            $activities= Activity::all();
            return view('academic_dep/activities.display_activities',
                compact('activities'));
        }catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show creating new Activity page.
     */
    public function create()
    {
        try {
        return view('academic_dep/activities.create_activity');
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
            return view('academic_dep/activities.deleted_activities',
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
            return view('academic_dep/activities.edit_activity'
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
            $activity->update();
            return redirect()->route('activities.index')
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
            return redirect()->route('activities.index')
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

    /**
     * show activities according to the search.
     */
    public function search(Request $request)
    {
        try {
            $search = $request->search;
            if(strtolower($search) == 'all' or $search == 'الكل')
                return $this->index();
            $activities = Activity::where(function ($query) use ($search){
                $query->where('name->en','like',"%$search%")
                    ->orwhere('name->ar','like',"%$search%")
                    ->orwhere('location->en','like',"%$search%")
                    ->orwhere('location->ar','like',"%$search%")
                    ->orwhere('contact','like',"%$search%")
                    ->orwhere('date','like',"%$search%");
            })->get();
            return view('academic_dep/activities.display_activities',
                compact('search','activities'));

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
