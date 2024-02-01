<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\FollowUpChild;
use App\Http\Requests\StoreFollowUpChildRequest;
use App\Http\Requests\UpdateFollowUpChildRequest;
use App\Models\Student;
use App\Models\Subject;


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
            return view('teachers_affairs/daily.follow_up_all_children',
                compact('subject','classroom'));
        }catch (\Exception  $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
    public function showChildren($classroom_id, $subject_id)
    {
        try {
            $classroom = Classroom::findorfail($classroom_id);
            $subject = Subject::findorfail($subject_id);
            return view('teachers_affairs/daily.show_children',
                compact('subject','classroom'));
        }catch (\Exception  $e){
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
            return view('teachers_affairs/daily.follow_up_children',
                compact('student'));
        }catch (\Exception  $e){
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
    public function store(StoreFollowUpChildRequest $request)
    {
        try {
            FollowUpChild::create([
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
    public function show($classroom_id, $subject_id)
    {
        try {
            $students = Student::all();
            return view('teachers_affairs/daily.show_children',
                compact('students'));
        }catch (\Exception  $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FollowUpChild $followUpChild)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFollowUpChildRequest $request, FollowUpChild $followUpChild)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FollowUpChild $followUpChild)
    {
        //
    }
}
