<?php

namespace App\Http\Controllers;

use App\Http\Requests\Subject\StoreSubjectRequest;
use App\Http\Requests\Subject\UpdateSubjectRequest;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SubjectController extends Controller
{
    /**
     * Display subjects.
     */
    public function index()
    {
        try {
            $subjects = Subject::all();
            return view('academic_dep/subjects.index_subjects',
                compact('subjects'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    /**
     * Show creating new Subject page.
     */
    public function create()
    {
        try {
            return view('academic_dep/subjects.create_subjects');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a new Subject.
     */
    public function store(StoreSubjectRequest $request)
    {
        try {
            Subject::create([
                'name' => [
                    'en' => $request->name,
                    'ar' => $request->name_ar,
                ]
            ]);
            return redirect()->back()->with(['success' => 'saved successfully']);
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
            return view('academic_dep/subjects.deleted_subjects',
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
            return view('academic_dep/subjects.edit_subjects',
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
            ]);
            return redirect()->route('subjects.index')
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
            Subject::destroy($id);
            return redirect()->route('subjects.index')
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
    /**
     * show subjects according to the search.
     */
    public function search(Request $request)
    {
        try {
            $search = $request->search;
            if(strtolower($search) == 'all' or $search == 'الكل')
                return $this->index();
            $subjects = Subject::where(function ($query) use ($search){
                $query->where('name->en','like',"%$search%")
                    ->orwhere('name->ar','like',"%$search%");
            })->get();
            return view('academic_dep/subjects.index_subjects',
                compact('search','subjects'));

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

}
