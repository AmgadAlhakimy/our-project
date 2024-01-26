<?php

namespace App\Http\Controllers;

use App\Http\Requests\student\StoreStudentRequest;
use App\Http\Requests\student\UpdateStudentRequest;
use App\Models\Classs;
use App\Models\Relative;
use App\Models\Student;
use Exception;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display students.
     */
    public function index()
    {
        try {
        $students = Student::all();
        $classes= Classs::all();
        return view('students_affairs/students.show_students',
            compact('students', 'classes'));

        }catch (\Exception  $e){
            return $e->getMessage();
        }
    }

    /**
     * Show creating new student page.
     */
    public function create()
    {
        try {
        $classes = Classs::all();
        $relatives = Relative::all();
        return view('students_affairs/students.create_student',
            compact('classes','relatives'));

        }catch (Exception $e){
            return $e->getMessage();
        }
    }
    /**
     * store image.
     */
    private function image($request, $id)
    {
        if ($request->photo != NULL){
        $requestData = $request->all();
        $filename = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images/students', $filename, 'public');
        $requestData["photo"] = '/storage/'.$path;
        return $requestData['photo'];
        }else{
             $student = Student::findorFail($id);
             return  $student->photo;
        }
    }
    /**
     * translate the gender.
     */
    private function gender($request,$lang)
    {
        if($request->gender == 'ذكر')
        {
            $gender_en = $request->gender_ar_m;
            $gender_ar = $request->gender;
        }
        elseif (strtolower($request->gender )== 'male')
        {
            $gender_en = $request->gender;
            $gender_ar = $request->gender_ar_m;
        }
        elseif ($request->gender == 'أنثى')
        {
            $gender_en = $request->gender_ar_f;
            $gender_ar = $request->gender;
        }
        elseif (strtolower($request->gender )== 'female')
        {
            $gender_en = $request->gender;
            $gender_ar = $request->gender_ar_f;
        }

        if($lang == 'en')
            return $gender_en;
        elseif($lang == 'ar')
            return  $gender_ar;
    }
    /**
     * Store a new student.
     */
    public function store(StoreStudentRequest $request)
    {
        try {
        Student::create([
            'name' => [
                'en' => $request->name,
                'ar' => $request->name_ar
            ],
            'photo'=>$this->image($request,0),
            'address'=>[
                'en'=> $request->address,
                'ar'=> $request->address_ar
            ],
            'gender'=>[
                'en'=>$this->gender($request,'en'),
                'ar'=>$this->gender($request,'ar'),
            ],
            'birthdate'=>$request->birthdate,
            'place_of_birth'=>[
              'en'=>$request->place_of_birth,
              'ar'=>$request->place_of_birth_ar,
            ],
            'medicine_desc'=>[
                'en'=>$request->medicine_desc,
                'ar'=>$request->medicine_desc_ar,
            ],
            'allergy_desc' =>[
                'en'=>$request->allergy_desc,
                'ar'=>$request->allergy_desc_ar,
            ],
            'health_problem_desc'=>[
                'en'=>$request->health_problem_desc,
                'ar'=>$request->health_problem_desc,
            ],
            'note'=>$request->note,
            'class_id'=>$request->class_id,
            'relative_id'=>$request->relative_id,

        ]);
        return redirect()->back()->with(['success' => __('message.success')]);

        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Display deleted students.
     */
    public function show()
    {
        try {
            $students = Student::onlyTrashed()->get();
            return view('students_affairs/students.deleted_students',
                compact('students', ));

        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Show the form for editing student page.
     */
    public function edit($id)
    {
        try {
            $student = Student::findorFail($id);
            $classes = Classs::all();
            return view('students_affairs/students.edit_student',
                compact('student','classes'));

        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Update the specified student.
     */
    public function update(UpdateStudentRequest $request, $id)
    {
        try {
        $student = Student::findorFail($id);
        $student->update([
            'name' => [
                'en' => $request->name,
                'ar' => $request->name_ar
            ],
            'photo'=>$this->image($request, $id),
            'address'=>[
                'en'=> $request->address,
                'ar'=> $request->address_ar
            ],
            'gender'=>[
                'en'=>$this->gender($request,'en'),
                'ar'=>$this->gender($request,'ar'),
            ],
            'birthdate'=>$request->birthdate,
            'place_of_birth'=>[
                'en'=>$request->place_of_birth,
                'ar'=>$request->place_of_birth_ar,
            ],
            'medicine_desc'=>[
                'en'=>$request->medicine_desc,
                'ar'=>$request->medicine_desc_ar,
            ],
            'allergy_desc' =>[
                'en'=>$request->allergy_desc,
                'ar'=>$request->allergy_desc_ar,
            ],
            'health_problem_desc'=>[
                'en'=>$request->health_problem_desc,
                'ar'=>$request->health_problem_desc,
            ],
            'note'=>$request->note,
            'class_id'=>$request->class_id,
            'relative_id'=>$request->relative_id,
        ]);
        return redirect()->route('students.index');

        }catch (\Exception $e){
         return $e->getMessage();
        }
    }

    /**
     * Remove the specified student.
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


    /**
     * Restore the specified student.
     */
    public function restore($id)
    {
        try {
            Student::withTrashed()->where('id', $id)->restore();
            return redirect()->back();

        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Remove by force the specified student.
     */
    public function forceDelete($id)
    {
        try {
            Student::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back();

        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * show student according to the search.
     */
    public function search(Request $request)
    {
        try {
            $search = $request->search;
            if(strtolower($search) == 'all' or $search == 'الكل')
                return $this->index();
            $students = Student::where(function ($query) use ($search){
                $query->where('name->en','like',"%$search%")
                    ->orwhere('name->ar','like',"%$search%")
                    ->orwhere('address->en','like',"%$search%")
                    ->orwhere('address->ar','like',"%$search%")
                    ->orwhere('gender->en','like',"%$search%")
                    ->orwhere('gender->ar','like',"%$search%")
                    ->orwhere('place_of_birth->en','like',"%$search%")
                    ->orwhere('place_of_birth->ar','like',"%$search%")
                    ->orwhere('birthdate','like',"%$search%");
            })->orWhereHas('class',function ($query) use ($search){
                $query->where('name->en','like',"%$search%")
                    ->orwhere('name->ar','like',"%$search%");
            })->get();
            return view('students_affairs/students.show_students',
                compact('search','students'));

        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * show student according to the search.
     */
    public function more($id)
    {
        try {
            $student = Student::findorFail($id);
            return view('students_affairs/students.student_more_info',
                compact('student',));

        }catch (\Exception $e){
            return $e->getMessage();
        }
    }
}
