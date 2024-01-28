<?php

namespace App\Http\Controllers;

use App\Http\Requests\Teacher\StoreTeacherRequest;
use App\Http\Requests\Teacher\UpdateTeacherRequest;
use App\Models\Teacher;
use App\Traits\EmployeeTrait;
use App\Traits\GenderTrait;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    use EmployeeTrait;
    use PhotoTrait;
    use GenderTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $teachers = Teacher::all();
            return view('employees_affairs/teachers.index_teacher',
                compact('teachers'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('employees_affairs/teachers.create_teacher');

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherRequest $request)
    {
        try {
            Teacher::create([
                'name' => [
                    'en' => $request->name,
                    'ar' => $request->name_ar,
                ],
                'photo'=>$this->insertImage($request,0,
                    "\App\Models\Teacher",'images/teachers'),
                'gender'=>[
                    'en'=>$this->gender($request,'en'),
                    'ar'=>$this->gender($request,'ar'),
                ],
                'contact' => $request->contact,
                'address' => [
                    'en' => $request->address,
                    'ar' => $request->address_ar,
                ],
                'qualification' => [
                    'en' => $request->qualification,
                    'ar' => $request->qualification_ar,
                ],
                'salary' => $request->salary,
                'major' => [
                    'en' => $request->major,
                    'ar' => $request->major_ar,
                ],
                'note' => $request->note,
            ]);
            return redirect()->back()->with(['success' => 'saved successfully']);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display deleted teachers.
     */
    public function show()
    {
        try {
            $teachers = Teacher::onlyTrashed()->get();
            return view('employees_affairs/teachers.deleted_teacher',
                compact('teachers', ));

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $teacher = Teacher::findorFail($id);
            return view('employees_affairs/teachers.edit_teacher',
                compact('teacher'));

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified Teacher.
     */
    public function update(UpdateTeacherRequest $request, $id)
    {
        try {
            $teacher = Teacher::findorFail($id);
            $teacher->update([
                    'name' => [
                        'en' => $request->name,
                        'ar' => $request->name_ar,
                    ],
                    'photo'=>$this->insertImage($request,$id,
                        "\App\Models\Teacher",'images/teachers'),
                    'gender'=>[
                        'en'=>$this->gender($request,'en'),
                        'ar'=>$this->gender($request,'ar'),
                    ],
                    'contact' => $request->contact,
                    'address' => [
                        'en' => $request->address,
                        'ar' => $request->address_ar,
                    ],
                    'qualification' => [
                        'en' => $request->qualification,
                        'ar' => $request->qualification_ar,
                    ],
                    'salary' => $request->salary,
                    'major' => [
                        'en' => $request->major,
                        'ar' => $request->major_ar,
                    ],
                    'note' => $request->note,
                ]);
            return redirect()->route('teachers.index')
                ->with(['success' => __('message.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
    /**
     * Remove the specified Teacher.
     */
    public function destroy($id)
    {
        try {
            Teacher::destroy($id);
            return redirect()->route('teachers.index')
                ->with(['warning' => trans('message.delete')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
    /**
     * Restore the specified Teacher.
     */
    public function restore($id)
    {
        try {
            Teacher::withTrashed()->where('id', $id)->restore();
            return redirect()->back()
                ->with(['success' => trans('message.restore')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove by force the specified Teacher.
     */
    public function forceDelete($id)
    {
        try {
            Teacher::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back()
                ->with(['warning' => trans('message.force delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * show teachers according to the search.
     */
    public function search(Request $request)
    {
        try {
            $search = $request->search;
            if(strtolower($search) == 'all' or $search == 'الكل')
                return $this->index();
            $teachers = Teacher::where(function ($query) use ($search){
                $query->where('name->en','like',"%$search%")
                    ->orwhere('name->ar','like',"%$search%")
                    ->orwhere('address->en','like',"%$search%")
                    ->orwhere('address->ar','like',"%$search%")
                    ->orwhere('gender->en','like',"%$search%")
                    ->orwhere('gender->ar','like',"%$search%")
                    ->orwhere('major->en','like',"%$search%")
                    ->orwhere('major->ar','like',"%$search%")
                    ->orwhere('contact','like',"%$search%")
                    ->orwhere('qualification->en','like',"%$search%")
                    ->orwhere('qualification->ar','like',"%$search%")
                    ->orwhere('salary','like',"%$search%");
            })->get();
            return view('employees_affairs/teachers.index_teacher',
                compact('search','teachers'));

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

}
