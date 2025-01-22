<?php

namespace App\Http\Controllers\FollowUpChild;

use App\Http\Controllers\Controller;
use App\Http\Requests\FollowUpChild\StoreFollowUpChildRequest;
use App\Http\Requests\FollowUpChild\UpdateFollowUpChildRequest;
use App\Models\Classroom\Classroom;
use App\Models\FollowUpChild;
use App\Models\Student\Student;
use App\Models\Subject\Subject;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class FollowUpChildController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        try {
            $classroom = Classroom::findorfail(1);
            $subject = Subject::findorfail(1);
            return view('teachers-affairs/follow_up_children.follow_up_all_children',
                compact('subject', 'classroom'));
        } catch (\Exception  $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display all children according to the classroom.
     */
    public function displayAllChildren($classroom_id)
    {
        try {

            $classroom = Classroom::findorfail($classroom_id);
            $month = Carbon::now()->format('F j');
            $date = Carbon::now()->format('Y-m-d');
            $follow_up = FollowUpChild::where('created_at', 'like', "%$date%")->get();

            return view('teachers-affairs/follow_up_children.display_follow_up_children',
                compact('classroom', 'follow_up', 'month'));
        } catch (\Exception  $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function writingFollowUp($classroom_id)
    {
        try {
            $classroom = Classroom::findorfail($classroom_id);
            if (count($classroom->subjects) === 0) {
                return redirect()->back()->with(['error' => __('follow_up.sorry this classroom does not have subjects')]);
            }
            $month = Carbon::now()->format('F j');
            return view('teachers-affairs/follow_up_children.writing_in_follow_up_children',
                compact('classroom', 'month'));
        } catch (Exception  $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function createNote($student_id)
    {
        try {
            $date = Carbon::now()->format('Y-m-d');
            if (FollowUpChild::where('student_id', $student_id)
                ->where('created_at', 'like', "%$date%")->exists()) {
                $student = Student::findorfail($student_id);
                $follow_up = FollowUpChild::where('student_id', $student_id)->get();
                return view('teachers-affairs/follow_up_children.follow_up_child',
                    compact('student', 'follow_up'));

            } else {
                return redirect()->back()->with(['error' => __('follow_up.sorry first add students')]);
            }

        } catch (\Exception  $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeChild(StoreFollowUpChildRequest $request, $student_id)
    {
        try {
            FollowUpChild::create([
                'homework' => $request->homework,
                'bath' => [
                    'en' => __('public.' . $request->bath),
                    'ar' => __('public.' . $request->bath . '1'),
                ],
                'snack' => [
                    'en' => __('public.' . $request->snack),
                    'ar' => __('public.' . $request->snack . '1'),
                ],
                'food' => [
                    'en' => __('public.' . $request->food),
                    'ar' => __('public.' . $request->food . '1'),
                ],
                'student_id' => $student_id,
                'note' => $request->note,
            ]);
            return true;

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    /**
     * store for all students.
     */
    public function storeAll(StoreFollowUpChildRequest $request, $classroom_id)
    {
        try {
            $date = Carbon::now()->format('Y-m-d');
            if (FollowUpChild::where('created_at', 'like', "%$date%")->exists()) {
                return redirect()->route('follow_up_children.displayAllChildren', $classroom_id)
                    ->with(['error' => __('message.homework already exists')]);

            } else {
                $students = Student::where('classroom_id', $classroom_id)->get();
                foreach ($students as $student) {
                    $this->storeChild($request, $student->id);
                }
                return redirect()->route('follow_up_children.displayAllChildren', $classroom_id)
                    ->with(['success' => __('message.success')]);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $subjects = [];
            $classroom = Classroom::findorfail(1);
            foreach ($classroom->subjects as $subject) {
                array_push($subjects, $subject->name);
            }
            $month = Carbon::now()->format('F j');
            $child = FollowUpChild::findorFail($id);
            $homework = $child->homework;
            $subjects_homework = array_combine($subjects, $homework);
            return view('teachers-affairs/follow_up_children.edit_in_follow_up_child',
                compact('classroom', 'month', 'subjects_homework', 'child'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFollowUpChildRequest $request, $id)
    {
        try {
            $child = FollowUpChild::findorFail($id);
            $child->update([
                'homework' => $request->homework,
                'bath' => [
                    'en' => __('public.' . $request->bath),
                    'ar' => __('public.' . $request->bath . '1'),
                ],
                'snack' => [
                    'en' => __('public.' . $request->snack),
                    'ar' => __('public.' . $request->snack . '1'),
                ],
                'food' => [
                    'en' => __('public.' . $request->food),
                    'ar' => __('public.' . $request->food . '1'),
                ],
                'note' => $request->note,
            ]);
                return redirect()->route('follow_up_children.displayAllChildren', 1)
                    ->with(['success' => __('message.update')]);


        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editAllChildren($classroom_id)
    {

        try {
            $subjects = [];
            $classroom = Classroom::findorfail($classroom_id);
            foreach ($classroom->subjects as $subject) {
                array_push($subjects, $subject->name);
            }
            $month = Carbon::now()->format('F j');
            $child = FollowUpChild::findorFail(1);
            $homework = $child->homework;
            $subjects_homework = array_combine($subjects, $homework);
            return view('teachers-affairs/follow_up_children.editing_in_follow_up_children',
                compact('classroom', 'month', 'subjects_homework', 'child'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * store for all students.
     */
    public function updateAllChildren(UpdateFollowUpChildRequest $request, $classroom_id)
    {
        try {
            $date = Carbon::now()->format('Y-m-d');
//            $students = CreateStudent::where('classroom_id', $classroom_id)->get();
            $children = FollowUpChild::all();
            foreach ($children as $child) {
                $this->update($request, $child->id);
            }
            return redirect()->route('follow_up_children.displayAllChildren', $classroom_id)
                ->with(['success' => __('message.update')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FollowUpChild $followUpChild)
    {
        //
    }

    public function displayClasses()
    {
        return $classrooms = Classroom::all();

    }
}
