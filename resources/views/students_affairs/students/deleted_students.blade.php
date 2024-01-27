{{-- واجهة استعراض بيانات الطلاب العامة --}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}

        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">Deleted students</h4>
            </div>
        </div>

        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
        <!-- table-hover table-striped -->
        <div class="table-section">
            <div class="card table-section ">
                <table class=" " >
                    <thead>
                    <tr>
                        <th ><div class="th-head-1  " >{{__('public.id')}}</div></th>
                        <th ><div class="th-head-3" >{{__('public.name')}}</div></th>
                        <th ><div class="th-head-1" >photo</div></th>
                        <th ><div class="th-head-3" >{{__('public.address')}}</div></th>
                        <th ><div class="th-head-1" >gender</div></th>
                        <th ><div class="th-head-2" >birth date</div></th>
                        <th ><div class="th-head-2" >birth place</div></th>
                        <th ><div class="th-head-2" >{{__('public.class')}}</div></th>
                        <th ><div class="th-head-2" >{{__('public.created at')}}</div></th>
                        <th ><div class="th-head-2" >{{__('public.updated at')}}</div></th>
                        <th colspan="2"><div class="th-head-4" >{{__('public.processes')}}</div></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students  as $student )
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td><img src="{{asset($student->photo)}}"
                                class="student-img" alt="photo"></td>
                            <td>{{$student->address}}</td>
                            <td>{{$student->gender}}</td>
                            <td>{{$student->birthdate}}</td>
                            <td>{{$student->place_of_birth}}</td>
                            <td>{{$student->class->name}}</td>
                            <td>{{$student->created_at}}</td>
                            <td>{{$student->updated_at}}</td>
                            <td>
                                <a href="{{route('students.restore',$student->id)}}"
                                    class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> {{__('public.restore')}} </a>
                            </td>
                            <td>
                                <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete{{$student->id}}">
                                    <i class="fa-solid fa-trash"></i> {{__('public.force delete')}}
                                </button>
                                <!-- Modal -->

                                <div class="modal fade" id="delete{{$student->id}}"
                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{__('public.force delete')}}</h5>
                                            </div>
                                            <div class="modal-body">
                                                {{__('public.are you sure you want to completely delete').$student->name}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}</button>
                                                <form method="post" action="{{route('students.forceDelete',$student->id)}}">
                                                    @method('GET')
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">{{__('public.ok')}}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            {{-- واجهة المعلومات او الاستمارة الكاملة الخاصة بالطالب --}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
