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
        <div class="table-header mt-3 mb-3">
            <button class="save-button btn-info select_bt me-1 ms-1" onclick="toggleCheckboxes()" id="select_bt">{{__('public.select')}}</button>
            <button class="save-button btn-danger me-1 ms-1">{{__('public.delete all')}}</button>
        </div>
        <!-- table-hover table-striped -->
        <div class="table-section">
            <div class="card table-section ">
                <table class=" " id="check_table">
                    <thead>
                    <tr>
                        <th class=" me-4 ms-4">
                            <input type="checkbox" id="select_all" 
                                style="display: none" >
                        </th>
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
                    @foreach($employees  as $Employee )
                        <tbody>
                        <tr>
                            <td ><input type="checkbox" class="check_item ms-2 me-2" id="checkbox" style="display: none"></td>
                            <td>{{$Employee->id}}</td>
                            <td>{{$Employee->name}}</td>
                            <td>{{$Employee->sex}}</td>
                            <td><img src="{{URL::asset('assets/images/employees/'.$Employee->photo)}}"></td>
                            <td>{{$Employee->birthdate}}</td>
                            <td>{{$Employee->qualification}}</td>
                            <td>{{$Employee->address}}</td>
                            <td>{{$Employee->contact1}}</td>
                            <td>{{$Employee->contact2}}</td>
                            <td>{{$Employee->note}}</td>
                            <td>{{$Employee->created_at}}</td>
                            <td>{{$Employee->updated_at}}</td>
                            <td>
                                <a href="{{route('employees.edit',$Employee->id)}}"
                                    class="btn my-save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit </a>
                            </td>
                            <td>
                                <form method="post" action="{{route('employees.destroy',$Employee->id)}}">
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
    </div>
@endsection
