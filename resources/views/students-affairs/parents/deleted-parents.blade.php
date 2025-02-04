@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">{{__('student.deleted superiors')}}</h4>
            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class="shadow-none mt-4">
            <div class="table-section card">
                <table id="check_table">
                    <thead>
                    <tr>
                        <th class="form-label">
                            {{__('public.id')}}
                        </th>
                        <th>
                            <div class="th-head-4 form-label">
                                {{__('student.father name')}}
                            </div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">
                                {{__('student.father work')}}
                            </div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('student.father contact 1')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('student.father contact 2')}}</div>
                        </th>
                        <th>
                            <div class="th-head-3 form-label">{{__('student.mother name')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('student.mother work')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('student.mother contact 1')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('student.mother contact 2')}}</div>
                        </th>
                        <th>
                            <div class="th-head-3 form-label">{{__('student.kin name')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('student.kin relationship')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('student.kin contact')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('public.created at')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('public.updated at')}}</div>
                        </th>
                        <th colspan="">
                            <div class="th-head-4 form-label">{{__('public.processes')}}</div>
                        </th>
                    </tr>
                    </thead>
                    @foreach($parents  as $parent )
                        <tbody>
                        <tr>
                            <td>
                                <div class="td_rect">
                                    {{$parent->id}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->father_name}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->father_work}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->father_contact1}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->father_contact2}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->mother_name}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->mother_work}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->mother_contact1}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->mother_contact2}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->kin_name}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->kin_relationship}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->kin_contact}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->created_at}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->updated_at}}
                                </div>
                            </td>
                            <td>
                                @can('restore superior')
                                    <a href="{{route('parents.restore',$parent->id)}}"
                                       class="btn save-button btn-success  w-25 me-1 ms-1">
                                        <i class="fa-solid fa-trash-can-arrow-up"></i>
                                        {{-- {{__('public.restore')}} --}}
                                    </a>
                                @endcan
                                @can('forceDelete superior')
                                    <button class="btn clear-button btn-danger  w-25 me-1 ms-1" data-bs-toggle="modal"
                                            data-bs-target="#delete{{$parent->id}}">
                                        <i class="fa-solid fa-trash"></i>
                                        {{-- {{__('public.force delete')}} --}}
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="delete{{$parent->id}}"
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
                                                        {{$parent->father_name}}
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger clear-button ms-2 me-2"
                                                            data-bs-dismiss="modal">
                                                        {{__('public.cancel')}}
                                                    </button>
                                                    <form method="post"
                                                          action="{{route('parents.forceDelete',$parent->id)}}">
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
