<?php

namespace App\Http\Controllers;

use App\Models\Absent;
use App\Models\Classroom\Classroom;
use App\Models\Student\Student;
use App\Http\Requests\StoreAbsentRequest;
use App\Http\Requests\UpdateAbsentRequest;
use Carbon\Carbon;

class AbsentController extends Controller
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
    public function newPresenting($classroom_id)
    {
        try {
            $students = Student::where('classroom_id', $classroom_id)->get();
            $classroom = Classroom::where('id', $classroom_id)->first();
            $month = Carbon::now()->format('F j');
            if (count($classroom->subjects) === 0) {
                return redirect()->back()->with(['error' => __('follow_up.sorry this classroom does not have subjects')]);
            }
            return view('teachers-affairs/absence/new-presenting',
                compact('students', 'classroom', 'month'));

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }

    public function storeAbsent(StoreAbsentRequest $request, $classroom_id)
    {

        try {


            $date = Carbon::now()->format('Y-m-d');
            if (Absent::where('created_at', 'like', "%$date%")
                ->where('classroom_id', $classroom_id)
                ->exists()) {
                return redirect()->back()->with(['error' => __('absent.come on yo! did not you just saved the homework for today')]);
            } else {
                $students = Student::where('classroom_id', $classroom_id)->get();
                foreach ($students as $student) {
                    $this->storeChild($request, $student->id, $classroom_id);
                }
                return redirect()->back()
                    ->with(['success' => __('message.success')]);
            }


            if ($request->absent){
                return redirect()->back()->with(['success' => __('absent.that is cool no absent students today')]);
            }
            $students = Student::where('classroom_id', $classroom_id)->get();

            return $request;
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Absent $absent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absent $absent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAbsentRequest $request, Absent $absent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absent $absent)
    {
        //
    }
}
