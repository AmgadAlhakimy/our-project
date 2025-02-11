<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\StoreTeacherRequest;
use App\Http\Requests\Teacher\UpdateTeacherRequest;
use App\Models\Teacher\Teacher;
use App\Traits\EmployeeTrait;
use App\Traits\PhotoTrait;
use Auth;

class TeacherController extends Controller
{
    use EmployeeTrait;
    use PhotoTrait;

    function __construct()
    {
        $this->middleware('permission:create teacher', ['only' => ['create','store']]);
        $this->middleware('permission:edit teacher', ['only' => ['edit']]);
        $this->middleware('permission:update teacher', ['only' => ['update']]);
        $this->middleware('permission:delete teacher', ['only' => ['destroy']]);
        $this->middleware('permission:display deleted teachers', ['only' => ['show']]);
        $this->middleware('permission:restore teacher', ['only' => ['restore']]);
        $this->middleware('permission:forceDelete teacher', ['only' => ['forceDelete']]);
    }

    /**
     * Show creating a new teacher page.
     */
    public function create()
    {
        try {
            return view('academic-dep.teachers.create-teacher',);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a new teacher.
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
                    "App\Models\Teacher\Teacher",'images/teachers'),
                'gender'=>[
                    'en'=>__('public.'.$request->gender),
                    'ar'=>__('public.'.$request->gender.'1'),
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
                'major' => [
                    'en' => $request->major,
                    'ar' => $request->major_ar,
                ],
                'note' => $request->note,
                'user_id' => Auth::id(),
            ]);
            return redirect()->back()->with(['success' => 'message.saved']);

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
            return view('academic-dep.teachers.deleted-teachers',
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
            return view('academic-dep.teachers.edit-teacher',
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
                        "\App\Models\Teacher\Teacher",'images/teachers'),
                    'gender'=>[
                        'en'=>__('public.'.$request->gender),
                        'ar'=>__('public.'.$request->gender.'1'),
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
                    'major' => [
                        'en' => $request->major,
                        'ar' => $request->major_ar,
                    ],
                    'note' => $request->note,
                'user_id' => Auth::id(),
                ]);
            return redirect()->route('display-teachers')
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
            $teacher = Teacher::findorFail($id);
            $teacher->user_id = Auth::id();
            $teacher->update();
            Teacher::destroy($id);
            return redirect()->route('display-teachers')
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
            $teacher = Teacher::findorFail($id);
            $teacher->user_id = Auth::id();
            $teacher->update();
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
            $this->deleteImage($id,"App\Models\Teacher\Teacher");
            Teacher::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back()
                ->with(['warning' => trans('message.force delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

}
