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
        try {
        $students = Student::all();
        return view('students_affairs/students.show_students',compact('students'));

        }catch (\Exception  $e){
            return $e->getMessage();
        }
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
        Student::create([
            'name' => [
                'en' => $request->name,
                'ar' => $request->name_ar
            ],
            'photo'=>$requestData["photo"],
            'address'=>[
                'en'=> $request->address,
                'ar'=> $request->address_ar
            ],
            'sex'=>$request->sex,
            'birthdate'=>$request->birthdate,
            'place_of_birth'=>[
              'en'=>$request->place_of_birth,
              'ar'=>$request->place_of_birth_ar,
            ],
            'take_medicine'=>$request->take_medicine,
            'medicine_desc'=>[
                'en'=>$request->medicine_desc,
                'ar'=>$request->medicine_desc_ar,
            ],
            'have_allergy'=>$request->have_allergy,
            'allergy_desc' =>[
                'en'=>$request->allergy_desc,
                'ar'=>$request->allergy_desc_ar,
            ],
            'have_health_problem'=>$request->have_health_problem,
            'health_problem_desc'=>[
                'en'=>$request->health_problem_desc,
                'ar'=>$request->health_problem_desc,
            ],
            'note'=>$request->note,
            'class_id'=>$request->class

        ]);
        return redirect()->back()->with(['success' => __('message.success')]);

        }catch (Exception $e){
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
    public function edit($id)
    {
        try {
            $student = Student::findorFail($id);
            $classes = Classs::all();
            return view('students_affairs/students.edit_student', compact('student','classes'));
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, $id)
    {
        try {
        $student = Student::findorFail($id);
        $requestData = $request;
        $filename = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images/students', $filename, 'public');
        $requestData["photo"] = '/storage/'.$path;
        $student->update([
            'name' => [
                'en' => $request->name,
                'ar' => $request->name_ar
            ],
            'photo'=>$requestData["photo"],
            'address'=>[
                'en'=> $request->address,
                'ar'=> $request->address_ar
            ],
            'sex'=>$request->sex,
            'birthdate'=>$request->birthdate,
            'place_of_birth'=>[
                'en'=>$request->place_of_birth,
                'ar'=>$request->place_of_birth_ar,
            ],
            'take_medicine'=>$request->take_medicine,
            'medicine_desc'=>[
                'en'=>$request->medicine_desc,
                'ar'=>$request->medicine_desc_ar,
            ],
            'have_allergy'=>$request->have_allergy,
            'allergy_desc' =>[
                'en'=>$request->allergy_desc,
                'ar'=>$request->allergy_desc_ar,
            ],
            'have_health_problem'=>$request->have_health_problem,
            'health_problem_desc'=>[
                'en'=>$request->health_problem_desc,
                'ar'=>$request->health_problem_desc,
            ],
            'note'=>$request->note,
            'class_id'=>$request->class

        ]);
        return redirect()->route('students.index');

        }catch (\Exception $e){
         return $e->getMessage();
        }
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
