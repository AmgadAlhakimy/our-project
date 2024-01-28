{{-- واجهة استعراض بيانات الطلاب العامة --}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">Students Information</h4>
                <div class="row first-card mt-4">
                    <form method="post" action="{{route('students.search')}}">
                        @method('GET')
                        @csrf
                        <div class="row">
                            <label class="col-10">
                                <input type="text" required class="form-control "  name="search" value="{{isset($search) ? $search : ''}}">
                            </label>
                            <button type="submit" class="col save-button ">{{__('public.search')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class="table-section">
            <div class="card table-section ">
                <table class=" " >
                    <thead>
                    <tr>
                        <th ><div class="th-head-1  " >{{__('public.id')}}</div></th>
                        <th ><div class="th-head-3" >{{__('public.name')}}</div></th>
                        <th ><div class="th-head-1" >{{__('public.photo')}}</div></th>
                        <th ><div class="th-head-3" >{{__('public.address')}}</div></th>
                        <th ><div class="th-head-1" >{{__('student.gender')}}</div></th>
                        <th ><div class="th-head-2" >{{__('student.birth date')}}</div></th>
                        <th ><div class="th-head-2" >{{__('student.birth place')}}</div></th>
                        <th ><div class="th-head-2" >{{__('public.class')}}</div></th>
                        <th ><div class="th-head-2" >{{__('public.created at')}}</div></th>
                        <th ><div class="th-head-2" >{{__('public.updated at')}}</div></th>
                        <th colspan="2"><div class="th-head-4" >{{__('public.processes')}}</div></th>
                        <th ><div class="th-head-2" >{{__('student.more info')}}</div></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students  as $Student )
                        <tr class="test_1">
                            <td>{{$Student->id}}</td>
                            <td>{{$Student->name}}</td>
                            <td><img src="{{asset($Student->photo)}}"
                                class="student-img" alt="photo"></td>
                            <td>{{$Student->address}}</td>
                            <td>{{$Student->gender}}</td>
                            <td>{{$Student->birthdate}}</td>
                            <td>{{$Student->place_of_birth}}</td>
                            <td>{{$Student->classroom->name}}</td>
                            <td>{{$Student->created_at}}</td>
                            <td>{{$Student->updated_at}}</td>

                            <td>
                                <a href="{{route('students.edit',$Student->id)}}"
                                    class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> {{__('public.edit')}} </a>
                            </td>
                            <td>
                                <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete{{$Student->id}}">
                                    <i class="fa-solid fa-trash"></i> {{__('public.delete')}}
                                </button>
                                <!-- Modal -->

                                <div class="modal fade" id="delete{{$Student->id}}"
                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{__('public.delete')}}</h5>
                                            </div>
                                            <div class="modal-body">
                                                {{__('public.are you sure you want to delete').$Student->name}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}</button>
                                                <form method="post" action="{{route('students.destroy',$Student->id)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">{{__('public.ok')}}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            {{-- واجهة المعلومات او الاستمارة الكاملة الخاصة بالطالب --}}
                            <td>
                                <a href="{{route('students.more',$Student->id)}}"
                                    class="btn save-button btn-info w-100">
                                    <i class="fa-solid fa-info-circle"></i> {{__('Student.more info')}} </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
