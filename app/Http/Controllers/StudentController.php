<?php

namespace App\Http\Controllers;

use App\Http\Requests\student\StoreStudentRequest;
use App\Http\Requests\student\UpdateStudentRequest;
use App\Models\Classs;
use App\Models\Relative;
use App\Models\Student;
use App\Traits\GenderTrait;
use App\Traits\PhotoTrait;
use Exception;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    use PhotoTrait;
    use GenderTrait;

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
            return redirect()->back()->with(['error' => $e->getMessage()]);
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
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
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
            'photo'=>$this->image($request,0,
                "\App\Models\Student",'images/students'),
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
            return redirect()->back()->with(['error' => $e->getMessage()]);
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
            return redirect()->back()->with(['error' => $e->getMessage()]);
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
            return redirect()->back()->with(['error' => $e->getMessage()]);
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
            'photo'=>$this->image($request,$id,
                "\App\Models\Student",'images/students'),

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
        return redirect()->route('students.index')
            ->with(['success' => __('message.update')]);

        }catch (\Exception $e){
         return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified student.
     */
    public function destroy($id)
    {
        try {
            Student::destroy($id);
            return redirect()->route('students.index')
                ->with(['warning' => trans('message.delete')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    /**
     * Restore the specified student.
     */
    public function restore($id)
    {
        try {
            Student::withTrashed()->where('id', $id)->restore();
            return redirect()->back()
                ->with(['success' => trans('message.restore')]);

        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove by force the specified student.
     */
    public function forceDelete($id)
    {
        try {
            Student::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back()
                ->with(['warning' => trans('message.force delete')]);

        }catch (Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
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
            return redirect()->back()->with(['error' => $e->getMessage()]);
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
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
