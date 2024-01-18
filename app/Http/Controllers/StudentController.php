<?php

namespace App\Http\Controllers;

use App\Http\Requests\student\StoreStudentRequest;
use App\Http\Requests\student\UpdateStudentRequest;
use App\Models\Classs;
use App\Models\Student;
use Exception;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students_affairs/students.show_students',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
        $classes=Classs::all();
        return view('students_affairs/students.create_student',
            compact('classes'));

        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        try {
        $requestData = $request->all();
        $filename = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images/students', $filename, 'public');
        $requestData["photo"] = '/storage/'.$path;
        $requestData["class_id"] = $request->class;
        Student::create($requestData);

            return redirect()->back()->with(['success' => __('message.success')]);
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Student::destroy($id);
            return redirect()->route('students.index');

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
