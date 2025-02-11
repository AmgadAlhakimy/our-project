@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">
        <!-- table-hover table-striped -->
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">{{__('teacher.deleted teachers')}} </h4>
            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class=" shadow-none mt-4 ">
            <div class="table-section card  ">
                <table class=" ">
                    <thead>
                    <tr>
                        <th>
                            <div class="th-head-1 form-label">{{__('public.id')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('public.name')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('public.photo')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('public.contact')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('public.gender')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('public.address')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('public.qualification')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('public.major')}}</div>
                        </th>
                        <th>
                            <div class="th-head-3 form-label">{{__('public.note')}}</div>
                        </th>
                        <th>
                            <div class="th-head-3 form-label">{{__('public.created at')}}</div>
                        </th>
                        <th>
                            <div class="th-head-3 form-label">
                                {{__('public.updated at')}}</div>
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
                        {{-- <th><div class="th-head-2"></div></th> --}}
                        {{-- <th><div class="th-head-1"></div></th> --}}
                    </tr>
                    </thead>
                    @foreach($teachers  as $teacher )
                        <tbody>
                        <tr>
                            <td>
                                <div class="td_rect">
                                {{$teacher->id}}</td>
                            <td>
                                <div class="td_rect">
                                {{$teacher->name}}</td>
                            <td><img src="{{asset($teacher->photo)}}"
                                     class="student-img" alt="photo"></td>
                            <td>
                                <div class="td_rect">
                                    {{$teacher->contact}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$teacher->gender}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$teacher->address}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$teacher->qualification}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$teacher->major}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$teacher->note}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$teacher->created_at}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$teacher->updated_at}}
                                </div>
                            </td>
                            @can('who did this')
                                <td>
                                    <div class="td_rect">
                                        {{$teacher->user->name}}
                                    </div>
                                </td>
                            @endcan
                            <td>
                                @can('restore teacher')
                                    <a href="{{route('teachers.restore',$teacher->id)}}"
                                       class="btn save-button btn-success w-25 me-1 ms-1 ">
                                        <i class="fa-solid fa-trash-can-arrow-up"></i> {{-- {{__('public.restore')}} --}}
                                    </a>
                                @endcan
                                @can('forceDelete teacher')
                                    <button class="btn clear-button btn-danger w-25 me-1 ms-1" data-bs-toggle="modal"
                                            data-bs-target="#delete{{$teacher->id}}">
                                        <i class="fa-solid fa-trash"></i>
                                        {{-- {{__('public.force delete')}} --}}
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="delete{{$teacher->id}}"
                                         tabindex="-1" aria-labelledby="exampleModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="modal-title">
                                                        <i class="fa-solid fa-trash-can danger_msg"></i>
                                                    </div>
                                                </div>
                                                <div class="modal-body form-label row">
                                                    <div class="col-12">
                                                        {{__('public.are you sure you want to delete')}}
                                                    </div>
                                                    <div class="col-12">
                                                        {{$teacher->name}}
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger clear-button ms-2 me-2"
                                                            data-bs-dismiss="modal">
                                                        {{__('public.cancel')}}
                                                    </button>
                                                    <form method="post"
                                                          action="{{route('teachers.forceDelete',$teacher->id)}}">
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
@endsection
