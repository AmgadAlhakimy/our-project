<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Classroom\Classroom;
use App\Models\EducationalLevel;
use App\Models\Relative;
use App\Models\Student\Student;
use App\Traits\PhotoTrait;
use Exception;

class StudentController extends Controller
{
    use PhotoTrait;


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
            Student::destroy($id);
            return redirect()->route('display-students')
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
            $classroom_id = Student::withTrashed()->select('classroom_id')->where('id', $id)->get();
            $classroom = Classroom::where('id', $classroom_id)->pluck('id');
            if ($classroom->count() > 0) {
                Student::withTrashed()->where('id', $id)->restore();
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
        try {
            $student = Student::findorFail($id);
            return view('students-affairs/students.student_more_info',
                compact('student',));

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
