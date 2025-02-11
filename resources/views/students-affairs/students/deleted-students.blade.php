{{-- واجهة استعراض بيانات الطلاب العامة --}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}

        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">{{trans('sidebar.deleted students')}}</h4>
            </div>
        </div>

        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
        <!-- table-hover table-striped -->
        <div class="table-section shadow-none">
            <div class="card table-section ">
                <table class=" ">
                    <thead>
                    <tr>
                        <th>
                            <div class="th-head-1 form-label  ">{{__('public.id')}}</div>
                        </th>
                        <th>
                            <div class="th-head-3 form-label">{{__('public.name')}}</div>
                        </th>
                        <th>
                            <div class="th-head-1 form-label">{{__('public.photo')}}</div>
                        </th>
                        <th>
                            <div class="th-head-3 form-label">{{__('public.address')}}</div>
                        </th>
                        <th>
                            <div class="th-head-1 form-label">{{__('public.gender')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label"> {{__('student.birthdate')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('student.birth place')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('public.created at')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('public.updated at')}}</div>
                        </th>
                        @can('who did this')
                            <th>
                                <div class="table_test form-label ">
                                    {{__('user.user')}}
                                </div>
                            </th>
                        @endcan
                        <th colspan="">
                            <div class="th-head-4 form-label">{{__('public.processes')}}</div>
                        </th>
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
                            <td>{{$student->created_at}}</td>
                            <td>{{$student->updated_at}}</td>
                            @can('who did this')
                                <td>
                                    <div class="td_rect">
                                        {{$student->user->name}}
                                    </div>
                                </td>
                            @endcan
                            <td>
                                @can('restore student')
                                    <a href="{{route('students.restore',$student->id)}}"
                                       class="btn save-button btn-success w-25">
                                        <i class="fa-solid fa-trash-can-arrow-up"></i>
                                    </a>
                                @endcan
                                @can('forceDelete student')
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
                                                    <div class="modal-title">
                                                        <i class="fa-solid fa-trash-can danger_msg"></i>
                                                    </div>
                                                </div>
                                                <div class="modal-body form-label">
                                                    {{__('public.are you sure you want to delete').$student->name}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger clear-button ms-2 me-2"
                                                            data-bs-dismiss="modal">
                                                        {{__('public.cancel')}}
                                                    </button>
                                                    <form method="post"
                                                          action="{{route('students.forceDelete',$student->id)}}">
                                                        @method('GET')
                                                        @csrf
                                                        <button type="submit"
                                                                class="btn btn-primary save-button ms-2 me-2">{{__('public.ok')}}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
