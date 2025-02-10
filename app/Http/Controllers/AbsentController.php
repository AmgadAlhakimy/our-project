<?php

namespace App\Http\Controllers;

use App\Models\Absent;
use App\Models\Classroom\Classroom;
use App\Models\Student\Student;
use App\Http\Requests\StoreAbsentRequest;
use Auth;
use Carbon\Carbon;

class AbsentController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:presenting children', ['only' => ['newPresenting', 'storeAbsent']]);
        $this->middleware('permission:display absent children', ['only' => ['displayAbsent']]);
        $this->middleware('permission:edit absent for all children', ['only' => ['editAbsent']]);
        $this->middleware('permission:update absent children', ['only' => ['updateAbsent']]);
        $this->middleware('permission:display absent children of all time', ['only' => ['displayAbsentMonthly']]);
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
            $date = Carbon::now()->format('Y-m-d');

            if (
                Absent::where('created_at', 'like', "%$date%")
                    ->where('classroom_id', $classroom_id)->exists()
            ) {
                return redirect()->back()->with(['error' => __('absent.come on yo! did not you just present students for today')]);
            }
            if (!count($classroom->students)) {
                return redirect()->back()->with(['error' => __('absent.sorry this classroom does not have students')]);
            }
            return view('teachers-affairs.absence.new-presenting',
                compact('students', 'classroom', 'month')
            );

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }

    public function storeAbsent(StoreAbsentRequest $request, $classroom_id)
    {
        try {
            $students = Student::where('classroom_id', $classroom_id)->get();
            $classroom = Classroom::where('id', $classroom_id)->first();
            $date = Carbon::now()->format('Y-m-d');

            if ($request->absent === null) {
                return redirect()->back()->with(['error' => __('leaving.sorry you have not checked any student')]);
            }
            if (
                Absent::where('created_at', 'like', "%$date%")
                    ->where('classroom_id', $classroom_id)->exists()
            ) {
                return redirect()->back()->with(['error' => __('absent.come on yo! did not you just present students for today')]);
            }
            if (count($request->absent) === count($classroom->students)) {
                return redirect()->route('absent.display', $classroom_id)->with(['success' => __('absent.that is cool no absent students today')]);
            }

            $absents = [];
            foreach ($request->absent as $key => $value) {
                $absents[] = $key;
            }

            $index = 0;
            foreach ($students as $student) {
                if (!in_array($index, $absents)) {
                    Absent::create([
                        'absent' => true,
                        'absent_reason' => $request->absent_reason[$index],
                        'student_id' => $student->id,
                        'classroom_id' => $classroom_id,
                        'user_id' => Auth::id(),
                    ]);
                }
                $index++;
            }
            return redirect()->route('absent.display', $classroom_id)
                ->with(['success' => __('message.success')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function displayAbsent($classroom_id)
    {
        try {
            $absentStudents = Absent::where('classroom_id', $classroom_id)->get();
            $classroom = Classroom::findorFail($classroom_id);
            $month = Carbon::now()->format('F j');

            return view(
                'teachers-affairs.absence.display-absent-children',
                compact('absentStudents', 'classroom', 'month')
            );

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function editAbsent($classroom_id)
    {
        try {
            $students = Student::where('classroom_id', $classroom_id)->get();
            $date = Carbon::now()->format('Y-m-d');
            $classroom = Classroom::where('id', $classroom_id)->first();
            $month = Carbon::now()->format('F j');

            $absent = Absent::where('created_at', 'like', "%$date%")
                ->where('classroom_id', $classroom_id)->get();

            if (
                empty(Absent::where('created_at', 'like', "%$date%")
                    ->where('classroom_id', $classroom_id)->first())
            ) {
                return redirect()->back()->with([
                    'error' =>
                        __('absent.you can not edit absent children while there is no one absent')
                ]);
            }

            $absent_children = [];
            foreach ($absent as $ab) {
                $absent_children[] = $ab->student->id;
            }

            return view(
                'teachers-affairs.absence.edit-absent-children',
                compact('students', 'classroom', 'month', 'absent_children')
            );

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function updateAbsent(StoreAbsentRequest $request, $classroom_id)
    {
        try {
            $date = Carbon::now()->format('Y-m-d');
            $absent = Absent::where('created_at', 'like', "%$date%")
                ->where('classroom_id', $classroom_id)->get();

            foreach ($absent as $ab) {
                Absent::destroy($ab->id);
            }
            return $this->storeAbsent($request, $classroom_id);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function displayAbsentMonthly($classroom_id)
    {
        try {
            $classroom = Classroom::where('id', $classroom_id)->first();
            $month = Carbon::now()->
                format('Y M d');

            return view('teachers-affairs.absence.show_absent_by_date',
                compact('classroom', 'month'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}

