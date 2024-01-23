<?php

namespace App\Http\Controllers;

use App\Http\Requests\activity\StoreActivityRequest;
use App\Http\Requests\activity\UpdateActivityRequest;
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
            return view('academic_dep/activities.index_activities',compact('activities'));
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Show creating new activity page.
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
     * Store a new activity.
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
     * Display deleted activities.
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
     * Show the form for editing activity page.
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
     * Update the specified activity.
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
     * Remove the specified activity.
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
    /**
     * Restore the specified activity.
     */
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
     * Remove by force the specified activity.
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
            return view('academic_dep/activities.index_activities',
                compact('search','activities'));

        }catch (\Exception $e){
            return $e->getMessage();
        }
    }
}
