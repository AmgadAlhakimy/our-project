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
        $classes=Classs::all();
        return view('students_affairs/students.create_student',
            compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        try {
            Student::create([
                'name' => ['en' => $request->name, 'ar' => $request->name_ar],
                'photo'=>$request->photo,
                'address' => ['en' => $request->address, 'ar' => $request->address_ar],
                'sex' => ['en' => $request->sex, 'ar' => $request->sex_ar],
                'birthdate' => $request->birthdate,
                'place_of_birth' => ['en' => $request->place_of_birth, 'ar' => $request->place_of_birth_ar],
                'take_medicine' => ['en' => $request->take_medicine, 'ar' => $request->take_medicine_ar],
                'medicine_desc' => ['en' => $request->medicine_desc, 'ar' => $request->medicine_desc_ar],
                'have_allergy' => ['en' => $request->have_allergy, 'ar' => $request->have_allergy_ar],
                'allergy_desc' => ['en' => $request->allergy_desc, 'ar' => $request->allergy_desc_ar],
                'have_health_problem' => ['en' => $request->have_health_problem, 'ar' => $request->have_health_problem_ar],
                'health_problem_desc' => ['en' => $request->health_problem_desc, 'ar' => $request->health_problem_desc_ar],
                'note' => $request->note,
                'class_id' => $request->class,
            ]);

//            $student = new Student();
//            $student->name = ['en' => $request->name, 'ar' => $request->name_ar];
//            $student->address1 = ['en' => $request->address1, 'ar'
//            => $request->address1_ar];
//            $student->address2 = ['en' => $request->address2, 'ar'
//            => $request->address2_ar];
//            $student->sex = ['en' => $request->sex, 'ar' => $request->sex_ar];
//            $student->place_of_birth = ['en' => $request->place_of_birth, 'ar'
//            => $request->place_of_birth_ar];
//            $student->take_medicine = ['en' => $request->take_medicine, 'ar'
//            => $request->take_medicine_ar];
//            $student->photo = $request->photo;
//            $student->birthdate = $request->birthdate;
//            $student->class = $request->class;
//            $student->save();
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
    public function destroy(Student $student)
    {
        //
    }
}
