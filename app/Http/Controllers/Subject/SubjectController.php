<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subject\StoreSubjectRequest;
use App\Http\Requests\Subject\UpdateSubjectRequest;
use App\Models\Subject\Subject;
use Auth;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:create subject', ['only' => ['create','store']]);
        $this->middleware('permission:edit subject', ['only' => ['edit']]);
        $this->middleware('permission:update subject', ['only' => ['update']]);
        $this->middleware('permission:delete subject', ['only' => ['destroy']]);
        $this->middleware('permission:display deleted subjects', ['only' => ['show']]);
        $this->middleware('permission:restore subject', ['only' => ['restore']]);
        $this->middleware('permission:forceDelete subject', ['only' => ['forceDelete']]);
    }


    /**
     * Show creating a new subject page.
     */
    public function create()
    {
        try {
            return view('academic-dep/subjects.create-subject');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a new subject.
     */
    public function store(StoreSubjectRequest $request)
    {
        try {
            Subject::create([
                'name' => [
                    'en' => $request->name,
                    'ar' => $request->name_ar,
                ],
                'user_id' => Auth::id(),
            ]);
            return redirect()->back()->with(['success' => 'message.success']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display deleted subjects.
     */
    public function show()
    {
        try {
            $subjects = Subject::onlyTrashed()->get();
            return view('academic-dep/subjects.deleted-subjects',
                compact('subjects'));

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing Subject page.
     */
    public function edit($id)
    {
        try {
            $subject = Subject::findorFail($id);
            return view('academic-dep/subjects.edit-subject',
                compact('subject'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified Subject.
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
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('display-subjects')
                ->with(['success' => __('message.update')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }

    /**
     * Remove the specified Subject.
     */
    public function destroy($id)
    {
        try {
            $subject = Subject::findorFail($id);
            $subject->user_id = Auth::id();
            $subject->update();
            Subject::destroy($id);
            return redirect()->route('display-subjects')
                ->with(['warning' => trans('message.delete')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Restore the specified Subject.
     */
    public function restore($id)
    {
        try {
            Subject::withTrashed()->where('id', $id)->restore();
            $subject = Subject::findorFail($id);
            $subject->user_id = Auth::id();
            $subject->update();
            return redirect()->back()
                ->with(['success' => trans('message.restore')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove by force the specified Subject.
     */
    public function forceDelete($id)
    {
        try {
            Subject::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back()
                ->with(['warning' => trans('message.force delete')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
