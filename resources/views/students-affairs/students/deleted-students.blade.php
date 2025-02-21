@extends('layouts.sidebar')
@section('content')
<div class="my-table mt-5">
    <div class="table-header">
        {{-- the title and search --}}
        <div class="row first-card ">
            <h4 class="col container-title mt-2">{{trans('student.deleted students')}}</h4>
        </div>
    </div>

    {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
    <!-- table-hover table-striped -->
    <div class="shadow-none mt-4">
        <div class="table-section card">
            <table id="check_table">
                <thead>
                    <tr>
                        <th class="num_table ">{{__('public.num')}}</th>

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
                        <th>
                            <div class="form-label ">
                                {{__('classroom.classroom')}}
                            </div>
                        </th>

                        @can('who did this')
                            <th>
                                <div class="table_test form-label ">
                                    {{__('user.user')}}
                                </div>
                            </th>
                        @endcan
                        <th colspan="2">
                            <div class="th-head-3 form-label">{{__('public.processes')}}</div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 1 ?>


                    @foreach($students as $student)
                    <tr>
                        <td class="num_table ">{{$counter}}</td>
                        <?php $counter++ ?>

                            <td>
                                <div class="td_rect">
                                    {{$student->id}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$student->name}}
                                </div>
                            </td>
                            <td>
                                <img src="{{asset($student->photo)}}" class="student-img" alt="photo">
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$student->address}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$student->gender}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$student->birthdate}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$student->place_of_birth}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$student->created_at}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$student->updated_at}}
                                </div>
                            </td>

                            <td>
                                <div class="td_rect">
                                    {{optional($student->classroom)->name}}
                                </div>
                            </td>
                            @can('who did this')
                                <td>
                                    <div class="td_rect">
                                        {{optional($student->user)->name}}
                                    </div>
                                </td>
                            @endcan
                            <td>
                                @can('restore student')
                                    <a href="{{route('students.restore', $student->id)}}"
                                        class="btn save-button btn-success w-50">
                                        <i class="fa-solid fa-trash-can-arrow-up"></i>
                                    </a>
                                @endcan

                            </td>
                            <td>
                                @can('forceDelete student')
                                    <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete{{$student->id}}">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="delete{{$student->id}}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="modal-title">
                                                        <i class="fa-solid fa-trash-can danger_msg"></i>
                                                    </div>
                                                </div>
                                                <div class="modal-body form-label">
                                                    {{__('public.are you sure you want to delete') . $student->name}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger clear-button ms-2 me-2"
                                                        data-bs-dismiss="modal">
                                                        {{__('public.cancel')}}
                                                    </button>
                                                    <form method="post" action="{{route('students.forceDelete', $student->id)}}">
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
