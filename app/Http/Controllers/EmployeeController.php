<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Traits\EmployeeTrait;


class EmployeeController extends Controller
{
    use EmployeeTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        if ($request->hasFile('photo')) {
            $file_name = $this->saveImage($request->photo, 'assets/images/employees/');
        } else {
            $file_name=NULL;
        }

        Employee::create([
            'name' => $request->name,
            'sex' => $request->sex,
            'photo' => $file_name,
            'birthdate' => $request->birthdate,
            'qualification' => $request->qualification,
            'address' => $request->address,
            'contact1' => $request->contact1,
            'contact2' => $request->contact2,
            'note' => $request->note,
        ]);
        return redirect()->back()->with(['success' => 'saved successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = Employee::findorFail($id);
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, $id)
    {
        $employee = Employee::findorFail($id);


//        if ($request->hasFile('photo')) {
//            $destenation='assets/images/employees/'.$employee->photo;
//            if(File::exists($destenation))
//            {
//                File::delete($destenation);
//            }
//            $file_name = $this->saveImage($request->photo, 'assets/images/employees/');
//        }
//
        if ($request->hasFile('photo')) {
            $file_name = $this->saveImage($request->photo, 'assets/images/employees/');
        }

        else {
            $file_name=$employee->photo;
        }
       $employee-> update([
            'name' => $request->name,
            'sex' => $request->sex,
            'photo' => $file_name,
            'birthdate' => $request->birthdate,
            'qualification' => $request->qualification,
            'address' => $request->address,
            'contact1' => $request->contact1,
            'contact2' => $request->contact2,
            'note' => $request->note,

        ]);
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }

//    public function update(Request $request): string
//    {
//        $path = $request->file('avatar')->store('avatars');
//
//        return $path;
//    }
}
