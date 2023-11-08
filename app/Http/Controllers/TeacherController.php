<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Teacher;
use App\Traits\EmployeeTrait;

class TeacherController extends Controller
{
    use EmployeeTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $teachers = Teacher::all();
            return view('teachers.index', compact('teachers'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('teachers.create');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherRequest $request)
    {

        try {

            if ($request->sex == __('public.male')) {
                $sex_ar = __('public.male_ar');
            }
            if ($request->sex == __('public.female')) {
                $sex_ar = __('public.female_ar');
            }

            if ($request->qualification == __('teacher.high school')) {
                $qualification_ar = __('teacher.high school_ar');
            } elseif ($request->qualification == __('teacher.diploma')) {
                $qualification_ar = __('teacher.diploma_ar');
            } else {
                $qualification_ar = __('teacher.bachelor_ar');
            }

            if ($request->hasFile('photo')) {
                $file_name = $this->saveImage($request->photo, 'assets/images/teachers/');
            } else {
                $file_name = NULL;
            }

            Teacher::create([
                'name' => [
                    'en' => $request->name,
                    'ar' => $request->name_ar,
                ],
                'sex' => [
                    'en' => $request->sex,
                    'ar' => $sex_ar,
                ],
                'address' => [
                    'en' => $request->address,
                    'ar' => $request->address_ar,
                ],
                'qualification' => [
                    'en' => $request->qualification,
                    'ar' => $qualification_ar,
                ],
                'major' => [
                    'en' => $request->major,
                    'ar' => $request->major_ar,
                ],
                'photo' => $file_name,
                'contact' => $request->contact,
                'salary' => $request->salary,
                'note' => $request->note,
            ]);
            return redirect()->back()->with(['success' => 'saved successfully']);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $teacher = Teacher::findorFail($id);
            return view('teachers.edit', compact('teacher'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $teacher = Teacher::findorFail($id);
            $teacher::destroy($id);
            return redirect()->route('teachers.index')->with(['success' => trans('message.delete')]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
