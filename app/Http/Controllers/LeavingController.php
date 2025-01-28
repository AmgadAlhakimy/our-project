<?php

namespace App\Http\Controllers;

use App\Models\Classroom\Classroom;
use App\Models\Leaving;
use App\Http\Requests\StoreLeavingRequest;
use App\Http\Requests\UpdateLeavingRequest;
use App\Models\Student\Student;
use Carbon\Carbon;

class LeavingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function newLeaving($classroom_id)
    {

        try {
            $students = Student::where('classroom_id', $classroom_id)->get();
            $classroom = Classroom::where('id', $classroom_id)->first();
            $month = Carbon::now()->format('F j');
            $date = Carbon::now()->format('Y-m-d');

            if (Leaving::where('created_at', 'like', "%$date%")
                ->where('classroom_id', $classroom_id)->exists()) {
                return redirect()->back()->with(['error' => __('leaving.sorry you have already checked leaving students for this class')]);
            }
            if (!count($classroom->students)) {
                return redirect()->back()->with(['error' => __('absent.sorry this classroom does not have students')]);
            }
            return view('teachers-affairs.leaving.new-leaving',
                compact('students', 'classroom', 'month'));

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }


    public function storeLeaving(StoreLeavingRequest $request, $classroom_id)
    {

        try {
            $students = Student::where('classroom_id', $classroom_id)->get();
            $classroom = Classroom::where('id', $classroom_id)->first();
            $date = Carbon::now()->format('Y-m-d');

            if (Leaving::where('created_at', 'like', "%$date%")
                ->where('classroom_id', $classroom_id)->exists()) {
                return redirect()->back()->with(['error' => __('leaving.sorry you have already checked leaving students for this class')]);
            }
            if ($request->leaving === null) {
                return redirect()->back()->with(['error' => __('leaving.sorry you have not checked any student')]);
            }
            if (count($request->leaving) === count($classroom->students)) {
                return redirect()->route('leaving.display', $classroom_id)->with(['success' => __('absent.that is cool no absent students today')]);
            }

            $leaving = [];
            foreach ($request->leaving as $key => $value) {
                $leaving [] = $key;
            }

            $index = 0;
            foreach ($students as $student) {
                if (in_array($index, $leaving)) {
                    Leaving::create([
                        'leaving' => true,
                        'student_id' => $student->id,
                        'classroom_id' => $classroom_id,
                    ]);
                }
                $index++;
            }
            return redirect()->route('leaving.display', $classroom_id)
                ->with(['success' => __('message.success')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function displayLeaving($classroom_id)
    {
        try {
            $leftStudents = Leaving::where('classroom_id', $classroom_id)->get();
            $classroom = Classroom::where('id', $classroom_id)->first();
            $month = Carbon::now()->format('F j');

            return view('teachers-affairs.leaving.display-left-children',
                compact('leftStudents', 'classroom', 'month'));

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editLeaving($classroom_id)
    {
        try {
            $students = Student::where('classroom_id', $classroom_id)->get();
            $date = Carbon::now()->format('Y-m-d');
            $classroom = Classroom::where('id', $classroom_id)->first();
            $month = Carbon::now()->format('F j');

            $left = Leaving::where('created_at', 'like', "%$date%")
                ->where('classroom_id', $classroom_id)->get();

            if (empty(Leaving::where('created_at', 'like', "%$date%")
                ->where('classroom_id', $classroom_id)->first())) {
                return redirect()->back()->with(['error' =>
                    __('leaving.you can not edit left children while there is no one left')]);
            }

            $left_children = [];
            foreach ($left as $le) {
                $left_children [] = $le->student->id;
            }

            return view('teachers-affairs.leaving.edit-left-children',
                compact('students', 'classroom', 'month', 'left_children'));

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeavingRequest $request, Leaving $leaving)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leaving $leaving)
    {
        //
    }
}
