<?php

namespace App\Http\Controllers;

use App\Http\Requests\FollowUpStudent\StoreFollowUpStudentRequest;
use App\Http\Requests\FollowUpStudent\UpdateFollowUpStudentRequest;
use App\Models\FollowUpStudent;
use App\Models\Student\Student;

class FollowUpStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $students = Student::all();
            return view('teachers-affairs/daily.show_students',
                compact('students'));
        } catch (\Exception  $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function createNote($id)
    {
        try {
            $student = Student::findorfail($id);
            return view('teachers-affairs/daily.follow_up_children',
                compact('student'));
        } catch (\Exception  $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('teachers-affairs/daily.follow_up_children');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFollowUpStudentRequest $request)
    {
        try {
            FollowUpStudent::create([
                'subject' => $request->subject,
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
                'student_id' => $request->student_id,
            ]);
            return redirect()->back()->with(['success' => __('message.success')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(FollowUpStudent $followUpStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FollowUpStudent $followUpStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFollowUpStudentRequest $request, FollowUpStudent $followUpStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FollowUpStudent $followUpStudent)
    {
        //
    }
}
