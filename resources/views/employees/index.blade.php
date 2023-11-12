@extends('layouts.sidebar')
@section('content')
    <div class="my-table">
        <div class="table-header">
            <h3>Employee Info</h3>
            <div>
                <input class="" placeholder="SEARCH">
                <button class="add-new">Search</button>
            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class="card table-section ">
            <table class=" ">
                <thead>
                <tr>
                    <th>
                        <div class="th-head-1">Id</div>
                    </th>
                    <th>
                        <div class="th-head-2">Name</div>
                    </th>
                    <th>
                        <div class="th-head-2">Sex</div>
                    </th>
                    <th>
                        <div class="th-head-2">Photo</div>
                    </th>
                    <th>
                        <div class="th-head-2">Birthdate</div>
                    </th>
                    <th>
                        <div class="th-head-3">Qualification</div>
                    </th>
                    <th>
                        <div class="th-head-2">Address</div>
                    </th>
                    <th>
                        <div class="th-head-2">Contact 1</div>
                    </th>
                    <th>
                        <div class="th-head-3">Contact 2</div>
                    </th>
                    <th>
                        <div class="th-head-3">Note</div>
                    </th>
                    <th>
                        <div class="th-head-3">Created at</div>
                    </th>
                    <th>
                        <div class="th-head-3">Updated at</div>
                    </th>
                    <th>
                        <div class="th-head-2">Processes</div>
                    </th>
                    <th>
                        <div class="th-head-1"></div>
                    </th>
                    <th>
                        <div class="th-head-1"></div>
                    </th>
                </tr>
                </thead>
                @foreach($employees  as $employee )
                    <tbody>
                    <tr>
                        <td>{{$employee->id}}</td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->sex}}</td>
                        <td><img src="{{URL::asset('assets/images/employees/'.$employee->photo)}}"></td>
                        <td>{{$employee->birthdate}}</td>
                        <td>{{$employee->qualification}}</td>
                        <td>{{$employee->address}}</td>
                        <td>{{$employee->contact1}}</td>
                        <td>{{$employee->contact2}}</td>
                        <td>{{$employee->note}}</td>
                        <td>{{$employee->created_at}}</td>
                        <td>{{$employee->updated_at}}</td>
                        <td>
                            <a href="{{route('employees.edit',$employee->id)}}"
                               class="btn my-save-button btn-success w-100">
                                <i class="fa-solid fa-pen-to-square"></i> Edit </a>
                        </td>
                        <td>
                            <form method="post" action="{{route('employees.destroy',$employee->id)}}">
                                @method('DELETE')
                                @csrf
                                <button class="my-clear-button btn-danger"><i class="fa-solid fa-trash"></i>
                                    Delete
                                </button>
                            </form>
                        </td>
                        <td></td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
@endsection
