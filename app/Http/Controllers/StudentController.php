<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\StoreStudentRequest;
use App\Http\Requests\Student\UpdateStudentRequest;
use App\Models\Classroom\Classroom;
use App\Models\EducationalLevel;
use App\Models\Relative;
use App\Models\Student;
use App\Traits\PhotoTrait;
use Exception;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    use PhotoTrait;

    /**
     * Display students.
     */
    public function index()
    {
        try {
        $students = Student::paginate(20);
        $classrooms= Classroom::all();
        return view('students-affairs/students.show_students',
            compact('students', 'classrooms'));

        }catch (\Exception  $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show creating new CreateStudent page.
     */
    public function create()
    {
        try {
        $classrooms = Classroom::all();
        $relatives = Relative::all();
        $levels = EducationalLevel::all();
        return view('students-affairs/students.create_student',
            compact('classrooms','relatives', 'levels'));

        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a new CreateStudent.
     */
    public function store(StoreStudentRequest $request)
    {
//        try {
//        Student::create([
//            'name' => [
//                'en' => $request->name,
//                'ar' => $request->name_ar
//            ],
//            'photo'=>$this->insertImage($request,0,
//                "\App\Models\Student",'images/students'),
//            'address'=>[
//                'en'=> $request->address,
//                'ar'=> $request->address_ar
//            ],
//            'gender'=>[
//                'en'=>__('public.'.$request->gender),
//                'ar'=>__('public.'.$request->gender.'1'),
//            ],
//            'birthdate'=>$request->birthdate,
//            'place_of_birth'=>[
//              'en'=>$request->place_of_birth,
//              'ar'=>$request->place_of_birth_ar,
//            ],
//            'medicine_desc'=>[
//                'en'=>$request->medicine_desc,
//                'ar'=>$request->medicine_desc_ar,
//            ],
//            'allergy_desc' =>[
//                'en'=>$request->allergy_desc,
//                'ar'=>$request->allergy_desc_ar,
//            ],
//            'health_problem_desc'=>[
//                'en'=>$request->health_problem_desc,
//                'ar'=>$request->health_problem_desc,
//            ],
//            'note'=>$request->note,
//            'classroom_id'=>$request->classroom_id,
//            'relative_id'=>$request->relative_id,
//
//        ]);
//        return redirect()->back()->with(['success' => __('message.success')]);
//
//        }catch (Exception $e){
//            return redirect()->back()->with(['error' => $e->getMessage()]);
//        }
    }

    /**
     * Display deleted students.
     */
    public function show()
    {
        try {
            $students = Student::onlyTrashed()->get();
            return view('students-affairs/students.deleted-students',
                compact('students', ));

        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing CreateStudent page.
     */
    public function edit($id)
    {
        try {
            $student = Student::findorFail($id);
            $classrooms = Classroom::all();
            return view('students-affairs/students.edit_student',
                compact('student','classrooms'));

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified CreateStudent.
     */
    public function update(UpdateStudentRequest $request, $id)
    {
//        try {
//        $student = Student::findorFail($id);
//        $student->update([
//            'name' => [
//                'en' => $request->name,
//                'ar' => $request->name_ar
//            ],
//            'photo'=>$this->insertImage($request,$id,
//                "\App\Models\Student",'images/students'),
//
//            'address'=>[
//                'en'=> $request->address,
//                'ar'=> $request->address_ar
//            ],
//            'gender'=>[
//                'en'=>__('public.'.$request->gender),
//                'ar'=>__('public.'.$request->gender.'1'),
//            ],
//            'birthdate'=>$request->birthdate,
//            'place_of_birth'=>[
//                'en'=>$request->place_of_birth,
//                'ar'=>$request->place_of_birth_ar,
//            ],
//            'medicine_desc'=>[
//                'en'=>$request->medicine_desc,
//                'ar'=>$request->medicine_desc_ar,
//            ],
//            'allergy_desc' =>[
//                'en'=>$request->allergy_desc,
//                'ar'=>$request->allergy_desc_ar,
//            ],
//            'health_problem_desc'=>[
//                'en'=>$request->health_problem_desc,
//                'ar'=>$request->health_problem_desc,
//            ],
//            'note'=>$request->note,
//            'classroom_id'=>$request->classroom_id,
//            'relative_id'=>$request->relative_id,
//        ]);
//        return redirect()->route('students.index')
//            ->with(['success' => __('message.update')]);
//
//        }catch (\Exception $e){
//         return redirect()->back()->with(['error' => $e->getMessage()]);
//        }
    }

    /**
     * Remove the specified CreateStudent.
     */
    public function destroy($id)
    {
        try {
            Student::destroy($id);
            return redirect()->route('display-students')
                ->with(['warning' => trans('message.delete')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    /**
     * Restore the specified CreateStudent.
     */
    public function restore($id)
    {
        try {
            $classroom_id = Student::withTrashed()->select('classroom_id')->where('id', $id)->get();
            $classroom = Classroom::where('id', $classroom_id)->pluck('id');
            if($classroom->count() > 0){
            Student::withTrashed()->where('id', $id)->restore();
            return redirect()->back()
                ->with(['success' => trans('message.restore')]);
            }else{
                return redirect()->back() ->with(['error' => trans('message.restore_student_error')]);
            }
        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove by force the specified CreateStudent.
     */
    public function forceDelete($id)
    {
        try {
            $this->deleteImage($id,"App\Models\Student");

            Student::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back()
                ->with(['warning' => trans('message.force delete')]);

        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * show CreateStudent according to the search.
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
            })->orWhereHas('classroom',function ($query) use ($search){
                $query->where('name->en','like',"%$search%")
                    ->orwhere('name->ar','like',"%$search%");
            })->get();
            return view('students-affairs/students.show_students',
                compact('search','students'));

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /** 
     * show CreateStudent according to the search.
     */
    public function more($id)
    {
        try {
            $student = Student::findorFail($id);
            return view('students-affairs/students.student_more_info',
                compact('student',));

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * get classrooms according to educational level.
     */
    public function getClassrooms($id)
    {
        return Classroom::where('edu_id', $id)->pluck("name", "id");
        return 'hello world';
    }
}
