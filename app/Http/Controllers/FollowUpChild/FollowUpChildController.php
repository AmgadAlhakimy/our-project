<?php

namespace App\Http\Controllers\FollowUpChild;

use App\Http\Controllers\Controller;
use App\Http\Requests\FollowUpChild\StoreFollowUpChildRequest;
use App\Http\Requests\FollowUpChild\UpdateFollowUpChildRequest;
use App\Models\Classroom\Classroom;
use App\Models\FollowUpChild;
use App\Models\Student\Student;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class FollowUpChildController extends Controller
{

    public function writingFollowUp($classroom_id)
    {
        try {
            $classroom = Classroom::findorfail($classroom_id);
            $date = Carbon::now()->format('Y-m-d');
            $month = Carbon::now()->format('F j');
            if (FollowUpChild::where('created_at', 'like', "%$date%")
                ->where('classroom_id', $classroom_id)
                ->exists()) {
                return redirect()->back()
                    ->with(['error' => __('follow_up.come on yo! did not you just saved the homework for today')]);
            }
            if (count($classroom->subjects) === 0) {
                return redirect()->back()->with(['error' => __('follow_up.sorry this classroom does not have subjects')]);
            }

            return view('teachers-affairs/follow_up_children.writing_in_follow_up_children',
                compact('classroom', 'month'));
        } catch (Exception  $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * store all children at the same time.
     */
    public function storeAll(StoreFollowUpChildRequest $request, $classroom_id)
    {
        try {
            $date = Carbon::now()->format('Y-m-d');
            if (FollowUpChild::where('created_at', 'like', "%$date%")
                ->where('classroom_id', $classroom_id)
                ->exists()) {
                return redirect()->back()
                    ->with(['error' => __('follow_up.come on yo! did not you just saved the homework for today')]);
            }
                $students = Student::where('classroom_id', $classroom_id)->get();
                foreach ($students as $student) {
                    $this->storeChild($request, $student->id, $classroom_id);
                }
                return redirect()->back()
                    ->with(['success' => __('message.success')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store one child at a time.
     */
    public function storeChild(StoreFollowUpChildRequest $request, $student_id, $classroom_id)
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
                'classroom_id' => $classroom_id,
                'note' => $request->note,
            ]);
            return true;

        } catch (\Exception $e) {
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
            $month = Carbon::now()->format('F j');
            $date = Carbon::now()->format('Y-m-d');

            foreach ($classroom->subjects as $subject) {
                $subjects[] = $subject->name;
            }

            $child = FollowUpChild::where('created_at', 'like', "%$date%")
                ->where('classroom_id', $classroom_id)
                ->first();

            if (empty($child)) {
                return redirect()->back()->with(['error' => __('message.this class is empty nothing to edit')]);
            }
            $homework = $child->homework;
            $subjects_homework = array_combine($subjects, $homework);
            return view('teachers-affairs/follow_up_children.editing_in_follow_up_children',
                compact('classroom', 'month', 'subjects_homework', 'child'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function updateAllChildren(UpdateFollowUpChildRequest $request, $classroom_id)
    {
        try {
            $date = Carbon::now()->format('Y-m-d');
            $follow_up = FollowUpChild::where('created_at', 'like', "%$date%")
                ->where('classroom_id', $classroom_id)
                ->get();


            foreach ($follow_up as $child) {
                $this->updateChild($request, $child->id, $classroom_id);
            }
            return redirect()->route('follow_up_children-display', $classroom_id)
                ->with(['success' => __('message.update')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editChild($id, $classroom_id)
    {
        try {
            $subjects = [];
            $classroom = Classroom::findorfail($classroom_id);
            foreach ($classroom->subjects as $subject) {
                $subjects[] = $subject->name;
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
    public function updateChild(UpdateFollowUpChildRequest $request, $child_id, $classroom_id)
    {
        try {
            $child = FollowUpChild::findorFail($child_id);
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
            return redirect()->route('follow_up_children-display', $classroom_id)
                ->with(['success' => __('message.update')]);


        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
