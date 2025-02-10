<?php

namespace App\Http\Controllers\Level;

use App\Http\Controllers\Controller;
use App\Http\Requests\Level\StoreEducationalLevelRequest;
use App\Http\Requests\Level\UpdateEducationalLevelRequest;
use App\Models\Classroom\Classroom;
use App\Models\EducationalLevel;
use Auth;

class EducationalLevelController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:create educational-level', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit educational-level', ['only' => ['edit']]);
        $this->middleware('permission:update educational-level', ['only' => ['update']]);
        $this->middleware('permission:delete educational-level', ['only' => ['destroy']]);
        $this->middleware('permission:display deleted educational-levels', ['only' => ['show']]);
        $this->middleware('permission:restore educational-level', ['only' => ['restore']]);
        $this->middleware('permission:forceDelete educational-level', ['only' => ['forceDelete']]);
    }

    /**
     * Show creating new educational Level page.
     */
    public function create()
    {
        try {
            return view('academic-dep/educational-levels.create-edu-level');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a new Educational Level.
     */
    public function store(StoreEducationalLevelRequest $request)
    {
        try {
            EducationalLevel::create([
                'name' => [
                    'en' => $request->name,
                    'ar' => $request->name_ar
                ],
                'user_id' => Auth::id(),
            ]);
            return redirect()->back()->with(['success' => __('message.success')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display deleted Educational levels.
     */
    public function show()
    {
        try {
            $levels = EducationalLevel::onlyTrashed()->get();
            return view('academic-dep/educational-levels.deleted-edu-level',
                compact('levels'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing Educational Level page.
     */
    public function edit($id)
    {
        try {
            $level = EducationalLevel::findorFail($id);
            return view('academic-dep.educational-levels.edit-edu-level',
                compact('level'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified Educational Level.
     */
    public function update(UpdateEducationalLevelRequest $request, $id)
    {
        try {
            $level = EducationalLevel::findorFail($id);
            $level->name = [
                'en' => $request->name,
                'ar' => $request->name_ar
            ];
            $level->user_id = Auth::id();
            $level->update();

            return redirect()->route('display-levels')
                ->with(['success' => __('message.update')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified Educational Level.
     */
    public function destroy($id)
    {
        try {
            $classroom_id = Classroom::where('edu_id', $id)->pluck('edu_id');
            if ($classroom_id->count() == 0) {
                EducationalLevel::destroy($id);
                return redirect()->route('display-levels')
                    ->with(['warning' => trans('message.delete')]);
            } else {
                return redirect()->back()->with(['error' => trans('message.delete_level_error')]);
            }

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Restore the specified Educational Level.
     */
    public function restore($id)
    {
        try {
            EducationalLevel::withTrashed()->where('id', $id)->restore();
            return redirect()->route('display-levels')
                ->with(['success' => trans('message.restore')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove by force the specified Educational Level.
     */
    public function forceDelete($id)
    {
        try {
            EducationalLevel::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back()
                ->with(['warning' => trans('message.force delete')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

}
