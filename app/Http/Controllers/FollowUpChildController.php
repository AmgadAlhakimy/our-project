<?php

namespace App\Http\Controllers;

use App\Http\Requests\FollowUpChild\StoreFollowUpChildRequest;
use App\Http\Requests\FollowUpChild\UpdateFollowUpChildRequest;
use App\Models\Classroom;
use App\Models\FollowUpChild;
use App\Models\Student;
use App\Models\Subject;
use Carbon\Carbon;


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
            return view('teachers_affairs/follow_up_children.follow_up_all_children',
                compact('subject', 'classroom'));
        } catch (\Exception  $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function displayAllChildren()
    {
        try {
            $classroom = Classroom::findorfail(1);
            $date = Carbon::now()->format('Y-m-d');
            $follow_up = FollowUpChild::where('created_at', 'like', "%$date%")->get();

            return view('teachers_affairs/follow_up_children.display_follow_up_children',
                compact('classroom', 'follow_up'));
        } catch (\Exception  $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function showChildren($classroom_id)
    {
        try {
            $classroom = Classroom::findorfail($classroom_id);
            $subject = Subject::findorfail(2);
            $month = Carbon::now()->format('F j');
            return view('teachers_affairs/follow_up_children.show_children',
                compact('subject', 'classroom', 'month'));
        } catch (\Exception  $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function createNote($student_id)
    {
//                $follow_up = FollowUpChild::where('student_id', $student_id)->get();
//                foreach ($follow_up as $follow){
//                    $i = 0;
//                    echo $follow->id;
//                    echo $follow->subject;
//                    echo $follow->comment[$i];
//                    $i++;
//                }
        try {
            $date = Carbon::now()->format('Y-m-d');
            if (FollowUpChild::where('student_id', $student_id)
                ->where('created_at', 'like', "%$date%")->exists()) {
                $student = Student::findorfail($student_id);
                $follow_up = FollowUpChild::where('student_id', $student_id)->get();
                return view('teachers_affairs/follow_up_children.follow_up_child',
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
                'comment' => $request->comment,
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
            return redirect()->back()->with(['success' => __('message.success')]);

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
                return redirect()->back()->with(['error' => __('message.already exists')]);

            } else {
                $students = Student::where('classroom_id', $classroom_id)->get();
                foreach ($students as $student) {
                    $this->storeChild($request, $student->id);
                }
                return redirect()->route('follow_up_children.showChildren', $classroom_id)
                    ->with(['success' => __('message.success')]);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public
    function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public
    function edit(FollowUpChild $followUpChild)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public
    function update(UpdateFollowUpChildRequest $request, FollowUpChild $followUpChild)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public
    function destroy(FollowUpChild $followUpChild)
    {
        //
    }
}
