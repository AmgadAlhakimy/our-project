<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Classroom\Classroom;
use App\Models\EducationalLevel;
use App\Models\Parents\Parents;
use App\Models\Relative;
use App\Models\Student\Student;
use App\Traits\PhotoTrait;
use Auth;
use Exception;

class StudentController extends Controller
{
    use PhotoTrait;

    function __construct()
    {
        $this->middleware('permission:delete student', ['only' => ['destroy']]);
        $this->middleware('permission:display deleted students', ['only' => ['show']]);
        $this->middleware('permission:restore student', ['only' => ['restore']]);
        $this->middleware('permission:forceDelete student', ['only' => ['forceDelete']]);
    }
    /**
     * Display deleted students.
     */
    public function show()
    {
        try {
            $students = Student::onlyTrashed()->get();
            return view('students-affairs/students.deleted-students',
                compact('students',));

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    /**
     * Remove the specified CreateStudent.
     */
    public function destroy($id)
    {
        try {
            $classroom_id = Student::findorFail($id)->classroom->id;
            $student = Student::findorFail($id);
            $student->user_id = Auth::id();
            $student->update();
            Student::destroy($id);
            return redirect()->route('display-students',$classroom_id)
                ->with(['warning' => trans('message.delete')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    /**
     * Restore the specified CreateStudent.
     */
    public function restore($id)
    {
        try {
            $classroom_id = Student::withTrashed()->where('id', $id)->value('classroom_id');
            $classroom = Classroom::where('id', $classroom_id)->pluck('id');

            if ($classroom->count() > 0) {
                Student::withTrashed()->where('id', $id)->restore();
                $student = Student::findorFail($id);
                $student->user_id = Auth::id();
                $student->update();
                return redirect()->back()
                    ->with(['success' => trans('message.restore')]);
            } else {
                return redirect()->back()->with(['error' => trans('message.restore_student_error')]);
            }
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove by force the specified CreateStudent.
     */
    public function forceDelete($id)
    {
        try {
            $this->deleteImage($id, "App\Models\Student\Student");

            Student::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back()
                ->with(['warning' => trans('message.force delete')]);

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * show CreateStudent according to the search.
     */
    public function more($id)
    {
        if (!auth()->user()->hasAnyPermission(['student more info', 'about children'])) {
            return redirect()->route('home')->with('error', __('auth.unauthorized access'));
        }
        try {
            $student = Student::findorFail($id);
            return view('students-affairs.students.student_more_info',
                compact('student'));

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
