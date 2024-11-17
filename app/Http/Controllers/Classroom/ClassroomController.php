<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Http\Requests\Classroom\StoreClassroomRequest;
use App\Http\Requests\Classroom\UpdateClassroomRequest;
use App\Models\Classroom\Classroom;
use App\Models\EducationalLevel;
use App\Models\Student;
use Exception;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class ClassroomController extends Controller
{
    use WithPagination;
    /**
     * Display classrooms.
     */
    public function index()
    {
        try {
            $classrooms = Classroom::paginate(5);
            return view('academic-dep/classrooms.display-classrooms',
                compact('classrooms'));

        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show creating new classroom page.
     */
    public function create()
    {
        try {
        $levels = EducationalLevel::all();
        return view('academic-dep/classrooms.create-classroom',
            compact('levels'));

        }catch (Exception $e){
                return redirect()->back()->with(['error' => $e->getMessage()]);
          }
        }

    /**
     * Store a new classroom.
     */
    public function store(StoreClassroomRequest $request)
    {
        try {
        Classroom::create([
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
     * Display deleted classrooms.
     */
    public function show()
    {
        try {
        $classrooms = Classroom::onlyTrashed()->get();
        return view('academic-dep/classrooms.deleted-classrooms',
            compact('classrooms'));
        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing classroom page.
     */
    public function edit($id)
    {
        try {
        $classroom = Classroom::findorFail($id);
        $levels = EducationalLevel::all();
        return view('academic-dep/classrooms.edit-classroom',
            compact('classroom', 'levels'));

        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified classroom.
     */
    public function update(UpdateClassroomRequest $request, $id)
    {
        try {
        $classroom = Classroom::findorFail($id);
        $classroom->update([
            'name' => [
                'en' => $request->name,
                'ar' => $request->name_ar
            ],
            'edu_id'=>$request->level,
            'cost'=>$request->cost,
        ]);
        return redirect()->route('display-classrooms')
            ->with(['success' => __('message.update')]);

        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified classroom.
     */
    public function destroy($id)
    {
        try {
            $student_id = Student::where('classroom_id', $id)
                ->pluck('classroom_id');
            if($student_id->count() == 0){
            Classroom::destroy($id);
            return redirect()->route('display-classrooms')
                ->with(['warning' => trans('message.delete')]);
            }else{
                return redirect()->back() ->with(['error' =>
                    trans('message.delete_classroom_error')]);
            }
        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Restore the specified classroom.
     */
    public function restore($id)
    {
        try {
            $edu_id = Classroom::withTrashed()->select('edu_id')
                ->where('id', $id)->get();
            $level = EducationalLevel::where('id', $edu_id)->pluck('id');

            if($level->count() > 0){
            Classroom::withTrashed()->where('id', $id)->restore();
            return redirect()->back()
                ->with(['success' => trans('message.restore')]);
            }else{
                return redirect()->back() ->with(['error' =>
                    trans('message.restore_classroom_error')]);
            }
        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove by force the specified classroom.
     */
    public function forceDelete($id)
    {
        try {
        Classroom::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->back()
            ->with(['warning' => trans('message.force delete')]);

        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    /**
     * show classrooms according to the search.
     */
    public function search(Request $request)
    {
        try {
            $search = $request->search;
            if(strtolower($search) == 'all' or $search == 'الكل')
                return $this->index();
            $classrooms = Classroom::where(function ($query) use ($search){
                $query->where('name->en','like',"%$search%")
                    ->orwhere('name->ar','like',"%$search%")
                    ->orwhere('cost','like',"%$search%");
            })->orWhereHas('Level',function ($query) use ($search){
                $query->where('name->en','like',"%$search%")
                    ->orwhere('name->ar','like',"%$search%");
            })->get();
            return view('academic-dep/classrooms.display_classrooms',
                compact('search','classrooms'));

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
